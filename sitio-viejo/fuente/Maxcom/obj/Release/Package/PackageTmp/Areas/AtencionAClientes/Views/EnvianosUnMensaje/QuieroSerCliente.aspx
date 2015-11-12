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
<meta property="og:url" content="http://www.maxcom.com/atencion-a-clientes/quiero-ser-cliente" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/slider.js"></script>
<script type="text/javascript" src="/js/forms.js"></script>
<script type="text/javascript">
    function call() {
        document.getElementById('fields').style.display = 'inline';
    }
</script>
<script src='https://www.google.com/recaptcha/api.js?hl=es-419'></script>
<!--script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
</head>

<body id="inner" <%=ViewData["QuieroCall"]%>>
    <!-- Google Tag Manager -->
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-M8JGWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>        (function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({ 'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'http://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-M8JGWW');</script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
    </script>
    <div id="wrapper">
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <a href="/"><img src="/img/logo.png" alt="Maxcom Telecomunicaciones"></a>
            <a id="login_a" href="/acceso-clientes/">Acceso a clientes</a>
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
                    <p><%=ViewData["QuieroSuccess"]%></p>
                    <p class="error"><%=ViewData["QuieroException"]%></p>
                    <label class="obligatorio">Nombre:<input type="text" name="nombre" value="<%=ViewData["QuieroNombre"]%>"/></label>
                    <label class="obligatorio short">Correo electr&oacute;nico:<input type="text" name="email" value="<%=ViewData["QuieroEmail"]%>"/></label>
                    <label class="obligatorio short">N&uacute;mero telef&oacute;nico de contacto:<input type="text" name="telefono" value="<%=ViewData["QuieroTelefono"]%>"/></label>
                    <fieldset class="conditional" id="fields">
                        <label class="obligatorio">Calle:<input type="text" name="calle" value="<%=ViewData["QuieroCalle"]%>"/></label>
                        <label class="obligatorio short">N&uacute;mero exterior:<input type="text" name="exterior" value="<%=ViewData["QuieroExterior"]%>"/></label>
                        <label class="short">N&uacute;mero interior:<input type="text" name="interior" value="<%=ViewData["QuieroInterior"]%>"/></label>
                        <label>Entre calles:<input type="text" name="entrecalles" value="<%=ViewData["QuieroEntrecalles"]%>"/></label>
                        <label class="obligatorio short">Colonia:<input type="text" name="colonia" value="<%=ViewData["QuieroColonia"]%>"/></label>
                        <label class="obligatorio short">Municipio/ Delegaci&oacute;n:<input type="text" name="municipio" value="<%=ViewData["QuieroMunicipio"]%>"/></label>
                        <label class="obligatorio">Entidad:
                            <select name="entidad">
                                    <option>Selecciona tu Entidad</option>
                                    <option <%=ViewData["Aguascalientes"]%> value="Aguascalientes">Aguascalientes</option>
                                    <option <%=ViewData["Baja California"]%> value="Baja California">Baja California</option>
                                    <option <%=ViewData["Baja California Sur"]%> value="Baja California Sur">Baja California Sur</option>
                                    <option <%=ViewData["Campeche"]%> value="Campeche">Campeche</option>
                                    <option <%=ViewData["Chihuahua"]%> value="Chihuahua">Chihuahua</option>
                                    <option <%=ViewData["Chiapas"]%> value="Chiapas">Chiapas</option>
                                    <option <%=ViewData["Coahuila"]%> value="Coahuila">Coahuila</option>
                                    <option <%=ViewData["Colima"]%> value="Colima">Colima</option>
                                    <option <%=ViewData["Distrito Federal"]%> value="Distrito Federal">Distrito Federal</option>
                                    <option <%=ViewData["Durango"]%> value="Durango">Durango</option>
                                    <option <%=ViewData["Estado de M&eacute;xico"]%> value="Estado de M&eacute;xico">Estado de M&eacute;xico</option>
                                    <option <%=ViewData["Guanajuato"]%> value="Guanajuato">Guanajuato</option>
                                    <option <%=ViewData["Guerrero"]%> value="Guerrero">Guerrero</option>
                                    <option <%=ViewData["Hidalgo"]%> value="Hidalgo">Hidalgo</option>
                                    <option <%=ViewData["Jalisco"]%> value="Jalisco">Jalisco</option>
                                    <option <%=ViewData["Michoac&aacute;n"]%> value="Michoac&aacute;n">Michoac&aacute;n</option>
                                    <option <%=ViewData["Morelos"]%> value="Morelos">Morelos</option>
                                    <option <%=ViewData["Nayarit"]%> value="Nayarit">Nayarit</option>
                                    <option <%=ViewData["Nuevo Le&oacute;n"]%> value="Nuevo Le&oacute;n">Nuevo Le&oacute;n</option>
                                    <option <%=ViewData["Oaxaca"]%> value="Oaxaca">Oaxaca</option>
                                    <option <%=ViewData["Puebla"]%> value="Puebla">Puebla</option>
                                    <option <%=ViewData["Quer&eacute;taro"]%> value="Quer&eacute;taro">Quer&eacute;taro</option>
                                    <option <%=ViewData["Quintana Roo"]%> value="Quintana Roo">Quintana Roo</option>
                                    <option <%=ViewData["San Luis Potos&iacute;"]%> value="San Luis Potos&iacute;">San Luis Potos&iacute;</option>
                                    <option <%=ViewData["Sinaloa"]%> value="Sinaloa">Sinaloa</option>
                                    <option <%=ViewData["Sonora"]%> value="Sonora">Sonora</option>
                                    <option <%=ViewData["Tabasco"]%> value="Tabasco">Tabasco</option>
                                    <option <%=ViewData["Tamaulipas"]%> value="Tamaulipas">Tamaulipas</option>
                                    <option <%=ViewData["Tlaxcala"]%> value="Tlaxcala">Tlaxcala</option>
                                    <option <%=ViewData["Veracruz"]%> value="Veracruz">Veracruz</option>
                                    <option <%=ViewData["Yucat&aacute;n"]%> value="Yucat&aacute;n">Yucat&aacute;n</option>
                                    <option <%=ViewData["Zacatecas"]%> value="Zacatecas">Zacatecas</option>
                            </select>
                        </label>
                    </fieldset>
                    <label class="obligatorio">Asunto:
                        <select name="asunto" id="asunto">
                                <option>Selecciona una opci&oacute;n</option>
								<option <%=ViewData["Contrataci&oacute;n de servicios"]%> value="Contrataci&oacute;n de servicios" class="conditional">Contrataci&oacute;n de servicios</option>
                                <option <%=ViewData["Informaci&oacute;n de servicios"]%> value="Informaci&oacute;n de servicios">Informaci&oacute;n de servicios</option>
                                <option <%=ViewData["Otro"]%> value="Otro">Otro</option>
				        </select>
                    </label>
                    <label class="obligatorio">
                        Mensaje:<textarea name="mensaje"><%=ViewData["QuieroMensaje"]%></textarea>
                    </label>
                    <label class="obligatorio">Validaci&oacute;n:
                    <div class="g-recaptcha" data-sitekey="6LfumgcTAAAAANZQMYAxNzpRWoVycWtCqi4xeM48"></div>
                    </label>
                    <%=ViewData["Paquete"]%> 
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
        --><p>© 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 
