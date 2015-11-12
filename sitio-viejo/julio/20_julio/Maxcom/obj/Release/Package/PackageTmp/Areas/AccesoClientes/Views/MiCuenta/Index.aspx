<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom | Atenci&oacute;n a Clientes</title>
<meta name="description" content="Maxcom te ofrece todas las posibilidades para conectarte con tu mundo.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/acceso-clientes/mi-cuenta/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/slider.js"></script>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
<script type="text/javascript">
//<![CDATA[
    //-----------------Validador ingreso---------------------
    $(function () {
        $('#login').on({ click: ingresar })
    })

    function ingresar(e) {
        e.preventDefault();
        if (document.ingreso.cuenta.value == "" || document.ingreso.pw.value == "") {
            alert("Para poder ingresar al sistema es necesario que proporcione los campos de Cuenta y Contrase&ntilde;a.");
        }
        else {
            cuenta = encode_base64(document.ingreso.cuenta.value);
            pw = encode_base64(document.ingreso.pw.value);
            var url = document.domain;
            if (url == "www.maxcom.com.mx" || url == "www.maxcom.com" || url == "200.66.100.209") {
                window.location = "http://www.admon.maxcom.com/Portal/MaxcomBillingBridge.aspx?cta=" + cuenta + "&pass=" + pw;
            }
            else {
                window.location = '';
            }
        }
    }
    function encode_base64(what) {
        var base64_encodetable = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        var result = "";
        var len = what.length;
        var x, y;
        var ptr = 0;
        while (len-- > 0) {
            x = what.charCodeAt(ptr++);
            result += base64_encodetable.charAt((x >> 2) & 63);
            if (len-- <= 0) {
                result += base64_encodetable.charAt((x << 4) & 63);
                result += "==";
                break;
            }
            y = what.charCodeAt(ptr++);
            result += base64_encodetable.charAt(((x << 4) | ((y >> 4) & 15)) & 63);
            if (len-- <= 0) {
                result += base64_encodetable.charAt((y << 2) & 63);
                result += "=";
                break;
            }
            x = what.charCodeAt(ptr++);
            result += base64_encodetable.charAt(((y << 2) | ((x >> 6) & 3)) & 63);
            result += base64_encodetable.charAt(x & 63);
        }
        return result;
    }
    //]] >
</script>
</head>

<body id="inner">
    <!-- Google Tag Manager -->
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-M8JGWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script type="text/javascript">        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start':
    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
    'http://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M8JGWW');</script>
    <!-- End Google Tag Manager -->
    <div id="wrapper" class="tc">
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <a href="/"><img src="/img/logo.png" alt="Maxcom Telecomunicaciones"></a>
            <a id="login_a" href="/acceso-clientes/">Acceso a clientes</a>
            <a id="menu_toggle">Men&uacute;</a>
            <nav role="navigation" id="main_nav">
            <ul id="nav">
                    <li class="nombre-prod"><a href="/en-tu-hogar/">maxcom Hogar</a></li>
                    <li><a href="/en-tu-empresa">maxcom for Business</a></li>
                    <li><a href="/atencion-a-clientes/">Atenci&oacute;n a clientes</a></li>
                    <li><a href="/sobre-maxcom/">Sobre maxcom</a></li>
                    <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>        
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
        <div class="pad">
            <h1 class="icon cuenta">Mi cuenta</h1>
                <form method="post" name="ingreso" action="#" class="narrow">
                    <label>Nombre de usuario:<input type="text" id="cuenta" class="form-control" maxlength="15" name="cuenta" /></label>
                    <label>Contrase&ntilde;a:<input id="pw" class="form-control" maxlength="20" type="password" value="" name="pw" /></label>
                    <!-- input onclick="javascript:ingresar();" class="btn-sombra btn btn-primary pull-right" type="button" value="Ingresar" data-loading-text="Ingresando..." /-->
                    <button id="login" class="btn-sombra btn btn-primary pull-right" value="Ingresar" data-loading-text="Ingresando..." >Ingresar</button>
                    <p>¿No recuerdas tu constrase&ntilde;a? <a href="/acceso-clientes/mi-cuenta/recupera-contrasena">Recup&eacute;rala aqu&iacute;</a></p>
                    <p>¿A&uacute;n no eres un usuario registrado? <a href="/acceso-clientes/mi-cuenta/registrate">Reg&iacute;strate aqu&iacute;</a></p>
                </form>
            </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
    </div>
        <!--[if lt IE 9]><div id="footer"><ul id="social" class="nav"><![endif]--><!--[if gte IE 9]><!--><footer><nav id="social" role="navigation"><ul><!--<![endif]-->
                <li><a id="tw" href="https://twitter.com/Maxcom_Mexico" target="_blank">S&iacute;guenos en Twitter</a></li>
                <li><a id="fb" href="https://www.facebook.com/MaxcomMexico" target="_blank">S&iacute;guenos en Facebook</a></li>
                <li><a id="yt" href="https://www.youtube.com/user/MaxcomContigo" target="_blank">S&iacute;guenos en Youtube</a></li>
            </ul>
        <!--[if lt IE 9]><ul id="legal" class="nav"><![endif]--><!--[if gte IE 9]><!--></nav><nav id="legal" role="navigation"><ul><!--<![endif]-->
                <li><a href="/aviso-de-privacidad">Aviso de privacidad</a></li>
                <li><a href="/terminos-y-condiciones">T&eacute;rminos y condiciones</a></li>
                <li><a href="/sitemap/">Mapa de sitio</a></li>
                <li><a href="https://career8.successfactors.com/career?company=C0004311618P" target="_blank">Trabaja con nosotros</a></li>
                <li><a href="/atencion-a-clientes/portabilidad/">Portabilidad</a></li>
            </ul>
        <!--[if gte IE 9]><!--></nav><!--<![endif]--><!--
        --><p>© 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 
