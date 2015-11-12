using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Maxcom.Areas.AccesoClientes.Controllers
{
    public class MiCuentaController : Controller
    {
        //
        // GET: /AccesoClientes/MiCuenta/

        public ActionResult Index()
        {
            return View();
        }

        public ActionResult RecuperaContrasena()
        {
            return View();
        }

        public ActionResult Registrate()
        {
            return View();
        }
    }
}
