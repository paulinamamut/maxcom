<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>
<%@ Register TagPrefix="recaptcha" Namespace="Recaptcha" Assembly="Recaptcha" %>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom | Atenci&oacute;n a Clientes</title>
<meta name="description" content="Maxcom te ofrece todas las posibilidades para conectarte con tu mundo.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/en-tu-empresa/contacto-comercial/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/slider.js"></script>
<script type="text/javascript" src="/js/forms.js"></script>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
<script type="text/javascript">
    function call() {
        document.getElementById('fields').style.display = 'inline';
    }
</script>
</head>

<body id="inner"  <%=ViewData["Call"]%>>
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
    <div id="wrapper">
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <a href="//"><img src="/img/logo.png" alt="Maxcom Telecomunicaciones"></a>
            <a id="clientes" href="/acceso-clientes/">&iquest;Ya eres cliente&#63; <span>Accede aqu&iacute;</span></a>
            <a id="chat" onclick="window.open('http://maxchat.maxcom.com/', '_blank', 'width=20, height=20, menubar=no');">&iquest;Tienes dudas&#63; <span>Chatea con nosotros</span></a>
            <a id="menu_toggle">Men&uacute;</a>
            <nav role="navigation" id="main_nav">
            <ul id="nav">
                    <li class="nombre-prod"><a href="/en-tu-hogar/">maxcom Hogar</a></li>
                    <li><a href="/en-tu-empresa/" class="current">maxcom for Business</a>
                        <ul id="submenu">
                            <li><a href="/en-tu-empresa/soluciones-de-conectividad/">Hug Conectivity</a></li>
                            <li><a href="/en-tu-empresa/soluciones-de-comunicacion/">Enjoy Collaboration</a></li>
                            <li><a href="/en-tu-empresa/soluciones-compartidas/">Smile Managed Services</a></li>
                            <li><span class="current">Contacto Comercial</span></li>
                        </ul>
                    </li>
                    <li><a href="/atencion-a-clientes">Atenci&oacute;n a clientes</a></li>
                    <li><a href="/sobre-maxcom">Sobre maxcom</a></li>
                    <li><a href="/inversionistas">Inversionistas</a></li>         
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
        <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
        <div class="pad">
            <h1 class="icon">Contacto Comercial</h1>
            <p>En maxcom te ofrecemos un servicio de preferencia, si tienes dudas o cualquier inquietud puedes contactarnos utilizando el siguiente formato. Si a&uacute;n no eres cliente y quieres mayor informaci&oacute;n sobre cobertura en tu zona <a href="/atencion-a-clientes/localizador/">haz clic aqu&iacute;</a>. Uno de nuestros ejecutivos se pondr&aacute; en contacto contigo para responderte a la brevedad.</p>
                <form action="#" method="post">
                    <p><%=ViewData["Success"]%></p>
                    <p class="error"><%=ViewData["Exception"]%></p>
                    <label class="obligatorio">Nombre:<input type="text" name="nombre" value="<%=ViewData["Nombre"]%>"/></label>
                    <label class="obligatorio">Puesto:<input type="text" name="puesto" value="<%=ViewData["Puesto"]%>"/></label>
                    <label class="obligatorio">Empresa:<input type="text" name="empresa" value="<%=ViewData["Empresa"]%>"/></label>
                    <label class="obligatorio">Correo electr&oacute;nico:<input type="text" name="email" value="<%=ViewData["Email"]%>"/></label>
                    <label class="obligatorio">N&uacute;mero de empleados:
                        <select name="empleados">
                            <option>Selecciona el n&uacute;mero de empleados</option>
                            <option value="0 a 15 empleados" <%=ViewData["0 a 15 empleados"]%>>0 a 15 empleados</option>
                            <option value="16 a 250 empleados" <%=ViewData["16 a 250 empleados"]%>>16 a 250 empleados</option>
                            <option value="251 a 1000 empleados" <%=ViewData["251 a 1000 empleados"]%>>251 a 1000 empleados</option>
                            <option value="M&aacute;s de 1000 empleados" <%=ViewData["M&aacute;s de 1000 empleados"]%>>M&aacute;s de 1000 empleados</option>
                        </select>
                    </label>
                    <label class="obligatorio">N&uacute;mero telef&oacute;nico de contacto:<input type="text" name="telefono" value="<%=ViewData["Telefono"]%>"/></label>
                    <label class="obligatorio">Direcci&oacute;n en donde se solicita el servicio:<input type="text" name="direccion" value="<%=ViewData["Direccion"]%>"/></label>
                    <label class="obligatorio">Asunto:
                        <select name="asunto">
                            <option>Selecciona una opci&oacute;n</option>
                            <option value="Deseo solicitar un Asesor" <%=ViewData["Deseo solicitar un Asesor"]%>>Deseo solicitar un Asesor</option>
                            <option value="Deseo solicitar una Video Conferencia" <%=ViewData["Deseo solicitar una Video Conferencia"]%>>Deseo solicitar una Video Conferencia</option>
                            <option value="Otro" class="conditional" <%=ViewData["Otro"]%>>Otro</option>
                        </select>
                        <fieldset class="conditional" id="fields">
                            <input type="text" name="cual" value="<%=ViewData["Cual"]%>"/>
                        </fieldset>
                    </label>
                    <label class="obligatorio">
                        Mensaje:<textarea name="mensaje"><%=ViewData["Mensaje"]%></textarea>
                    </label>
                    <label class="obligatorio">Validaci&oacute;n:
                    <recaptcha:RecaptchaControl ID="recaptcha" name="recaptcha" Theme="clean" runat="server" PublicKey="6LfumgcTAAAAANZQMYAxNzpRWoVycWtCqi4xeM48" PrivateKey="6LfumgcTAAAAAG4_s8P4MPcePXs8Oaoi_QItaIT6"/>
                    </label>
                    <button type="submit" name="operation" value="send" class="btn-sombra">Enviar</button>
                </form>  
            </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
<!-- **************************************************************************************************************************************** -->       
        
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
        --><p>&copy; 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 
