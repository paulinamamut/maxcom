using System.Web.Mvc;
using Maxcom.Helpers;

namespace Maxcom.Areas.AccesoClientes
{
    public class AccesoClientesAreaRegistration : AreaRegistration
    {
        public override string AreaName
        {
            get
            {
                return "AccesoClientes";
            }
        }

        public override void RegisterArea(AreaRegistrationContext context)
        {
            var route = context.MapRoute(
                "AccesoClientes_default",
                "AccesoClientes/{controller}/{action}/{id}",
                new { action = "Index", id = UrlParameter.Optional }
             );
            route.RouteHandler = new HyphenatedRouteHandler();

            var route1 = context.MapRoute(
                "Acceso-Clientes_default",
                "Acceso-Clientes/{controller}/{action}/{id}",
                new { action = "Index", id = UrlParameter.Optional }
            );
            route1.RouteHandler = new HyphenatedRouteHandler();
        }
    }
}
