<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Queswachaca tour | Travel Agency Perú</title>
    <meta name="description"
        content="La gran red de caminos incas llamada QAPAC ÑAN, fue el único medio de comunicación que existió desde tiempos muy remotos, actualmente para los Cusqueños.">
    <meta name="keywords"
        content="Cusco, Queswachaca, Queswachaca tour, Queshuachaca happy peru tour, happy peru, Queshuachaca trek, Tour a qeswachaka, qehuachaca, tour qeshuachaca, puente qeswachaca tour">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Queswachaca tour | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/qeswachaca-bridge.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/qeswachaca-tour">
</head>

<body>
    <!-----Boton wasa---------->
    <a href="https://bit.ly/3CRGLAE" class="whatsapp" target="_blank"> <i class="icon-whatsapp"></i></a>
    <!---FIn botonwasa------------>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap">
        @include('layouts.spanish')
        <li class="has-children">
            <idioma><a><span class="icon-language"></span> Español</a></idioma>
            <ul class="dropdown arrow-top" style="width: 120px">
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('qeswachaca-tour-ingles') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('qeswachaca-portugues') }}'">Portugués</button></li>
            </ul>
        </li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>

    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-tours">
                <?php $titulo = 'Tour a Qeswachaca';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Qeswachaca&nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 100;
                echo $precio; ?>.00
            </p>

            @if (session()->has('flash'))
                <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-center">Su mensaje fué enviado con éxito, Le responderemos en la mayor brevedad
                        posible.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </p>
                </div>
            @endif
        </div>
    </div>
    </div>
    <div class="qeswachaca"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tour Qeswachaca</o>
                <m>Cusco</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="inca-trail-360°-tren-tour">
                            <p>Inca Trail 360° Tour en Tren </p>
                        </a>
                        <a href="inca-rail-primera-clase">
                            <p>Inca Rail Tren Primera Clase </p>
                        </a>
                        <a href="inca-rail-voyager-tren">
                            <p>Inca Rail Voyager Tour en Tren</p>
                        </a>
                        <a href="tren-perurail-vistadome">
                            <p>Peru Rail Vistadome Tour en Tren</p>
                        </a>
                        <a href="hiram-binghan-tour-en-tren">
                            <p>Tren Exclusivo Hiram Bingham</p>
                        </a>
                        <a href="tour-happy-experience">
                            <p>Happy Experience Tour Exclusivo</p>
                        </a>
                        <a href="peru-rail-tren-expedition">
                            <p>Peru Rail Tren Expedition</p>
                        </a>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour Full Day</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>1 día</td>
                                <td>$100.00 por adulto</td>

                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        La gran red de caminos del inca llamado QHAPAQ ÑAN, fue el único medio de comunicación que
                        existió desde tiempos muy remotos, actualmente para los Cusqueños es un orgullo tener sectores
                        ya sean cortos de éstos caminos reales de nuestros antepasados; nuestro Cusco cuenta con 2 ríos
                        importantes el VILCANOTA, APURÍMAC y pequeños afluentes a estos; los cuales también tenían que
                        ser conectados y para ello existieron LOS PUENTES COLGANTES hechos de fibras vegetales.
                        QESWACHACA es uno de estos puentes que ha sido transmitido de generación en generación y su
                        renovación se hace una vez al año.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>

                    <p class="p-tours">
                        Partiremos de la ciudad del Cusco después del respectivo recojo del hotel aproximadamente 4:30
                        de la mañana, tomaremos la ruta hacia el sur de la ciudad teniendo nuestra primera parada en el
                        distrito de CUSIPATA donde nos espera un desayuno buffet en una casa de familia local,
                        continuando nuestro recorrido haremos una pequeña parada en el mirador del distrito de
                        COMBAPATA, podremos apreciar la unión de dos ríos (el río SALCCA que se une al gran río
                        APURÍMAC) continuamos por unos 30 minutos en bus y llegaremos al distrito de YANAOCA y 30
                        minutos más para arribar al distrito de QEWE donde se encuentra el famoso PUENTE DE QESWACHACA.
                        Está construido con fibra vegetal especialmente el ICHU o PAJA ANDINA, teniendo una longitud de
                        casi 30 metros. El trabajo de renovación del puente se realiza una vez al año en el mes de
                        junio, es una costumbre hecha por pobladores de comunidades locales de alrededor; tendremos
                        tiempo suficiente para explorar el lugar, tomar fotografías recibir la información por parte del
                        Guía de turismo, ya de retorno, haremos las paradas en las lagunas de PAMPAMARCA, ASNACOCHA,
                        ACOPIA Y POMACANCHI; luego de
                        disfrutar estos momentos inolvidables en nuestras cuatro lagunas continuaremos nuestra aventura
                        hacia CUSIPATA lugar de nuestro almuerzo buffet para finalmente retornar a la ciudad del Cusco
                        teniendo un arribo a las 18:00 hrs. al hotel.
                    </p>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Incluye:
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &check; Transporte turístico <br>
                                    &check; Guía profesional de turismo bilingüe <br>
                                    &check; Desayuno buffet <br>
                                    &check; Almuerzo buffet <br>
                                    &check; Ingreso <br>
                                    &check; Primeros auxilios y oxigeno
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        No incluye:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Bebidas extras <br>
                                    &#10008; Propinas <br>
                                    &#10008; Medicinas personales
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        ¿Qué necesitas llevar?:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Pasaporte original <br>
                                    &#10034; Bloqueador solar<br>
                                    &#10034; Cámara fotográfica <br>
                                    &#10034; Portabebidas <br>
                                    &#10034; Poncho de lluvia <br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Gorras para el sol <br>
                                    &#10034; Dinero extra <br>
                                    &#10034; Botiquín o medicinas personales

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="notas">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseNotas" aria-expanded="false"
                                        aria-controls="collapseNotas">
                                        Notas Importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseNotas" class="collapse" aria-labelledby="notas"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Salidas diarias. <br>
                                    &#10034; Los precios no incluyen el IGV (18%).<br>
                                    &#10034; Los precios son por persona y están expresados en (US$) dólares
                                    americanos.<br>
                                    &#10034; Una vez aceptada la reserva el pasajero debe enviar por e-mail la copia de
                                    su pasaporte o cedula de identidad en forma obligatoria.<br>
                                    &#10034; Para concretar su reserva solicitamos el pago del 50%.

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ShareThis BEGIN -->
                    <p style="padding-top: 2em; color:#000" class="text-center">Compartir</p>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://happyperutours.com/es/qeswachaca-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 100.00 <i
                                class="icon-info-circle price-info" data-title="Precio por adulto"></i></h4>
                        @include('layouts.book-castellano')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Galería de Imágenes</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/QESWACHACA.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/QESWACHACA.jpg') }}"
                                    alt="qeswachaca">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/qeswachaca-bridge.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/qeswachaca-bridge.jpg') }}"
                                    alt="Tour a qeswachaca">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="inca-trail-360°-tren-tour">
                            <p>Inca Trail 360° Tour en Tren </p>
                        </a>
                        <a href="inca-rail-primera-clase">
                            <p>Inca Rail Tren Primera Clase </p>
                        </a>
                        <a href="inca-rail-voyager-tren">
                            <p>Inca Rail Voyager Tour en Tren</p>
                        </a>
                        <a href="tren-perurail-vistadome">
                            <p>Peru Rail Vistadome Tour en Tren</p>
                        </a>
                        <a href="hiram-binghan-tour-en-tren">
                            <p>Tren Exclusivo Hiram Bingham</p>
                        </a>
                        <a href="tour-happy-experience">
                            <p>Happy Experience Tour Exclusivo</p>
                        </a>
                        <a href="peru-rail-tren-expedition">
                            <p>Peru Rail Tren Expedition</p>
                        </a>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour Full Day</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.foot-castellano')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
