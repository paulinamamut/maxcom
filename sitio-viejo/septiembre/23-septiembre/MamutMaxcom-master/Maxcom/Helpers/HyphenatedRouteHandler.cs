using System.Web;
using System.Web.Mvc;
using System.Web.Routing;

namespace Maxcom.Helpers {
    public class HyphenatedRouteHandler : MvcRouteHandler {
        protected override IHttpHandler GetHttpHandler(RequestContext requestContext) {
            requestContext.RouteData.Values["controller"] =
                requestContext.RouteData.Values["controller"].ToString().Replace("-", "");
            requestContext.RouteData.Values["action"] = requestContext.RouteData.Values["action"].ToString()
                .Replace("-", "");
            if (requestContext.RouteData.DataTokens.ContainsKey("area"))
                requestContext.RouteData.DataTokens["area"] =
                    requestContext.RouteData.DataTokens["area"].ToString().Replace("-", "");
            else {
                if (requestContext.RouteData.Values["controller"].ToString().ToLowerInvariant() == "atencionaclientes"
                    && requestContext.RouteData.Values["action"].ToString().ToLowerInvariant() == "index") {
                    requestContext.RouteData.DataTokens.Add("area", "AtencionAClientes");
                } else if (requestContext.RouteData.Values["controller"].ToString().ToLowerInvariant() == "accesoclientes"
                    && requestContext.RouteData.Values["action"].ToString().ToLowerInvariant() == "index") {
                    requestContext.RouteData.DataTokens.Add("area", "AccesoClientes");
                }
            }
            return base.GetHttpHandler(requestContext);
        }
    }
}