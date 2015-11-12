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
<meta property="og:url" content="http://www.maxcom.com/atencion-a-clientes/localizador/" /> 
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
                            <li><span class="current">maxcom cerca de ti</span></li>
                            <li><a href="/atencion-a-clientes/Portabilidad">Portabilidad</a></li>
                        </ul>
                    </li>
                    <li><a href="/sobre-maxcom/">Sobre maxcom</a></li>
                    <li><a href="http://ri.maxcom.com/">Inversionistas</a></li>     
                </ul>
            </nav>
        <!--[if gte IE 9]><!--></header><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        
        <!--[if lt IE 9]><div class="section"><![endif]--><!--[if gte IE 9]><!--><section><!--<![endif]-->
        <div class="pad">
            <h1 class="icon portabilidad">Maxcom cerca de ti</h1>
            <p>Para aclararte cualquier duda y brindarte el servicio de excelencia que mereces, podr&aacute;s encontrar nuestras Casas maxcom u oficinas corporativas de manera r&aacute;pida y sencilla.</p>
        </div>
        <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
        <!--[if lt IE 9]><div class="section"><![endif]--><!--[if gte IE 9]><!--><section><!--<![endif]-->
            <div class="pad map">
                <h2>C&aacute;mbiate a maxcom</h2>
                <p>Ahora cambiarte a maxcom es m&aacute;s f&aacute;cil que nunca. Consulta nuestra cobertura y descarga el formato de portabilidad para
 empezar el proceso para traer tu l&iacute;nea con nosotros. Ser&aacute; el inicio de una hermosa amistad.</p>
                <div id="search-box">
                    <form>
                        <label>Direcci&oacute;n:<input type="text" name="direccion"></label>
                        <label>Regi&oacute;n:
                            <select name="city">
                                <option value="0" selected>Selecciona tu Regi&oacute;n</option>
                                <option value="df">Distrito Federal</option>
                                <option value="edomex">Estado de M&eacute;xico</option>
                                <option value="puebla">Puebla - Tehuac&aacute;n</option>
                                <option value="queretaro">Quer&eacute;taro</option>
                                <option value="sanluis">San Luis Potos&iacute;</option>
                            </select>
                        </label>
                        <label>Cobertura<input type="checkbox" name="coverage" checked class="layer-opt"></label>
                        <label>Centros de atenci&oacute;n a clientes<input type="checkbox" name="cac" checked class="layer-opt"></label>
                        <label>Casas maxcom<input type="checkbox" name="cm" checked class="layer-opt"></label>
                        <button type="submit" class="btn-sombra">Buscar</button>
                    </form>
                </div>
            </div>
        <div id="mapa"></div>
    <!--[if gte IE 9]><!--></section><!--<![endif]--><!--[if lt IE 9]></div><![endif]-->
    <!--[if lt IE 9]><div class="section last"><![endif]--><!--[if gte IE 9]><!--><section class="last"><!--<![endif]-->
            <div class="pad" id="cacs">
            <h2>Centros de Atenci&oacute;n a Clientes</h2>
            <h3>Regi&oacute;n Centro</h3>
            <h4>Estado de M&eacute;xico</h4>
            <div class="half">
                <div class="half product branch">
                    <h4>Arag&oacute;n</h4>
                    <ul>
                        <li>Av. Tero s/n, Local 86 AM</li>
                        <li>Colonia Rinconada de Arag&oacute;n</li>
                        <li>Ecatepec, Estado de M&eacute;xico 55075</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Las Am&eacute;ricas</h4>
                    <ul>
                        <li>Av. Central s/n, Locales 20 y 21</li>
                        <li>Fraccionamiento Las Am&eacute;ricas</li>
                        <li>Ecatepec, Estado de M&eacute;xico 55070</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half"><!--
                <div class="half product branch">
                    <h4>El Barco</h4>
                    <ul>
                        <li>Valle de Bravo 36</li>
                        <li>Colonia El Barco</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57400</li>
                    </ul>
                </div><!--
                --><div class="half product branch float-left">
                    <h4>Pirules</h4>
                    <ul>
                        <li>Avenida Chimalhuac&aacute;n 201</li>
                        <li>Colonia Agua Azul</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57500</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <h3>Regi&oacute;n Sur</h3>
            <h4>Puebla</h4>
            <div class="half">
                <div class="half product branch">
                    <h4>&Aacute;nimas</h4>
                    <ul>
                        <li>Diagonal 19 Poniente 3302-A, Local 70</li>
                        <li>Colonia El Vergel</li>
                        <li>Puebla, Puebla 72400</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Fuentes</h4>
                    <ul>
                        <li>Calle 39 Oriente 1612, Locales 4 y 5</li>
                        <li>Colonia Residencial</li>
                        <li>Puebla, Puebla 72530</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>Fuertes</h4>
                    <ul>
                        <li>Prol. Diagonal Defensores de la Rep&uacute;blica 64, Local 5</li>
                        <li>Corredor Industrial de la Ci&eacute;naga</li>
                        <li>Puebla, Puebla 72260</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Torrecillas</h4>
                    <ul>
                        <li>Blvd. Municipio Libre o Torrecillas 555</li>
                        <li>Colonia Loma Bella</li>
                        <li>Puebla, Puebla 72490</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <div class="half float-left">
                <div class="half">
                    <h4>San Mart&iacute;n Texmelucan</h4>
                    <div class="product branch">
                        <h4>San Mart&iacute;n</h4>
                        <ul>
                            <li>Blvd. Lic. Bernardo P&eacute;rez Angulo 608, Planta Alta</li>
                            <li>Colonia Centro</li>
                            <li>San Mart&iacute;n Texmelucan 74000</li>
                            <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                            <li class="horario_cac">Lunes a Viernes de 8:30 a 14:00 y de 15:00 a 18:00 hrs.</li>
                            <li class="horario_cac">S&aacute;bado 9:30 a 15:00 hrs.</li>
                        </ul>
                    </div>
                </div>
                <div class="half">
                    <h4>Tehuac&aacute;n</h4>
                    <div class="product branch">
                        <h4>Independencia</h4>
                        <ul>
                            <li>Omni Plaza, Avenida Independencia Oriente 735</li>
                            <li>Colonia Centro</li>
                            <li>Tehuac&aacute;n, Puebla 75700</li>
                            <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3>Regi&oacute;n Baj&iacute;o</h3>
            <div class="half">
                <h4>Quer&eacute;taro</h4>
                <div class="half product branch">
                    <h4>El Sol</h4>
                    <ul>
                        <li>Acceso II 68-A</li>
                        <li>Colonia Zona Industrial Benito Ju&aacute;rez</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76120</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Zaragoza</h4>
                    <ul>
                        <li>Av. Zaragoza Poniente 11, Local 104</li>
                        <li>Colonia Centro</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76000</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a Viernes de 8:30 a 18:00 hrs.</li>
                        <li class="horario_cac">S&aacute;bado 9:30 a 15:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <h4>San Luis Potos&iacute;</h4>
                <div class="half product branch">
                    <h4>Glorieta</h4>
                    <ul>
                        <li>Carretera a Matehuala s/n, Locales 1 y 2</li>
                        <li>Colonia Fidel Vel&aacute;zquez</li>
                        <li>Soledad de Graciano, San Luis Potos&iacute; 78436</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                        <li class="horario_cac">Domingo 10:00 a 15:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Mu&ntilde;oz</h4>
                    <ul>
                        <li>Av. Mu&ntilde;oz 400, Locales 34 y 35</li>
                        <li>Fraccionamiento Lomas del Barrio de Santiago</li>
                        <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78165</li>
                        <li><h4 class="cac_tit">Horario Centro de Atenci&oacute;n a Clientes</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 19:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <h2>Casas maxcom</h2>
            <h3>Regi&oacute;n Centro</h3>
            <div class="half">
                <div class="half">
                    <h4>Atizap&aacute;n</h4>
                    <div class="product branch">
                        <h4>Lomas de la Hacienda</h4>
                        <ul>
                            <li>Blvd. Cuautitl&aacute;n Izcalli 3</li>
                            <li>Colonia Hacienda de la Luz</li>
                            <li>Atizap&aacute;n de Zaragoza, Estado de M&eacute;xico 52929</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                        </ul>
                    </div>
                </div><!--
                --><div class="half">
                    <h4>Chalco</h4>
                    <div class="product branch">
                        <h4>Chalco</h4>
                        <ul>
                            <li>Av. Emiliano Zapata 1066</li>
                            <li>Colonia San Isidro</li>
                            <li>Valle de Chalco, Estado de M&eacute;xico 56617</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                        </ul>
                    </div>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch lone">
                    <h4>San Isidro</h4>
                    <ul>
                        <li>Av. Solidaridad 56</li>
                        <li>Colonia Uni&oacute;n de Guadalupe</li>
                        <li>Valle de Chalco, Estado de M&eacute;xico 56606</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half">
                    <h4>Coacalco</h4>
                    <div class="product branch">
                        <h4>Villa de las flores</h4>
                        <ul>
                            <li>Blvd. Coacalco 345</li>
                            <li>Colonia Villa de las Flores</li>
                            <li>Coacalco de Berrioz&aacute;bal, Estado de M&eacute;xico 55710</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                        </ul>
                    </div>
                </div>
            </div><!--
        --><div class="half">
            <h4>Ecatepec</h4>
            <div class="half product branch">
                <h4>Ciudad Azteca</h4>
                <ul>
                    <li>Blvd. de los Aztecas 103, Local 11</li>
                    <li>Colonia Ciudad Azteca 1<sup>a</sup> secci&oacute;n</li>
                    <li>Ecatepec, Estado de M&eacute;xico 55120</li>
                    <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                    <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 17:00 hrs.</li>
                </ul>
            </div><!--
            --><div class="half product branch">
                    <h4>Jardines de Morelos</h4>
                    <ul>
                        <li>Blvd. Jardines de Morelos 137</li>
                        <li>Colonia Jardines de Morelos</li>
                        <li>Ecatepec, Estado de M&eacute;xico 55070</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
        --><div class="half lone">
            <div class="half product branch">
                <h4>M&uacute;zquiz</h4>
                <ul>
                    <li>Avenida Chabacano 3</li>
                    <li>Colonia Solidaridad 90</li>
                    <li>Ecatepec, Estado de M&eacute;xico 55290</li>
                    <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                    <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                </ul>
            </div><!--
            --><div class="half product branch">
                    <h4>San Andr&eacute;s de la Ca&ntilde;ada</h4>
                    <ul>
                        <li>Primera Cerrada del Laurel, Lote 1, Manzana 10</li>
                        <li>Colonia La Lomita</li>
                        <li>Ecatepec, Estado de M&eacute;xico 55518</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <h4>Nezahualc&oacute;yotl</h4>
            <div class="half">
                <div class="half product branch">
                    <h4>El Sol</h4>
                    <ul>
                        <li>Calle 17, N&uacute;mero 149</li>
                        <li>Colonia Del Sol</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57200</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Evoluci&oacute;n</h4>
                    <ul>
                        <li>Chimalhuac&aacute;n 366</li>
                        <li>Colonia Evoluci&oacute;n</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57700</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>Impulsora</h4>
                    <ul>
                        <li>Hacienda Torrecillas 100</li>
                        <li>Colonia Impulsora Av&iacute;cola</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57130</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>La Perla</h4>
                    <ul>
                        <li>Av.Pantitl&aacute;n 556</li>
                        <li>Colonia La Perla</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57830</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <div class="half">
                <div class="half product branch lone">
                    <h4>Metropolitana</h4>
                    <ul>
                        <li>Calle Adolfo L&oacute;pez Mateos 104-C</li>
                        <li>Colonia Metropolitana 1<sup>a</sup> secci&oacute;n</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57730</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch lone">
                    <h4>Pantitl&aacute;n</h4>
                    <ul>
                        <li>Av. Pantitl&aacute;n 220</li>
                        <li>Colonia M&eacute;xico 2<sup>a</sup> secci&oacute;n</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 54460</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch lone">
                    <h4>Vicente Villada</h4>
                    <ul>
                        <li>Av. San &Aacute;ngel 290</li>
                        <li>Colonia Metropolitana 3<sup>a</sup> secci&oacute;n</li>
                        <li>Nezahualc&oacute;yotl, Estado de M&eacute;xico 57710</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half">
                    <h4>Tlalnepantla</h4>
                    <div class="product branch">
                        <h4>Valle Ceyl&aacute;n</h4>
                        <ul>
                            <li>Av. Gr&aacute;n Pir&aacute;mide 119</li>
                            <li>Colonia San Bartolo Tenayuca</li>
                            <li>Tlalnepantla, Estado de M&eacute;xico 54150</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3>Regi&oacute;n Sur</h3>
                    <h4>Puebla</h4>
            <div class="half">
                <h4>Cholula</h4>
                <div class="half product branch">
                    <h4>Cholula</h4>
                    <ul>
                        <li>Av. 3 Poniente No. 102-A</li>
                        <li>Colonia San Pedro Cholula</li>
                        <li>Cholula, Puebla 72760</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Am&eacute;ricas</h4>
                    <ul>
                        <li>Camino a Morillotla No. 12 Local 4</li>
                        <li>Colonia Cuautlancingo</li>
                        <li>San Pedro Cholula, Puebla 72760</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <h4>Puebla</h4>
                <div class="half product branch">
                    <h4>Alseseca</h4>
                    <ul>
                        <li>Av. Ignacio Zaragoza No. 49</li>
                        <li>Colonia H&eacute;roes de Puebla</li>
                        <li>Puebla, Puebla 72760</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Aquiles Serd&aacute;n</h4>
                    <ul>
                        <li>Blvd. Hermanos Serd&aacute;n No. 727, Loc. 2</li>
                        <li>Colonia Rafael Poniente</li>
                        <li>Puebla, Puebla 72020</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>Mayorazgo</h4>
                    <ul>
                        <li>Av. Nacional No. 766, Local 4</li>
                        <li>Colonia Leobardo Coca Cabrera</li>
                        <li>Puebla, Puebla 72450</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Romero Vargas</h4>
                    <ul>
                        <li>Hombres Ilustres No. 63</li>
                        <li>Colonia Ignacio Romero Vargas</li>
                        <li>Puebla, Puebla 72120</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>San Manuel</h4>
                    <ul>
                        <li>Blvd. Circunvalaci&oacute;n No. 1002</li>
                        <li>Colonia San Baltazar Linda Vista</li>
                        <li>Puebla, Puebla 72570</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>San Pedro</h4>
                    <ul>
                        <li>Diagonal 10 Poniente No. 2712</li>
                        <li>Colonia Villas San Alejandro</li>
                        <li>Puebla, Puebla 72090</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch lone">
                    <h4>San Sebasti&aacute;n</h4>
                    <ul>
                        <li>Cerrada 2B No. 10, Int. 1</li>
                        <li>Colonia Bosques de San Sebasti&aacute;n</li>
                        <li>Puebla, Puebla 72310</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch lone">
                    <h4>Sat&eacute;lite</h4>
                    <ul>
                        <li>Av. Independencia “Plaza Sat&eacute;lite” No. 5024 Local 6</li>
                        <li>Colonia Plaza Sat&eacute;lite</li>
                        <li>Puebla, Puebla 72320</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch lone">
                    <h4>Valle Dorado</h4>
                    <ul>
                        <li>Blvd. San Felipe No. 88</li>
                        <li>Colonia Villa Posadas</li>
                        <li>Puebla, Puebla 72060</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half">
                    <h4>Tehuac&aacute;n</h4>
                    <div class="product branch">
                        <h4>Independencia</h4>
                        <ul>
                            <li>Blvd. Aldama No. 2200</li>
                            <li>Colonia Arcadia, Tehuac&aacute;n</li>
                            <li>Tehuac&aacute;n, Puebla 75760</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                        </ul>
                    </div>
                </div>
            </div><!--
                --><div class="half float-left">
                <div class="half product branch float-left">
                    <h4>San Lorenzo Pliego</h4>
                    <ul>
                        <li>Av. 19 Poniente No. 840</li>
                        <li>Colonia 16 de Marzo</li>
                        <li>Tehuac&aacute;n, Puebla 75766</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 17:00 hrs.</li>
                    </ul>
                </div>
            </div>
            <h3>Regi&oacute;n Baj&iacute;o</h3>
            <div class="half">
                <h4>Quer&eacute;taro</h4>
                <div class="half product branch">
                    <h4>Ampliaci&oacute;n Pac&iacute;fico</h4>
                    <ul>
                        <li>Av. Pie de la Cuesta No. 2806-C</li>
                        <li>Colonia Lomas de San Pedrito Pe&ntilde;uelas</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76148</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Cerrito Colorado</h4>
                    <ul>
                        <li>Tzeltales No. 622, Loc. 4</li>
                        <li>Colonia Cerrito Colorado</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76116</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half lone">
                <div class="half product branch">
                    <h4>Corregidora</h4>
                    <ul>
                        <li>Prolongaci&oacute;n Zaragoza No. 1063, Loc. B</li>
                        <li>Colonia Candiles</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76902</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Garambullo</h4>
                    <ul>
                        <li>Av. Lirios No. 907-B</li>
                        <li>Colonia Insurgentes</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76148</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>Pac&iacute;fico</h4>
                    <ul>
                        <li>Av. Pie de la Cuesta No. 807, Loc. A</li>
                        <li>Colonia Desarrollo San Pablo</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76148</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Presidentes</h4>
                    <ul>
                        <li>Calle 13 No. 101, Local A</li>
                        <li>Colonia Comerciantes</li>
                        <li>Quer&eacute;taro, Quer&eacute;taro 76006</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
                --><div class="half">
                    <div class="half product branch float-left">
                        <h4>Reforma Agraria</h4>
                        <ul>
                            <li>Blvd. De las Am&eacute;ricas No. 201-A</li>
                            <li>Colonia Reforma Agraria</li>
                            <li>Quer&eacute;taro, Quer&eacute;taro 76086</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                    </div>
                </div>
            <div class="half">
                <h4>San Luis Potos&iacute;</h4>
                <div class="half product branch">
                    <h4>21 de Marzo</h4>
                    <ul>
                        <li>Ricardo B. Anaya No. 1821, Loc. A</li>
                        <li>Colonia Ricardo B. Anaya 1ª Secci&oacute;n</li>
                        <li>Soledad de Graciano S&aacute;nchez, San Luis Potos&iacute; 78390</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Aeropuerto</h4>
                    <ul>
                        <li> Calle 4 No. 1201</li>
                        <li>Colonia Industrial Aviaci&oacute;n</li>
                        <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78140</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half lone">
                <div class="half product branch">
                    <h4>Morales</h4>
                    <ul>
                        <li>Prol. Azufre No. 515</li>
                        <li>Colonia Morales</li>
                        <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78159</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Quintas de la Hacienda</h4>
                    <ul>
                        <li>Ricardo B. Anaya No. 3660</li>
                        <li>Fracc. La Libertad</li>
                        <li>Soledad de Graciano S&aacute;nchez, San Luis Potos&iacute; 78394</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
            --><div class="half">
                <div class="half product branch">
                    <h4>Rancho Pav&oacute;n</h4>
                    <ul>
                        <li>Ignacio Allende No. 194</li>
                        <li>Colonia Centro</li>
                        <li>Soledad de Graciano S&aacute;nchez, San Luis Potos&iacute; 78430</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div><!--
                --><div class="half product branch">
                    <h4>Saucito</h4>
                    <ul>
                        <li>Av. Del Sauce No. 455</li>
                        <li>Colonia San Antonio del Saucito</li>
                        <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78110</li>
                        <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                        <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                </div>
            </div><!--
                --><div class="half">
                    <div class="half product branch float-left">
                        <h4>Valle Tecnol&oacute;gico</h4>
                        <ul>
                            <li>Prol. Mu&ntilde;oz No. 2767, Loc. A</li>
                            <li>Colonia Tecnol&oacute;gico</li>
                            <li>San Luis Potos&iacute;, San Luis Potos&iacute; 78140</li>
                            <li><h4 class="cac_tit">Horario Casas Maxcom</h4></li>
                            <li class="horario_cac">Lunes a S&aacute;bado de 9:00 a 14:00 y de 15:00 a 18:00 hrs.</li>
                    </ul>
                    </div>
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
