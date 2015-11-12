using System.IO;
using System.Linq;
using System.Net.Mail;
using System.Text;

namespace Maxcom.Helpers {
    public class MailSmtp {
        private readonly string _smtpHost;
        private readonly string _smtpLogin;
        private readonly string _smtpPassword;
        private string _smtpException;

        public string SmtpHost {
            get { return _smtpHost; }
        }

        public string SmtpLogin {
            get { return _smtpLogin; }
        }

        public string SmtpPassword {
            get { return _smtpPassword; }
        }

        public string SmtpException {
            get { return _smtpException; }
        }

        public MailSmtp(string host, string login, string password) {
            _smtpHost = host;
            _smtpLogin = login;
            _smtpPassword = password;
        }

        private MailMessage LoadInfoBasic(MailMessage correo, string from, string asunto, string contenido) {
            correo.From = new MailAddress(from);
            correo.Subject = asunto;
            correo.Body = contenido;
            correo.BodyEncoding = Encoding.UTF8;
            correo.IsBodyHtml = true;
            correo.Priority = MailPriority.Normal;
            return correo;
        }

        private bool SendMail(MailMessage correo) {
            var smtpClient = new SmtpClient();
            _smtpException = "";
            smtpClient.Host = _smtpHost;
            smtpClient.Port = 25;
            try {
                smtpClient.Send(correo);
                return true;
            } catch (SmtpFailedRecipientsException ex) {
                _smtpException = ex.Message;
                return false;
            }
        }

        public bool SendMail(string from, string[] mailTo, string asunto, string contenido) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            return SendMail(correo);
        }

        public bool SendMail(string from, string[] mailTo, string[] cc, string asunto, string contenido) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in cc)
                correo.CC.Add(addresses);
            return SendMail(correo);
        }

        public bool SendMail(string from, string[] mailTo, string asunto, string[] bcc, string contenido) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in bcc)
                correo.Bcc.Add(addresses);
            return SendMail(correo);
        }

        public bool SendMail(string from, string[] mailTo, string[] cc, string[] bcc, string asunto, string contenido) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in cc)
                correo.CC.Add(addresses);
            foreach (var addresses in bcc)
                correo.Bcc.Add(addresses);
            return SendMail(correo);
        }

        public bool SendMailConAdjunto(string from, string[] mailTo, string asunto, string contenido,
            string[] archivoAdjunto) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var attachment in archivoAdjunto.Select(fileName => new Attachment(fileName, "application/octet-stream"))) {
                correo.Attachments.Add(attachment);
            }
            return SendMail(correo);
        }

        public bool SendMailConAdjunto(string from, string[] mailTo, string asunto, string contenido,
            MemoryStream archivoAdjunto) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            var attachment = new Attachment(archivoAdjunto, "Factura.pdf", "application/octet-stream");
            correo.Attachments.Add(attachment);
            return SendMail(correo);
        }

        public bool SendMailConAdjunto(string from, string[] mailTo, string[] cc, string asunto, string contenido,
            string[] archivoAdjunto) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in cc)
                correo.CC.Add(addresses);
            foreach (var attachment in archivoAdjunto.Select(fileName => new Attachment(fileName, "application/pdf"))) {
                correo.Attachments.Add(attachment);
            }
            return SendMail(correo);
        }

        public bool SendMailConAdjunto(string from, string[] mailTo, string asunto, string[] bcc, string contenido,
            string[] archivoAdjunto) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in bcc)
                correo.Bcc.Add(addresses);
            foreach (var attachment in archivoAdjunto.Select(fileName => new Attachment(fileName, "application/octet-stream"))) {
                correo.Attachments.Add(attachment);
            }
            return SendMail(correo);
        }

        public bool SendMailConAdjunto(string from, string[] mailTo, string[] cc, string[] bcc, string asunto,
            string contenido, string[] archivoAdjunto) {
            var correo = LoadInfoBasic(new MailMessage(), from, asunto, contenido);
            foreach (var addresses in mailTo)
                correo.To.Add(addresses);
            foreach (var addresses in cc)
                correo.CC.Add(addresses);
            foreach (var addresses in bcc)
                correo.Bcc.Add(addresses);
            foreach (var attachment in archivoAdjunto.Select(fileName => new Attachment(fileName, "application/octet-stream"))) {
                correo.Attachments.Add(attachment);
            }
            return SendMail(correo);
        }
    }
}