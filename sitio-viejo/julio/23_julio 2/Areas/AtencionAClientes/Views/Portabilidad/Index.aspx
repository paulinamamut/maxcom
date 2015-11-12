<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom | Portabilidad</title>
<meta name="description" content="Maxcom te ofrece todas las posibilidades para conectarte con tu mundo.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/atencion-a-clientes/portabilidad/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../../../../css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="../../../../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?ver=3&key=AIzaSyAngSrvkCyAhU3H7UrAv4y9Jy7LF3Nwfc0"></script>
<script type="text/javascript" src="../../../../js/mapa.js"></script>
<script type="text/javascript" src="../../../../js/slider.js"></script>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
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
                            <li><a href="/atencion-a-clientes/envianos-un-mensaje">Env&iacute;anos un mensaje</a></li>
                            <li><a href="/atencion-a-clientes/tutoriales-y-guias">Tutoriales y gu&iacute;as</a></li>
                            <li><a href="/atencion-a-clientes/localizador">maxcom cerca de ti</a></li>
                            <li><span class="current">Portabilidad</span></li>
                        </ul>
                    </li>
                    <li><a href="/sobre-maxcom/">Sobre maxcom</a></li>
                    <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>      
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
        <!--[if lt IE 9]><div class="section"><![endif]--><!--[if gte IE 9]><!--><section><!--<![endif]-->
        <div class="pad">
            <h1 class="icon portabilidad">Portabilidad</h1>
            <p>Para aclararte cualquier duda y brindarte el servicio de excelencia que mereces, podr&aacute;s encontrar nuestras Casas maxcom u oficinas corporativas de manera r&aacute;pida y sencilla.</p>
        </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
            <div class="pad map">
                <h2>C&aacute;mbiate a maxcom</h2>
                <p>Ahora cambiarte a maxcom es m&aacute;s f&aacute;cil que nunca. Consulta nuestra cobertura y descarga el formato de portabilidad para
 empezar el proceso para traer tu l&iacute;nea con nosotros.</p>
                <div id="search-box">
                    <form>
                        <label>Direcci&oacute;n: <input type="text" name="direccion"></label>
                        <label>
                        Regi&oacute;n:
                        <select name="city">
                            <option value="0" selected>Selecciona tu Regi&oacute;n</option>
                            <option value="df">Distrito Federal</option>
                            <option value="edomex">Estado de M&eacute;xico</option>
                            <option value="puebla">Puebla - Tehuac&aacute;n</option>
                            <option value="queretaro">Quer&eacute;taro</option>
                            <option value="sanluis">San Luis Potos&iacute;</option>
                        </select>
                        </label>
                        <input type="hidden" name="kml-layer" class="layer-opt" value="cobertura">
                        <button type="submit" class="btn-sombra">Buscar</button>
                    </form>
                </div>
            </div>
            <div id="mapa"></div>
            <div class="pad map">
                <h3>Requisitos para solicitar tr&aacute;mite de portabilidad</h3>
                <div class="half">
                    <a class="product clientes half" href="/pdf/requisitos-portabilidad-residencial.pdf" target="pdf"><h4>Requisitos de portabilidad para clientes residenciales</h4><strong class="cta">Descargar</strong></a><!--
                    --><a class="product clientes half" href="/pdf/requisitos-portabilidad-empresarial.pdf" target="pdf"><h4>Requisitos de portabilidad para clientes empresariales</h4><strong class="cta">Descargar</strong></a>
                </div><!--
                --><div class="half">
                    <a class="product clientes half" href="#"><h4>Formato de portabilidad</h4><strong class="cta">Descargar</strong></a><!--
                    --><a class="product clientes half" href="https://www.npcpub.neoris.com.mx/PublicWebsite/" target="_blank"><h4>Status de tu tr&aacute;mite de portabilidad</h4><strong class="cta">Consultar</strong></a>
                </div>
                
                <div class="half">
                    <div class="product clientes half fixed-height"><h4>Comprobante de Numeraci&oacute;n</h4><p>Contacta a tu ejecutivo personalizado o ll&aacute;manos al <strong class="tel">01 800 6292662</strong>.</p></div><!--
                    --><div class="product clientes half fixed-height"><h4>Informaci&oacute;n Contractual</h4><p>Ll&aacute;manos al <strong class="tel">01 800 6292662</strong> o solic&iacute;tala <a href="/atencion-a-clientes/envianos-un-mensaje">aqu&iacute;</a>.</p></div>
                </div><!--
                --><div class="half">
                    <div class="product clientes half fixed-height"><h4>M&aacute;s informaci&oacute;n</h4><p>Ll&aacute;manos al <strong class="tel">01 800 6292662</strong> o solic&iacute;tala <a href="/atencion-a-clientes/envianos-un-mensaje">aqu&iacute;</a>.</p></div><!--
                    --><div class="product clientes half fixed-height"><h4>Para tu comodidad</h4><p>Puedes entregar personalmente los 2 documentos en nuestras <a href="/atencion-a-clientes/localizador/">sucursales maxcom</a>.</p></div>
                </div>
                <h3>Mapas de portabilidad</h3>
                <div class="half">
                    <a class="btn download" href="/pdf/zona-metropolitana.pdf" target="pdf">Distrito Federal y &Aacute;rea Metropolitana</a>
                    <a class="btn download" href="/pdf/puebla.pdf" target="pdf">Puebla</a>
                    <a class="btn download" href="/pdf/texmelucan.pdf" target="pdf">Texmelucan</a>
                    <a class="btn download" href="/pdf/huejotzingo.pdf" target="pdf">Huejotzingo</a>
                </div><!--
                --><div class="half">
                    <a class="btn download" href="/pdf/san-luis-potosi.pdf" target="pdf">San Luis Potos&iacute;</a>
                    <a class="btn download" href="/pdf/tehuacan.pdf" target="pdf">Tehuac&aacute;n</a>
                    <a class="btn download" href="/pdf/queretaro.pdf" target="pdf">Quer&eacute;taro</a>
                </div>
                
            </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
    </div>
        <!--[if lt IE 9]><div id="footer"><ul id="social" class="nav"><![endif]--><!--[if gte IE 9]><!--><footer><nav id="social" role="navigation"><ul><!--<![endif]-->
                <li><a id="tw" href="https://twitter.com/Maxcom_Telecom" target="_blank">S&iacute;guenos en Twitter</a></li>
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
