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
<meta property="og:url" content="http://www.maxcom.com/atencion-a-clientes/ya-soy-cliente" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/slider.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es-419'></script>
<!--script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->

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
    <div id="wrapper">
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <a href="/"><img src="/img/logo.png" alt="Maxcom Telecomunicaciones"></a>
            <a id="clientes" href="/acceso-clientes/">&iquest;Ya eres cliente&#63; <span>Accede aqu&iacute;</span></a>
            <a id="chat" onclick="window.open('http://maxchat.maxcom.com/', '_blank', 'width=20, height=20, menubar=no');">&iquest;Tienes dudas&#63; <span>Chatea con nosotros</span></a>
            <a id="menu_toggle">Men&uacute;</a>
            <nav role="navigation" id="main_nav">
            <ul id="nav">
                    <li class="nombre-prod"><a href="/en-tu-hogar/">maxcom Hogar</a></li>
                    <li><a href="/en-tu-empresa">maxcom for Business</a></li>
                    <li><a href="/atencion-a-clientes/" class="current">Atenci&oacute;n a clientes</a>
                        <ul id="submenu">
                            <li><a href="/atencion-a-clientes/envianos-un-mensaje/"><span class="current">Env&iacute;anos un mensaje</span></a></li>
                            <li><a href="/atencion-a-clientes/tutoriales-y-guias">Tutoriales y gu&iacute;as</a></li>
                            <li><a href="/atencion-a-clientes/localizador">maxcom cerca de ti</a></li>
                            <li><a href="/atencion-a-clientes/portabilidad">Portabilidad</a></li>
                        </ul>
                    </li>
                    <li><a href="/sobre-maxcom/">Sobre maxcom</a></li>
                    <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>        
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
        <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
        <div class="pad">
            <h1 class="icon mensaje">Env&iacute;anos un mensaje</h1>
            <p>En maxcom te ofrecemos un servicio de preferencia, si tienes dudas o cualquier inquietud puedes contactarnos utilizando el siguiente formato. Si a&uacute;n no eres cliente y quieres mayor informaci&oacute;n sobre cobertura en tu zona <a href="/atencion-a-clientes/localizador/">haz clic aqu&iacute;</a>. Uno de nuestros ejecutivos se pondr&aacute; en contacto contigo para responderte a la brevedad.</p>
                <form action="#" method="post">
                    <p><%=ViewData["YaSoySuccess"]%></p>
                    <p class="error"><%=ViewData["YaSoyException"]%></p>
                    <label class="obligatorio">Nombre:<input type="text" name="nombre" value="<%=ViewData["YaSoyNombre"]%>"/></label>
                    <label class="obligatorio">N&uacute;mero de cuenta maxcom:<input type="text" name="contrato" value="<%=ViewData["YaSoyContrato"]%>"/></label>
                    <label class="obligatorio">Correo electr&oacute;nico:<input type="text" name="email" value="<%=ViewData["YaSoyEmail"]%>"/></label>
                    <label class="obligatorio">N&uacute;mero telef&oacute;nico de contacto:<input type="text" name="telefono" value="<%=ViewData["YaSoyTelefono"]%>"/></label>
                    <label class="obligatorio">Asunto:
                        <select name="asunto"> 
                                <option>Selecciona una opci&oacute;n</option>
								<option value="Aclaraci&oacute;n de Saldo" <%=ViewData["Aclaraci&oacute;n de Saldo"]%> >Aclaraci&oacute;n de Saldo</option>
                                <option value="Acuerdo de Pago" <%=ViewData["Acuerdo de Pago"]%> >Acuerdo de Pago</option>
                                <option value="Informaci&oacute;n de productos y servicios adicionales" <%=ViewData["Informaci&oacute;n de productos y servicios adicionales"]%> >Informaci&oacute;n de productos y servicios adicionales</option>
                                <option value="Falla t&eacute;cnica en el servicio de Telefon&iacute;a, Internet o Televisi&oacute;n" <%=ViewData["Falla t&eacute;cnica en el servicio de Telefon&iacute;a, Internet o Televisi&oacute;n"]%> >Falla t&eacute;cnica en el servicio de Telefon&iacute;a, Internet o Televisi&oacute;n</option>
                                <option value="No llega factura" <%=ViewData["No llega factura"]%> >No llega factura</option>
                                <option value="Reactivaci&oacute;n de servicio" <%=ViewData["Reactivaci&oacute;n de servicio"]%> >Reactivaci&oacute;n de servicio</option>
                                <option value="Telefon&iacute;a P&uacute;blica" <%=ViewData["Telefon&iacute;a P&uacute;blica"]%> >Telefon&iacute;a P&uacute;blica</option>
                                <option value="Otros" <%=ViewData["Otros"]%> >Otros</option>
                                <option value="Solicitud Factura Electr&oacute;nica" <%=ViewData["Solicitud Factura Electr&oacute;nica"]%> >Solicitud Factura Electr&oacute;nica</option>
                                <option value="Contrataci&oacute;n" <%=ViewData["Contrataci&oacute;n"]%> >Contrataci&oacute;n</option>
                                <option value="Informaci&oacute;n de Portabilidad" <%=ViewData["Informaci&oacute;n de Portabilidad"]%> >Informaci&oacute;n de Portabilidad</option>
                                <option value="Solicitud de Cancelaci&oacute;n" <%=ViewData["Solicitud de Cancelaci&oacute;n"]%> >Solicitud de Cancelaci&oacute;n</option>
                                <option value="Modificaci&oacute;n de Paquetes" <%=ViewData["Modificaci&oacute;n de Paquetes"]%> >Modificaci&oacute;n de Paquetes</option>
                                <option value="Informaci&oacute;n Contractual" <%=ViewData["Informaci&oacute;n Contractual"]%> >Informaci&oacute;n Contractual</option>
				        </select>
                    </label>
                    <label class="obligatorio">
                        Mensaje:<textarea name="mensaje"> <%=ViewData["YaSoyMensaje"]%></textarea>
                    </label>
                    <label class="obligatorio">Validaci&oacute;n:
                    <div class="g-recaptcha" data-sitekey="6LfumgcTAAAAANZQMYAxNzpRWoVycWtCqi4xeM48"></div>
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
                <li><a href="https://career8.successfactors.com/career?company=C0004311618P" target="_blank">Trabaja con nosotros</a></li>
                <li><a href="/atencion-a-clientes/portabilidad/">Portabilidad</a></li>
            </ul>
        <!--[if gte IE 9]><!--></nav><!--<![endif]--><!--
        --><p>&copy; 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 