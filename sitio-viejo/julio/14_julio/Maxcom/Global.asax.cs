using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Routing;
using Maxcom.Controllers;
using Maxcom.Helpers;

namespace Maxcom {
    // Note: For instructions on enabling IIS6 or IIS7 classic mode, 
    // visit http://go.microsoft.com/?LinkId=9394801

    public class MvcApplication : System.Web.HttpApplication {
        public static void RegisterGlobalFilters(GlobalFilterCollection filters) {
            filters.Add(new HandleErrorAttribute());
        
    }

        public static void RegisterRoutes(RouteCollection routes) {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");
            routes.IgnoreRoute("PagoSuertudo/{*pathInfo}");

            routes.Add(
            new Route("{controller}/{action}/{id}",
                new RouteValueDictionary(
                    new { controller = "Home", action = "Index", id = "" }),
                    new HyphenatedRouteHandler())
            );
        }

        protected void Application_Start() {
            AreaRegistration.RegisterAllAreas();

            RegisterGlobalFilters(GlobalFilters.Filters);
            RegisterRoutes(RouteTable.Routes);
        }

        /*protected void Application_Error() {
            var exception = Server.GetLastError();

            Response.Clear();

            var httpException = exception as HttpException;

            var routeData = new RouteData();
            routeData.Values.Add("controller", "StaticContent");

            if (httpException == null) routeData.Values.Add("action", "PageNotFound");
            else 
            {
                if (httpException.GetHttpCode() == 404)
                    routeData.Values.Add("action", "PageNotFound");
            }
            routeData.Values.Add("error", exception);

            Server.ClearError();

            Response.TrySkipIisCustomErrors = true;

            IController errorController = new StaticContentController();
            errorController.Execute(new RequestContext(
                 new HttpContextWrapper(Context), routeData));
        }*/
    }
}