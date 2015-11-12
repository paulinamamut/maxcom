using System.Web.Mvc;
using Maxcom.Helpers;

namespace Maxcom.Areas.AtencionAClientes
{
    public class AtencionAClientesAreaRegistration : AreaRegistration
    {
        public override string AreaName
        {
            get
            {
                return "AtencionAClientes";
            }
        }

        public override void RegisterArea(AreaRegistrationContext context)
        {
            var route = context.MapRoute(
                "AtencionAClientes_default",
                "AtencionAClientes/{controller}/{action}/{id}",
                new { action = "Index", id = UrlParameter.Optional }
            );
            route.RouteHandler = new HyphenatedRouteHandler();

            var route1 = context.MapRoute(
                "Atencion-A-Clientes_default",
                "Atencion-A-Clientes/{controller}/{action}/{id}",
                new { action = "Index", id = UrlParameter.Optional }
            );
            route1.RouteHandler = new HyphenatedRouteHandler();
        }
    }
}
