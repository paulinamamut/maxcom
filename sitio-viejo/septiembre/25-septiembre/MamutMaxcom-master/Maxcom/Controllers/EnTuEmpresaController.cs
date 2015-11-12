using System;
using System.Collections.Generic;
using System.Configuration;
using System.IO;
using System.Linq;
using System.Net;
using System.Text.RegularExpressions;
using System.Web.Mvc;
using Maxcom.Helpers;

namespace Maxcom.Controllers
{
    public class EnTuEmpresaController : Controller
    {
        //
        // GET: /EnTuEmpresa/
        #region template html
        private const string Template = @"<!doctype html>
<html>
<head>
    <meta charset=""UTF-8"">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <STYLE type=""text/css"">
        H3 {{ font-family: 'Maven Pro',sans-serif; }}
        P {{ font-family: 'Maven Pro',sans-serif; font-size: 14px; }}
    </STYLE>
</head>
    <body>
        <div style=""background: none repeat scroll 0 0 #c32030; color: #fff;"">
            <img src=""http://maxcomforbusiness.com/emm/mailing/resources/logo.png"" alt=""Maxcom Telecomunicaciones"">
        </div>
    <p>Has recibido un mensaje por medio del sitio de atenci&oacute;n a clientes Maxcom. La informaci&oacute;n se incluye a continuaci&oacute;n:</p>
    <h3><u>Informaci&oacute;n general</u></h3>
    <p><b>Nombre:</b>&nbsp;{0}</p>
    <p><b>Puesto:</b>&nbsp;{1}</p>    
    <p><b>Empresa:</b>&nbsp;{2}</p>    
    <p><b>Correo electr&oacute;nico:</b>&nbsp;{3}</p>
    <p><b>N&uacute;mero telef&oacute;nico de contacto:</b>&nbsp;{4}</p>
    <p><b>Direcci&oacute;n:</b>&nbsp;{5}</p>    
    <p><b>Asunto:</b>&nbsp;{6}</p>
    <p><b>Mensaje:</b></p>
    <p>{7}</p>
    {8}
    <div style=""background: none repeat scroll 0 0 #c32030; color: #fff;"">
        <p>&copy; 2014 Maxcom Telecomunicaciones</p>
    </div>
</body>
</html>";
        private const string QueryStringInfo = "<p>Adicionalmente, se incluy&oacute; la siguiente informaci&oacute;n en la petici&oacute;n de env&iacute;o:</p>";
        #endregion
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult SolucionesDeConectividad()
        {
            return View();
        }

        public ActionResult SolucionesDeComunicacion()
        {
            return View();
        }

        public ActionResult SolucionesCompartidas()
        {
            return View();
        }

        public ActionResult ContactoComercial(string nombre, string puesto, string empresa, string email, string empleados,
            string telefono, string direccion, string asunto, string cual, string mensaje, string operation) {
            var regex = new Regex(@"^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$");
            if (string.IsNullOrEmpty(operation)) return View();
            ViewData["Nombre"] = nombre;
            ViewData["Puesto"] = puesto;
            ViewData["Empresa"] = empresa;
            ViewData["Email"] = email;
            ViewData["Telefono"] = telefono;
            ViewData["Direccion"] = direccion;
            ViewData["Cual"] = cual;
            ViewData["Mensaje"] = mensaje;
            var qs = "";
            if (string.IsNullOrEmpty(((((System.Web.Mvc.Controller)(this)).Request).Form)["recaptcha_response_field"])) {
                ViewData["QuieroException"] = "<img src=\"/img/error.png\"/> Por favor completa el Captcha.";
            } else {
                var response = new Recaptcha.RecaptchaValidator {
                    Challenge = ((((System.Web.Mvc.Controller)(this)).Request).Form)["recaptcha_challenge_field"],
                    Response = ((((System.Web.Mvc.Controller)(this)).Request).Form)["recaptcha_response_field"],
                    PrivateKey = "6LfumgcTAAAAAG4_s8P4MPcePXs8Oaoi_QItaIT6",
                    RemoteIP = GetUserIPAddress()
                }.Validate();
                if (!response.IsValid)
                    ViewData["QuieroException"] = "<img src=\"/img/error.png\"/> Hubo un error al validar el Captcha.";
            }
            if (string.IsNullOrEmpty(nombre) || string.IsNullOrEmpty(puesto) || string.IsNullOrEmpty(empresa) || string.IsNullOrEmpty(email) ||
                string.IsNullOrEmpty(telefono) || string.IsNullOrEmpty(direccion) ||
                ((string.IsNullOrEmpty(asunto) || asunto == "Selecciona una opción") || (asunto == "Otro" && string.IsNullOrEmpty(cual))) ||
                (string.IsNullOrEmpty(empleados) || asunto == "Selecciona el número de empleados") || string.IsNullOrEmpty(mensaje))
                ViewData["Exception"] = "<img src=\"/img/error.png\"/> Por favor llena todos los campos.";
            else {
                if (!regex.IsMatch(email)) ViewData["Exception"] = "<img src=\"/img/error.png\"/> La dirección de correo electrónico no es v&aacute;lida.";
                ViewData[asunto] = "selected";
                ViewData[empleados] = "selected";
                if (asunto == "Otro") ViewData["Call"] = " onload='call();' ";
            }
            if (ViewData.ContainsKey("Exception")) return View();
            if (Request.QueryString.Count != 0)
                qs = Request.QueryString.AllKeys.Aggregate(QueryStringInfo, (current, data) => current + string.Format("<p><b>{0}:</b>&nbsp;{1}</p>", data, Request.QueryString[data]));

            var msg = string.Format(Template, nombre, puesto, empresa, email, telefono, direccion, asunto == "Otro" ? cual : asunto, mensaje, qs);
            ViewData["Success"] = SendEmail(msg, "Contacto Atención a clientes Maxcom", email);
            if ((string)ViewData["Success"] == "OK")
                return Redirect("/Gracias");
            return View();
        }

        private static string SendEmail(string message, string subject, string client) {
            try {
                var host = ConfigurationManager.AppSettings["smtp"];
                var login = ConfigurationManager.AppSettings["user"];
                var password = ConfigurationManager.AppSettings["password"];
                var from = ConfigurationManager.AppSettings["from"];
                var mailSmtp = new MailSmtp(host, login, password);
                var mailList = new List<string>();
                if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailEmpresa1"]))
                    mailList.Add(ConfigurationManager.AppSettings["emailEmpresa1"]);
                if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailEmpresa2"]))
                    mailList.Add(ConfigurationManager.AppSettings["emailEmpresa2"]);
                if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailEmpresa3"]))
                    mailList.Add(ConfigurationManager.AppSettings["emailEmpresa3"]);
                var mailTo = mailList.ToArray();
                mailSmtp.SendMail(from, mailTo, new[] { client }, subject, message);
               return "OK";
            } catch (Exception ex) {
                return "<span class=\"error\"><img src=\"/img/error.png\"/>" + ex.Message + "</span>";
            }
        }
        public static string GetUserIPAddress() {
            var context = System.Web.HttpContext.Current;
            string ip = String.Empty;

            if (context.Request.ServerVariables["HTTP_X_FORWARDED_FOR"] != null)
                ip = context.Request.ServerVariables["HTTP_X_FORWARDED_FOR"].ToString();
            else if (!String.IsNullOrWhiteSpace(context.Request.UserHostAddress))
                ip = context.Request.UserHostAddress;

            if (ip == "::1")
                ip = "127.0.0.1";

            return ip;
        }
    }
}
