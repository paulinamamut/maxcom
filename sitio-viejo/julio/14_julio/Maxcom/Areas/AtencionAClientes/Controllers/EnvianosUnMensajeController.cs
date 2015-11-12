using System;
using System.Collections.Generic;
using System.Configuration;
using System.IO;
using System.Linq;
using System.Net;
using System.Text.RegularExpressions;
using System.Web.Mvc;
using Maxcom.Helpers;

namespace Maxcom.Areas.AtencionAClientes.Controllers {
    public class EnvianosUnMensajeController : Controller {
        //
        // GET: /AtencionAClientes/EnvianosUnMensaje/

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
    <p><b>Nombre:</b>&nbsp;{0}</p>{7}
    <p><b>Correo electr&oacute;nico:</b>&nbsp;{1}</p>
    <p><b>N&uacute;mero telef&oacute;nico de contacto:</b>&nbsp;{2}</p>
    <p><b>Asunto:</b>&nbsp;{3}</p>
    <p><b>Mensaje:</b></p>
    <p>{4}</p>
    {5}
    {6}
    <div style=""background: none repeat scroll 0 0 #c32030; color: #fff;"">
        <p>&copy; 2014 Maxcom Telecomunicaciones</p>
    </div>
</body>
</html>";
        private const string AdditionalInfo = @"<h3><u>Datos adicionales</u></h3>
    <p><b>Calle:</b>&nbsp;{0}</p>
    <p><b>N&uacute;mero Exterior:</b>&nbsp;{1}&nbsp;&nbsp;&nbsp;&nbsp;<b>N&uacute;mero Interior:</b>&nbsp;{2}</p>
    <p><b>Entrecalles:</b>&nbsp;{3}</p>
    <p><b>Colonia:</b>&nbsp;{4}&nbsp;&nbsp;&nbsp;&nbsp;<b>Municipio/Delegaci&oacute;n:</b>&nbsp;{5}</p>
    <p><b>Entidad:</b>&nbsp;{6}</p>";

        private const string QueryStringInfo =
            "<p>Adicionalmente, se incluy&oacute; la siguiente informaci&oacute;n en la petici&oacute;n de env&iacute;o:</p>";

        #endregion

        public ActionResult Index() {
            return View();
        }

        public ActionResult QuieroSerCliente(string nombre, string email, string telefono, string calle,
            string exterior, string interior, string entrecalles, string colonia, string municipio,
            string entidad, string asunto, string mensaje, string operation) {
            var regex =
                new Regex(
                    @"^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$");

            if (Request.QueryString.Count != 0 && Request.QueryString["type"] == "contratacion") {
                //?type=contratacion&combo=Max Conéctate 3&tv=&Uacute;nico HBO&cel=Libre&total=856
                ViewData["Paquete"] = "<p>Seleccionaste: </p>\n	<ul>\n";
                if (Request.QueryString["combo"] != null)
                    ViewData["Paquete"] += "<li><b>Combo:</b>&nbsp;" + Request.QueryString["combo"] + "</li>\n";
                if (Request.QueryString["tv"] != null)
                    ViewData["Paquete"] += "<li><b>TV:</b>&nbsp;" + Request.QueryString["tv"] + "</li>\n";
                if (Request.QueryString["cel"] != null)
                    ViewData["Paquete"] += "<li><b>Celular:</b>&nbsp;" + Request.QueryString["cel"] + "</li>\n";
                if (Request.QueryString["total"] != null)
                    ViewData["Paquete"] += @"</ul><div class=""resumen"">
	<strong class=""precio"">$" + Request.QueryString["total"] + @"</strong>
	<p>Al mes por todos tus servicios</p>
</div>";
            }
            if (string.IsNullOrEmpty(operation)) return View();

            ViewData["QuieroNombre"] = nombre;
            ViewData["QuieroEmail"] = email;
            ViewData["QuieroTelefono"] = telefono;
            ViewData["QuieroCalle"] = calle;
            ViewData["QuieroExterior"] = exterior;
            ViewData["QuieroInterior"] = interior;
            ViewData["QuieroEntrecalles"] = entrecalles;
            ViewData["QuieroColonia"] = colonia;
            ViewData["QuieroMunicipio"] = municipio;
            ViewData["QuieroMensaje"] = mensaje;
            var msg = "";
            var request =
                WebRequest.Create(
                    string.Format(
                        "https://www.google.com/recaptcha/api/siteverify?secret=6LfumgcTAAAAAG4_s8P4MPcePXs8Oaoi_QItaIT6&response={0}",
                        Request.Form["g-recaptcha-response"]));
            request.Method = "POST";
            request.ContentLength = 0;
            using (var response = request.GetResponse()) {
                Console.WriteLine(((HttpWebResponse) response).StatusDescription);
                using (var responseDataStream = response.GetResponseStream()) {
                    if (responseDataStream == null)
                        ViewData["QuieroException"] = "<img src=\"/img/error.png\"/> Por favor completa el Captcha.";
                    else {
                        using (var reader = new StreamReader(responseDataStream)) {
                            var responseFromServer = reader.ReadToEnd();
                            if (!responseFromServer.Contains("true")) {
                                ViewData["QuieroException"] =
                                    "<img src=\"/img/error.png\"/> Por favor completa el Captcha.";
                            }
                        }
                    }
                }
            }
            if (string.IsNullOrEmpty(nombre) || string.IsNullOrEmpty(email) || string.IsNullOrEmpty(telefono) ||
                (string.IsNullOrEmpty(asunto) || asunto == "Selecciona una opción") || string.IsNullOrEmpty(mensaje))
                ViewData["QuieroException"] = "<img src=\"/img/error.png\"/> Por favor llena todos los campos.";
            else {
                if (!regex.IsMatch(email)) {
                    ViewData["QuieroException"] =
                        "<img src=\"/img/error.png\"/> La dirección de correo electrónico no es v&aacute;lida.";
                }
                ViewData[asunto] = "selected";
            }
            if (asunto != "Contratación de servicios") {
                if (ViewData.ContainsKey("QuieroException")) return View();
                if (Request.QueryString.Count == 0) {
                    ViewData["Paquete"] = "";
                        //qs = Request.QueryString.AllKeys.Aggregate(QueryStringInfo, (current, data) => current + string.Format("<p><b>{0}:</b>&nbsp;{1}</p>", data, Request.QueryString[data]));
                }
                    msg = string.Format(Template, nombre, email, telefono, asunto, mensaje, "", ViewData["Paquete"], "");
                ViewData["QuieroSuccess"] = SendEmailQuieroSer(msg, "Contacto Atención a clientes Maxcom");
                if ((string) ViewData["QuieroSuccess"] == "OK")
                    return RedirectToAction("Gracias");
                return View();
            }
            if (string.IsNullOrEmpty(calle) || string.IsNullOrEmpty(exterior) || string.IsNullOrEmpty(colonia) ||
                string.IsNullOrEmpty(municipio) || (string.IsNullOrEmpty(entidad) || entidad == "Selecciona tu Entidad"))
                ViewData["QuieroException"] = "<img src=\"/img/error.png\"/>Por favor llena todos los campos.";
            ViewData["QuieroCall"] = " onload='call();' ";
            ViewData[entidad] = "selected";
            if (ViewData.ContainsKey("QuieroException")) return View();
            var xtra = string.Format(AdditionalInfo, calle, exterior, interior, entrecalles, colonia, municipio, entidad);
            if (Request.QueryString.Count == 0) {
                ViewData["Paquete"] = "";
                    //qs = Request.QueryString.AllKeys.Aggregate(QueryStringInfo, (current, data) => current + string.Format("<p><b>{0}:</b>&nbsp;{1}</p>", data, Request.QueryString[data]));
            }
            msg = string.Format(Template, nombre, email, telefono, asunto, mensaje, xtra, ViewData["Paquete"], "");
            ViewData["QuieroSuccess"] = SendEmailQuieroSer(msg, "Contacto Atención a clientes Maxcom");
            if ((string) ViewData["QuieroSuccess"] == "OK")
                return RedirectToAction("Gracias");
            return View();
        }

        public ActionResult YaSoyCliente(string nombre, string contrato, string email, string telefono,
            string asunto, string mensaje, string operation) {
            var regex =
                new Regex(
                    @"^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$");
            if (string.IsNullOrEmpty(operation)) return View();
            ViewData["YaSoyNombre"] = nombre;
            ViewData["YaSoyContrato"] = contrato;
            ViewData["YaSoyEmail"] = email;
            ViewData["YaSoyTelefono"] = telefono;
            ViewData["YaSoyMensaje"] = mensaje;
            var qs = "";
            var request =
                WebRequest.Create(
                    string.Format(
                        "https://www.google.com/recaptcha/api/siteverify?secret=6LfumgcTAAAAAG4_s8P4MPcePXs8Oaoi_QItaIT6&response={0}",
                        Request.Form["g-recaptcha-response"]));
            request.Method = "POST";
            request.ContentLength = 0;
            using (var response = request.GetResponse()) {
                Console.WriteLine(((HttpWebResponse) response).StatusDescription);
                using (var responseDataStream = response.GetResponseStream()) {
                    if (responseDataStream == null)
                        ViewData["YaSoyException"] = "<img src=\"/img/error.png\"/> Por favor completa el Captcha.";
                    else {
                        using (var reader = new StreamReader(responseDataStream)) {
                            var responseFromServer = reader.ReadToEnd();
                            if (!responseFromServer.Contains("true")) {
                                ViewData["YaSoyException"] =
                                    "<img src=\"/img/error.png\"/> Por favor completa el Captcha.";
                            }
                        }
                    }
                }
            }
            if (string.IsNullOrEmpty(nombre) || string.IsNullOrEmpty(email) || string.IsNullOrEmpty(contrato) ||
                string.IsNullOrEmpty(telefono) || (string.IsNullOrEmpty(asunto) || asunto == "Selecciona una opción") ||
                string.IsNullOrEmpty(mensaje))
                ViewData["YaSoyException"] = "<img src=\"/img/error.png\"/> Por favor llena todos los campos.";
            else {
                if (!regex.IsMatch(email)) {
                    ViewData["YaSoyException"] =
                        "<img src=\"/img/error.png\"/> La dirección de correo electrónico no es v&aacute;lida.";
                }
                ViewData[asunto] = "selected";
            }
            if (ViewData.ContainsKey("YaSoyException")) return View();
            if (Request.QueryString.Count != 0) {
                qs = Request.QueryString.AllKeys.Aggregate(QueryStringInfo,
                    (current, data) =>
                        current + string.Format("<p><b>{0}:</b>&nbsp;{1}</p>", data, Request.QueryString[data]));
            }
            var msg = string.Format(Template, nombre, email, telefono, asunto, mensaje, "", qs,
                string.Format("<p><b>Número de cuenta Maxcom:</b>&nbsp;{0}</p>", contrato));
            ViewData["YaSoySuccess"] = SendEmailYaSoy(msg, "Contacto Atención a clientes Maxcom");
            if ((string) ViewData["YaSoySuccess"] == "OK")
                return RedirectToAction("Gracias");
            return View();
        }

        public ActionResult Gracias() {
            return View();
        }

        private static string SendEmailQuieroSer(string message, string subject) {
            var mailList = new List<string>();
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailQuieroSer1"]))
                mailList.Add(ConfigurationManager.AppSettings["emailQuieroSer1"]);
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailQuieroSer2"]))
                mailList.Add(ConfigurationManager.AppSettings["emailQuieroSer2"]);
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailQuieroSer3"]))
                mailList.Add(ConfigurationManager.AppSettings["emailQuieroSer3"]);
            var mailTo = mailList.ToArray();
            return SendEmail(message, subject, mailTo);
        }

        private static string SendEmailYaSoy(string message, string subject) {
            var mailList = new List<string>();
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailYaSoy1"]))
                mailList.Add(ConfigurationManager.AppSettings["emailYaSoy1"]);
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailYaSoy2"]))
                mailList.Add(ConfigurationManager.AppSettings["emailYaSoy2"]);
            if (!string.IsNullOrEmpty(ConfigurationManager.AppSettings["emailYaSoy3"]))
                mailList.Add(ConfigurationManager.AppSettings["emailYaSoy3"]);
            var mailTo = mailList.ToArray();
            return SendEmail(message, subject, mailTo);
        }

        private static string SendEmail(string message, string subject, string[] mailTo) {
            try {
                var host = ConfigurationManager.AppSettings["smtp"];
                var login = ConfigurationManager.AppSettings["user"];
                var password = ConfigurationManager.AppSettings["password"];
                var from = ConfigurationManager.AppSettings["from"];
                var mailSmtp = new MailSmtp(host, login, password);
                mailSmtp.SendMail(from, mailTo, subject, message);
                return "OK";
            } catch (Exception ex) {
                return "<span class=\"error\"><img src=\"/img/error.png\"/>" + ex.Message + "</span>";
            }
        }
    }
}