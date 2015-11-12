<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom | Localizador</title>
<meta name="description" content="Maxcom te ofrece todas las posibilidades para conectarte con tu mundo.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/sobre-maxcom/oficinas-corporativas/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?ver=3&key=AIzaSyAngSrvkCyAhU3H7UrAv4y9Jy7LF3Nwfc0"></script>
<script type="text/javascript" src="/js/mapa.js"></script>
<script type="text/javascript" src="/js/slider.js"></script>
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
            <a id="clientes" href="/acceso-clientes/">¿Ya eres cliente? <span>Accede aquí</span></a>
            <a id="chat" onclick="window.open('http://maxchat.maxcom.com/', '_blank', 'width=20, height=20, menubar=no');">¿Tienes dudas? <span>Chatea con nosotros</span></a>
            <a id="menu_toggle">Men&uacute;</a>
            <nav role="navigation" id="main_nav">
            <ul id="nav">
                    <li class="nombre-prod"><a href="/en-tu-hogar/">maxcom Hogar</a></li>
                    <li><a href="/en-tu-empresa">maxcom for Business</a></li>
                    <li><a href="/atencion-a-clientes/">Atenci&oacute;n a clientes</a></li>
                    <li><a href="/sobre-maxcom/" class="current">Sobre maxcom</a>
                        <ul id="submenu">
                            <li class="menu-center"><a href="/atencion-a-clientes/localizador">Cobertura y sucursales</a></li>
                            <li class="menu-center"><span class="current">Oficinas Corporativas</span></li>
                        </ul>
                    </li>
                    <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>     
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
        <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
        <div class="pad">
            <h1 class="icon portabilidad">Oficinas Corporativas</h1>
            <p>Para aclararte cualquier duda y brindarte el servicio de excelencia que mereces, podr&aacute;s encontrar nuestras Casas maxcom u oficinas corporativas de manera r&aacute;pida y sencilla.</p>
            <div class="half corp">
                <h3>Regi&oacute;n Centro</h3>
                <h4>Distrito Federal</h4>
                <img src="/img/contenido/oficina-df.jpg" alt="Nuestras oficinas del Distrito Federal">
                <ul>
                    <li>Guillermo Gonz&aacute;lez Camarena 2000</li>
                    <li>Colonia Centro de Ciudad Santa Fe</li>
                    <li>&Aacute;lvaro Obreg&oacute;n, M&eacute;xico, D.F. 01210</li>
                    <li>t. 01 800 6292 662</li>
                </ul>
            </div><!--
            --><div class="half corp">
                <h3>Regi&oacute;n Sur</h3>
                <h4>Puebla</h4>
                <img src="/img/contenido/oficina-puebla.jpg" alt="Nuestras oficinas de Puebla">
                <ul>
                    <li>&Aacute;nimas, Diagonal 19 Poniente 3302-A, Local 70</li>
                    <li>Colonia el Vergel</li>
                    <li>Puebla, Puebla 72400</li>
                    <li>t. 01 800 6292 662</li>
                </ul>
            </div>
            <div class="half corp">
                <h3>Regi&oacute;n Baj&iacute;o</h3>
                <h4>Quer&eacute;taro</h4>
                <img src="/img/contenido/oficina-queretaro.jpg" alt="Nuestras oficinas de Quer&eacute;taro">
                <ul>
                    <li>Av. Ej&eacute;rcito Republicano 163</li>
                    <li>Colonia Carretas</li>
                    <li>Quer&eacute;taro, Quer&eacute;taro 76050</li>
                    <li>t. 01 800 6292 662</li>
                </ul>
            </div><!--
            --><div class="half corp">
                <h3>Regi&oacute;n Sur</h3>
                <h4>San Luis Potos&iacute;</h4>
                <img src="/img/contenido/oficina-slp.jpg" alt="Nuestras oficinas de San Luis Potos&iacute;">
                <ul>
                    <li>Av. Venustiano Carranza 990, Piso 13, Oficinas A-F</li>
                    <li>Colonia Moderna</li>
                    <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78230</li>
                    <li>t. 01 800 6292 662</li>
                </ul>
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
