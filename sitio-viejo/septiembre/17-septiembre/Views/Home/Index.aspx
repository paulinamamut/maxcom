<%@ Page Language="C#" Inherits="System.Web.Mvc.ViewPage<dynamic>" %>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Maxcom Telecomunicaciones</title>
<meta name="description" content="Maxcom te ofrece las soluciones en comunicaci&oacute;n que se adaptan a tus necesidades.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="820139378027845" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="http://www.maxcom.com/" /> 
<meta property="og:title" content="" />
<meta property="og:site_name" content="Maxcom Telecomunicaciones" /> 
<meta property="og:image" content="http://www.maxcom.com/img/social.png" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon.ico">
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="/js/slider_2.js"></script>
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->

</head>

<body>
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
    <!--[if lt IE 9]><div id="wrapper" class="fix"><![endif]--><!--[if gte IE 9]><!--><div id="wrapper"><!--<![endif]-->
        <!--[if lt IE 9]><div id="header"><![endif]--><!--[if gte IE 9]><!--><header><!--<![endif]-->
            <img src="/img/logo.png" alt="Maxcom Telecomunicaciones">
            <a id="clientes" href="/acceso-clientes/">&iquest;Ya eres cliente&#63; <span>Accede aqu&iacute;</span></a>
            <a id="chat" onclick="window.open('http://maxchat.maxcom.com/', 'maxcom_chat', 'width=20, height=20, menubar=no');">&iquest;Tienes dudas&#63; <span>Chatea con nosotros</span></a>
            <a id="menu_toggle">Men&uacute;</a>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        <div id="slider">
        
            <div id="tray">
                <!--[if lt IE 9]><div class="slide"><![endif]--><!--[if gte IE 9]><!--><section class="slide"><!--<![endif]-->
                    <div class="card">
                        <div class="bg home_maxconexion"> 
                            <a class="btn-sombra maxconexion_home" href="/en-tu-hogar/">Conoce m&aacute;s</a>
                        </div>
                    
                    </div>
                <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
                <!--[if lt IE 9]><div class="slide"><![endif]--><!--[if gte IE 9]><!--><section class="slide"><!--<![endif]-->
                    <div class="card">
                        <div class="bg">
                            <img src="/img/empresa.png" alt="Maxcom for Business" class="lob"><!--
                            --><p>Tu empresa necesita soluciones de comunicaci&oacute;n que optimicen sus procesos y mejoren la productividad al menor costo posible y con un servicio impecable. Ah&iacute; es donde entra maxcom.</p>
                            <a class="btn-sombra" href="/en-tu-empresa/">Conoce m&aacute;s</a>
                        </div>
                        <img src="/img/contenido/home-empresa.png" class="hero" alt="En tu hogar">
                    </div>
                <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
                <!--[if lt IE 9]><div class="slide"><![endif]--><!--[if gte IE 9]><!--><section class="slide"><!--<![endif]-->
                    <div class="card">
                        <div class="bg">
                            <h2>Te conectamos con tu mundo</h2>
                            <div class="two_col">
                                <h3>Contrata Internet y te inclu&iacute;mos la telefon&iacute;a fija.</h3>
                                <ul>
                                    <li>3, 6 u 8 Mb de Internet de Banda Ancha**.</li>
                                    <li>Llamadas locales, larga distancia nacional e internacional (EUA y Canad&aacute;) ilimitados.</li>
                                    <li>50 o 100 minutos a celular 044/045 incluidos***.</li>
                                    <li>Paquete de 8 servicios digitales.</li>
                                </ul>
                                <ul class="legales">
                                    <li>*Precio con impuestos incluidos.</li>
                                    <li>**Velocidad de Internet sujeta a cobertura.</li>
                                    <li>***Los minutos incluidos a celular dependen del Plan.</li>
                                </ul>
                            </div><!--
                            --><div class="two_col">
                                <p class="price">Desde <strong>$299<sup>*</sup></strong> Al mes.</p>
                                <a class="btn-sombra" href="/en-tu-hogar/#oferta">Conoce m&aacute;s</a>
                            </div>
                        </div>
                    </div>
                <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
            </div>
        </div>
        <button id="prev" class="slide_control"></button>
        <button id="next" class="slide_control"></button>
    </div>
    <!--[if lt IE 9]><div id="footer"><![endif]--><!--[if gte IE 9]><!--><footer><!--<![endif]-->
        <nav id="slide_control" role="navigation">
            <!--[if lt IE 8]><ul id="slider_control" class="nav"><![endif]--><!--[if gte IE 8]><!--><ul><!--<![endif]-->
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </nav>
        <nav role="navigation" id="main_nav">
            <ul id="nav">
                <li id="main_items">
                    <nav>
                        <ul>
                            <li class="nombre-prod"><a href="/en-tu-hogar"><em>Maxcom</em> Hogar</a></li><!--
                            --><li><a href="/en-tu-empresa">maxcom for Business</a></li>
                        </ul>
                    </nav>
                </li>
                <li><a href="/atencion-a-clientes">Atenci&oacute;n a clientes</a></li>
                <li><a href="/sobre-maxcom">Sobre maxcom</a></li>
                <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>       
            </ul>
        </nav>
        <a id="porta" class="btn-sombra" href="/atencion-a-clientes/portabilidad/">Portabilidad</a>
        <nav id="social" role="navigation">
            <!--[if lt IE 8]><ul id="social" class="nav"><![endif]--><!--[if gte IE 8]><!--><ul><!--<![endif]-->
                <li><a id="tw" href="https://twitter.com/Maxcom_Mexico" target="_blank">S&iacute;guenos en Twitter</a></li>
                <li><a id="fb" href="https://www.facebook.com/MaxcomMexico" target="_blank">S&iacute;guenos en Facebook</a></li>
                <li><a id="yt" href="https://www.youtube.com/user/MaxcomContigo" target="_blank">S&iacute;guenos en Youtube</a></li>
            </ul>
        </nav><!--
        --><nav id="legal" role="navigation">
            <!--[if lt IE 8]><ul id="legal" class="nav"><![endif]--><!--[if gte IE 8]><!--><ul><!--<![endif]-->
                <li><a href="/aviso-de-privacidad">Aviso de privacidad</a></li>
                <li><a href="/terminos-y-condiciones">T&eacute;rminos y condiciones</a></li>
                <li><a href="/Sitemap/">Mapa de sitio</a></li>
                <li><a href="https://career8.successfactors.com/career?company=C0004311618P" target="_blank">Trabaja con nosotros</a></li>
            </ul>
        </nav><!--
        --><p>&copy; 2014 Maxcom Telecomunicaciones</p>
    <!--[if gte IE 9]><!--></footer><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
</body>
</html> 