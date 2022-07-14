<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Waqrapukara tour full day | Travel Agency Perú</title>
    <meta name="description"
        content="Cuyos términos quechua significa “fortaleza en forma de cuernos”, es una nueva ruta de aventura para conocer un nuevo sitio arqueológico inca...">
    <meta name="keywords"
        content="Cusco, waqrapukara tour, waqrapukara trek, caminata a waqrapukara, visitar waqrapukara, visitar waqrapukara tour, tours a waqrapukara">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Waqrapucara tour full day | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/waqrapukara-happy-peru.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/waqrapukara-full-day-tour">
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
                        onclick="window.location.href='{{ route('waqrapukara-tour') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('waqrapukara-full-day') }}'">Portugués</button></li>
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
                <?php $titulo = 'Tour a Waqrapukara';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Waqrapukara&nbsp;&nbsp;
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
    <div class="waqra"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Waqrapukara</o>
                <m>Tour de Full day</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao tour 4 días</p>
                        </a>
                        <a href="tour-laguna-humantay">
                            <p>Laguna Humantay</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>
                        <a href="inca-trail-4-dias">
                            <p>Camino Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="valle-sagrado-full-day">
                            <p>Valle Sagrado Full day</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray y Salineras</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Qeswachaca Tour</p>
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
                                <td>Moderado</td>
                                <td>1 día</td>
                                <td>$100.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        Cuyos términos quechua significa “fortaleza en forma de cuernos”, es una nueva ruta de aventura
                        para conocer un nuevo sitio arqueológico inca, principalmente de uso religioso; ubicado en un
                        magnífico valle de rocas con una vista impresionante del Cañón del Apurímac, por donde discurre
                        uno de los ríos mas importantes del Cusco llamado APURIMAC.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>

                    <p class="p-tours">
                        El recojo del hotel será a las 4:30 am, tomaremos la ruta sur de la ciudad del Cusco y después
                        de 2 horas en bus llegaremos a SANGARARA, aquí tendremos el desayuno; continuaremos por unos 30
                        minutos hasta el poblado de PITUMARCA, luego nos dirigimos a PUNTA CARRETERA o zona de
                        estacionamiento allí iniciaremos nuestra aventura; durante el trayecto observaremos algunos
                        animales domésticos y salvajes de nuestra sierra Cusqueña, también disfrutaremos de algunas
                        pequeñas lagunas de formación natural por aguas pluviales; la caminata se realiza por terrenos
                        llanos para luego descender y poder arribar a WAQRAPUKARA (4300 m.s.n.m), el tiempo estimado de
                        caminata es de 3 horas. Ya en el lugar tendremos tiempo suficiente para explorar y tomar
                        fotografías del sitio arqueológico conformado por dos sectores importantes el religioso o
                        ceremonial y el agrícola, luego de disfrutar también nuestro almuerzo box lunch iniciaremos el
                        retorno por el mismo sendero hasta PITUMARCA donde nos espera el bus para regresar a Cusco.
                        Llegando a la ciudad a las 19:00 hrs hasta el hotel.
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
                                    &check; Desayuno buffet<br>
                                    &check; Almuerzo box lunch <br>
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
                                    &#10008; Bebidas extra<br>
                                    &#10008; Bastones de caminata<br>
                                    &#10008; Propinas
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
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Bastones de caminata <br>
                                    &#10034; Ropa abrigadora (guantes, gorra abrigadora)<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/waqrakucara-full-day-tour"
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
                            <a href="{{ asset('img/galeria/trek-to-waqrapucara.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/trek-to-waqrapucara.jpg') }}"
                                    alt="waqrapukara tour">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapucara-full-day-tour.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapucara-full-day-tour.jpg') }}"
                                    alt="waqrapukara full day">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-cusco-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/waqrapukara-cusco-tour.jpg') }}"
                                    alt="Waqrapukara cusco">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-happy-peru.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/waqrapukara-happy-peru.jpg') }}"
                                    alt="tour a waqrapukara">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/waqrapukara-tour.jpg') }}"
                                    alt="Tour a Waqrapukara">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-tour-full-day.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapukara-tour-full-day.jpg') }}"
                                    alt="Cusco - waqrapukara">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Similar Tours</h4>
                    <div class="similares">
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4 days tour</p>
                        </a>
                        <a href="humantay-lake-tour">
                            <p>Humantay Lake</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="inca-trail-4-days">
                            <p>Inca Trail To Machu Picchu 4 days</p>
                        </a>
                        <a href="salkantay-trek-tour-5-days">
                            <p>Salkantay Trek 2 days</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>maras, Moray & Salineras</p>
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
