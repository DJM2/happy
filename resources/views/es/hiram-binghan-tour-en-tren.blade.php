<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Hiram Bingham Tour en Tren a Machu Picchu | Travel Agency Perú</title>
    <meta name="description"
        content="Será un viaje inolvidable en el exclusivo y lujoso tren Belmond Hiram Bingham, Los vagones se distinguen por sus colores en azul y dorado.">
    <meta name="keywords"
        content="Cusco, Hiram Bingham, Hiram Bingham tour, Hiram Bingham tour en tren, tren Hiram Bingham a Machu Picchu, Machu Picchu tour, machupicchu en tren, tren hiram bingham, tour en tren machupicchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Hiram Bingham Tour en Tren a Machu Picchu | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/hiram-binghan-exclusive-train.png" />
    <link rel="canonical" href="https://happyperutours.com/es/hiram-binghan-tour-en-tren">
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
                        onclick="window.location.href='{{ route('hiram-bingham-english') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('perurail-hiram-bingham') }}'">Portugués</button></li>
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
            <h1 class="text-center h1-pages">
                <?php $titulo = 'Hiram Binghan';
                echo $titulo; ?>
            </h1>
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
    <div class="train"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tren exclusivo</o>
                <m>Hiram Binghan</m>
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
                        <a href="perurail-valle-sagrado-tour">
                            <p>Peru Rail Valle Sagrado Tour en Tren</p>
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
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        Será un viaje inolvidable en el exclusivo y lujoso tren Belmond Hiram Bingham, Los coches se
                        distinguen por sus colores en azul y dorado, por sus interiores cálidos y acogedores que cuentan
                        con una elegante tapicería, disfrutará del sofisticado coche comedor, del coche bar y del coche
                        observatorio, desde donde podrá disfrutar al aire libre, de la maravillosa ruta, en compañía de
                        un cóctel peruano y de shows locales de música en vivo.<br><br>
                        <strong>Servicio a bordo: </strong>
                        Inicie su experiencia con un cóctel de bienvenida, una vez empezado el recorrido, el maître lo
                        invitará a disfrutar de un brunch y un almuerzo gourmet en el viaje de ida. Y a su viaje de
                        retorno, disfrutará de una cena gastronómica. En ambos casos podrá acompañar con una excelente
                        selección de vinos. A ritmo de cajón peruano y panderetas, y durante todo el recorrido, un show
                        único lo acompañará con música típica e internacional, enmarcando lo que será un viaje
                        inolvidable a la ciudadela de Machu Picchu.

                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>
                    <p class="p-tours"><strong>Viaje en tren: </strong><br>
                        Pasaremos por su hotel para recogerlos y nos dirigiremos hacia la estación de tren de Poroy,
                        desde donde partiremos en el tren Belmond Hiram Bingham se encuentra entre las 10 rutas más
                        maravillosas del mundo para conocer una de las Siete maravillas modernas del mundo. Desembarcan
                        en el pueblo de Aguas Calientes y serán trasladados en autobús el transporte que ascenderá por
                        un camino intrincado obsequiándonos una espectacular vista del río Urubamba que da forma al
                        famoso cañón hasta llegar al Sanctuary Lodge, para el almuerzo.
                    </p>
                    <p class="p-tours"><strong>Visita a Machu Picchu: </strong><br>
                        Luego tendremos una visita guiada privada del santuario. La Ciudad perdida de los incas, Machu
                        Picchu, nos recibirá con sus increíbles terrazas, escalinatas, recintos ceremoniales y áreas
                        urbanas. Será una experiencia inolvidable, donde un guía profesional le transmitirá la historia
                        que envuelve este misterioso y encantador recinto, visitará uno de los centros energéticos más
                        importantes del mundo. Luego de la visita guiada, gozará de tiempo libre para explorar la zona
                        por propia cuenta, relajarse o meditar.
                    </p>
                    <p class="p-tours"><strong>Retorno a Cusco: </strong><br>
                        A la hora acordada, abordará el tren de retorno y disfrutará de una suntuosa cena que se sirve
                        en el viaje de regreso a Cusco. A su arribo a la estación de Poroy será recibido y trasladado a
                        su hotel.
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
                                    &check; Traslados del hotel en Cusco - Estación - Hotel.<br>
                                    &check; Show de bienvenida con danzas típicas de la región.<br>
                                    &check; Coche Bar con los mejores cócteles peruanos.<br>
                                    &check; Almuerzo gourmet a bordo.<br>
                                    &check; Coche observatorio para disfrutar de los paisajes de la ruta.<br>
                                    &check; Show de música en vivo.<br>
                                    &check; Sala de espera VIP en la estación Machu Picchu.<br>
                                    &check; Bus de subida hacia la ciudadela de Machu Picchu.<br>
                                    &check; Boleto de entrada a la ciudadela de Machu Picchu.<br>
                                    &check; Un guía turístico para un grupo máximo de 14 personas en español y/o
                                    inglés.<br>
                                    &check; Té de la tarde en el hotel Belmond Sanctuary Lodge.<br>
                                    &check; Cena gourmet.<br>
                                    &check; Servicio de asistencia.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Does not include:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
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
                                        Notas importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Salidas diarias. <br>
                                    &#10034; Menores de 0-2 años no pagan siempre y cuando vayan en el regazo de los
                                    padres.<br>
                                    &#10034; Menores de 3-16 años tienen un descuento especial.<br>
                                    &#10034; Los precios son por persona y están expresados en (US$) dólares
                                    americanos.<br>
                                    &#10034; Los precios no incluyen el IGV (18%).<br>
                                    &#10034; El servicio de tour es grupal.<br>
                                    &#10034; Una vez aceptada la reserva el pasajero debe enviar por e-mail la copia de
                                    su pasaporte o cedula de identidad en forma obligatoria.<br>
                                    &#10034; Para concretar su reserva solicitamos el pago del 40%.
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/hiram-binghan-tour-en-tren"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
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
                            <a href="{{ asset('img/galeria/hiram-bingham.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/hiram-bingham.jpg') }}"
                                    alt="lares trek tour">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/hiram-bingham-train-tour.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/hiram-bingham-train-tour.jpg') }}"
                                    alt="lares tour 4 days">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/hiram-bingham-train.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/hiram-bingham-train.jpg') }}"
                                    alt="tour a lares">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-machu-picchu-sorprendente.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-machu-picchu-sorprendente.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-machu-picchu-andenes-asombrosos.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-machu-picchu-andenes-asombrosos.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-machu-picchu-andenes.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-machu-picchu-andenes.jpg') }}">
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
                        <a href="">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="">
                            <p>Inka jungle</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="">
                            <p>Choquequirao 4D/3N</p>
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
