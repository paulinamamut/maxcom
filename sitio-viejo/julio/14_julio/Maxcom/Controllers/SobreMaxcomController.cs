using System.Web.Mvc;

namespace Maxcom.Controllers {
    public class SobreMaxcomController : Controller {
        //
        // GET: /SobreMaxcom/

        public ActionResult Index() {
            return View();
        }

        public ActionResult OficinasCorporativas() {
            return View();
        }
    }
}