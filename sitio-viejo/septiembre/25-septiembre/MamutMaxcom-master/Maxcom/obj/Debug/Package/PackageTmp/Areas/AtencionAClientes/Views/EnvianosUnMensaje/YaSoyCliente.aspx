<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom | Atención a Clientes</title>
<meta name="description" content="Maxcom te ofrece todas las posibilidades para conectarte con tu mundo.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/secciones/en-tu-hogar/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/slider.js"></script>
<!--script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->

</head>

<body id="inner">
    <!-- Google Tag Manager -->
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-M8JGWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start':
    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
    '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M8JGWW');</script>
    <!-- End Google Tag Manager -->
    <div id="wrapper">
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <a href="/"><img src="/img/logo.png" alt="Maxcom Telecomunicaciones"></a>
            <a id="login_a" href="/acceso-clientes/">Acceso a clientes</a>
            <a id="menu_toggle">Menú</a>
            <nav role="navigation" id="main_nav">
            <ul id="nav">
                    <li class="nombre-prod"><a href="/en-tu-hogar/"><em>max</em>Conexión</a></li>
                    <li><a href="/en-tu-empresa">maxcom for Business</a></li>
                    <li><a href="/" class="current">Atención a clientes</a>
                        <ul id="submenu">
                             <li><span class="current">Envíanos un mensaje</span></li>
                            <li><a href="/atencion-a-clientes/tutoriales-y-guias">Tutoriales y guías</a></li>
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
            <h1 class="icon mensaje">Envíanos un mensaje</h1>
            <p>En maxcom te ofrecemos un servicio de preferencia, si tienes dudas o cualquier inquietud puedes contactarnos utilizando el siguiente formato. Si aún no eres cliente y quieres mayor información sobre cobertura en tu zona <a href="/localizador/">haz clic aquí</a>. Uno de nuestros ejecutivos se pondrá en contacto contigo para responderte a la brevedad.</p>
                <form action="procesa.asp" method="post">
                    <label class="obligatorio">Nombre:<input type="text" name="nombre"/></label>
                    <label>Número de cuenta maxcom:<input type="text" name="contrato"/></label>
                    <label class="obligatorio">Correo electrónico:<input type="text" name="email"/></label>
                    <label class="obligatorio">Número telefónico de contacto:<input type="text" name="telefono"/></label>
                    <label class="obligatorio">Asunto:
                        <select name="Asunto"> 
                                <option>Selecciona una opción</option>
								<option value="Aclaracion de Saldo">Aclaración de Saldo</option> 
								<option value="Acuerdo de Pago">Acuerdo de Pago</option> 
								<option value="Información de productos y servicios adicionales (Clientes existentes)">Información de productos y servicios adicionales</option> 
								<option value="Falla técnica en el servicio de Telefonía, Internet y/o Televisión">Falla técnica en el servicio de Telefonía, Internet o Televisión</option> 
								<option value="No llega factura">No llega factura</option> 
								<option value="Reactivación de servicio">Reactivación de servicio</option> 
								<option value="Telefonía Pública">Telefonía Pública</option> 
								<option value="Otros">Otros</option> 
								<option value="Solicitud Factura Electrónica">Solicitud Factura Electrónica</option> 
								<option value="Contratación">Contratación</option> 
								<option value="Información de Portabilidad">Información de Portabilidad</option> 
								<option value="Solicitud de Cancelación">Solicitud de Cancelación</option> 
								<option value="Modificación de Paquetes">Modificación de Paquetes</option> 
								<option value="Información Contractual">Información Contractual</option>
				        </select>
                    </label>
                    <label class="obligatorio">
                        Mensaje:<textarea name="mensaje"></textarea>
                    </label>
                    <button type="submit" class="btn-sombra">Enviar</button>
                </form>  
            </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
<!-- **************************************************************************************************************************************** -->       
        
    </div>
        <!--[if lt IE 9]><div id="footer"><ul id="social" class="nav"><![endif]--><!--[if gte IE 9]><!--><footer><nav id="social" role="navigation"><ul><!--<![endif]-->
                <li><a id="tw" href="https://twitter.com/Maxcom_Mexico" target="_blank">Síguenos en Twitter</a></li>
                <li><a id="fb" href="https://www.facebook.com/MaxcomMexico" target="_blank">Síguenos en Facebook</a></li>
                <li><a id="yt" href="https://www.youtube.com/user/MaxcomContigo" target="_blank">Síguenos en Youtube</a></li>
            </ul>
        <!--[if lt IE 9]><ul id="legal" class="nav"><![endif]--><!--[if gte IE 9]><!--></nav><nav id="legal" role="navigation"><ul><!--<![endif]-->
                <li><a href="/aviso-de-privacidad">Aviso de privacidad</a></li>
                <li><a href="/terminos-y-condiciones">Términos y condiciones</a></li>
                <li><a href="https://career8.successfactors.com/career?company=C0004311618P" target="_blank">Trabaja con nosotros</a></li>
                <li><a href="/atencion-a-clientes/portabilidad/">Portabilidad</a></li>
            </ul>
        <!--[if gte IE 9]><!--></nav><!--<![endif]--><!--
        --><p>© 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 