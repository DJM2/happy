<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Camino Inca a Machu Picchu, tour de 4 días</title>
    <meta name="description"
        content="El Camino Inca de 4 días a Machu Picchu considerado uno de los más bellos de América, donde podrá disfrutar de experiencias inolvidables, vistas impresionantes.">
    <meta name="keywords"
        content="Cusco, camino inca, inca trek, camino inca 4 dias, camino inca 4 dias, camino inca a machu picchu, tour machu picchu, machu picchu trek, trek a machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Camino Inca a Machu Picchu, tour de 4 días" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/inca-trail.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/inca-trail-4-dias">
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
                        onclick="window.location.href='{{ route('inca-trail-4-days') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('trilha-inca-4-dias') }}'">Portugués</button></li>
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
                <?php $titulo = 'Camino Inca 4 días';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 650;
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
    <div class="machu"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Camino Inca a Machu </o>
                <m>Picchu de 4 días</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="tour-happy-experience">
                            <p>Happy Experience Tour</p>
                        </a>
                        <a href="hiram-binghan-tour-en-tren">
                            <p>Hiram Binghan tour en tren</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle a Machu Picchu</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Caminata Salkantay 5 dias</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado de los Incas</p>
                        </a>
                        <a href="inca-rail-primera-clase">
                            <p>Tour en tren Primera Clase</p>
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
                                <td>4 días</td>
                                <td>$650.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="h5-tours">Vista general:</h5>
                    <p class="p-tours">
                        El camino inca 4 días a Machupicchu considerado uno de los más hermosos de América, donde se
                        disfruta de experiencias inolvidables vistas impresionantes de la sierra cusqueña, de nuestro
                        famoso nevado de la Verónica, estar en la cumbre de una montaña sobre los 4200 metros 13779
                        pies, continuar el camino por una selva forestal cubierta de flora y fauna variada encontrando
                        sitios arqueológicos incas importantes de diferentes funciones en especial religiosos. Éste
                        camino inca denominado también camino sagrado a la ciudadela inca de Machupicchu.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DIA 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Distancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>7 horas</td>
                                <td>12 km</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="p-tours">
                        Salimos de la ciudad del cusco muy temprano 5:00 am, antes de llegar al lugar de inicio de
                        nuestra caminata el km 82 o PISCACUCHO haremos una parada en el pueblo de Ollantaytambo para el
                        desayuno, el km 82 también es el lugar donde encontraremos al resto del equipo que nos
                        acompañará durante el Trek, luego de organizar todo iniciaremos nuestra aventura pasando por un
                        puesto de control donde presentaremos todos los documentos obligatorios para utilizar la red de
                        caminos inca.<br><br>

                        Después de 3 horas y media de caminata llegaremos al sector de TARAYOC allí tendremos el
                        almuerzo. Luego continuaremos ascendiendo hasta nuestro lugar de campamento llamado YUNCA CHIMPA
                        (3150 m.snm) desde donde tendremos una vista del nevado del VERONICA.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Distancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Difícil</td>
                                <td>9 horas</td>
                                <td>15 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        El despierto será con un tradicional té de coca a las 5:00 am, luego del desayuno
                        aproximadamente a las 6:30am dejamos el campamento para continuar el ascenso hasta la parte más
                        alta de nuestra ruta “ABRA DE WARMIWAÑUSCA” 4200 m.s.n.m. Desde allí descenderemos
                        inmediatamente al lugar de almuerzo llamado PACAYMAYO, hermosa quebrada por donde discurre el
                        río del mismo nombre, después de degustar el almuerzo ascenderemos hasta los 3900 m.s.n.m. “abra
                        de RUNKURAKAY” donde a mitad de la montaña encontraremos el sitio arqueológico de RUNKURAKAY, el
                        abra del mismo nombre es conocido como el lugar de las ofrendas donde los viajeros tienen la
                        oportunidad de conectarse con las montañas realizando junto a su guía una ofrenda hecha de hojas
                        de coca, piedras y mucha fe. A una hora de descenso arribaremos a nuestro primer sitio
                        arqueológico SAYACMARCA luego de la visita continuaremos hacia nuestro segundo campamento
                        CHAQUICOCHA (3650 m.s.n.m.) llegando aproximadamente 5:00pm.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Distancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>5 horas</td>
                                <td>10 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Considerado el día más hermoso de toda la ruta iniciaremos la caminata a las 7:00 am, este día
                        tendremos la oportunidad de caminar por la selva forestal es por ello lo hermoso de este día
                        porque observaremos variedad de aves, mamíferos, insectos, mariposas si gozamos de suerte hasta
                        podríamos encontrarnos el famoso oso de anteojos animal representativo de nuestro camino inca.
                        También podremos disfrutar de una variedad de flora entre ellas las más hermosas orquídeas y
                        sitios arqueológicos como PHUYUPATAMARCA (3950 m.s.n.m.), para el almuerzo llegaremos a
                        WIÑAYWAYNA (2650 m.s.n.m.) también será el último campamento, luego del almuerzo tendremos la
                        visita al sitio arqueológico de wiñaywayna y el resto de la tarde libre para recuperar energías
                        para nuestro último día de Trek.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 04:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Distancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>2 horas</td>
                                <td>5 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        El despierto será muy temprano a las 3:30 am, luego del desayuno y utilizando las linternas
                        iniciaremos la caminata por la última parte del camino inca, una hora después arribaremos al
                        INTIPUNKU “PUERTA DEL SOL” desde donde tendremos una vista impresionante de MACHUPICCHU (2400
                        m.s.n.m.) y los primeros rayos solares. Finalmente, descenderemos por una hora hasta la misma
                        ciudadela y nos dirigimos al puesto de control para organizar, dejar nuestras mochilas y
                        reingresar a Machupicchu a la visita guiada.<br><br>

                        Por la tarde el retorno será por tren hasta Ollantaytambo luego bus a la ciudad del Cusco
                        llegando al hotel aproximadamente a las 8:30pm.
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
                                    &check; Recojo del hotel <br>
                                    &check; Transporte cusco- kilómetro 82<br>
                                    &check; Transporte Ollantaytambo - Cusco<br>
                                    &check; Tickets de ingreso al Camino Inca y Machupicchu<br>
                                    &check; Ticket de bus turístico para descender a Aguas Calientes<br>
                                    &check; 4 desayunos, 3 almuerzos, 3 cenas, 3 horas de té (opción vegetariana)<br>
                                    &check; Snacks<br>
                                    &check; Guía profesional bilingüe<br>
                                    &check; Cocinero profesional<br>
                                    &check; Equipo de campamento (carpa y colchoneta)<br>
                                    &check; Porteador (7 kilos por persona)<br>
                                    &check; Porteador (para todo el equipo de campamento y cocina)<br>
                                    &check; Botiquín de primeros auxilios<br>
                                    &check; Oxígeno<br>
                                    &check; Alcohol y Gel desinfectantes parte del protocolo de bioseguridad
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
                                    &#10008; Primer desayuno <br>
                                    &#10008; Ultimo almuerzo<br>
                                    &#10008; Bebidas extras<br>
                                    &#10008; Bolsa de dormir <br>
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
                                    &#10034; Bolsa de dormir<br>
                                    &#10034; Bloqueador solar<br>
                                    &#10034; Repelente de mosquitos<br>
                                    &#10034; Snacks (chocolates, dulces, frutos secos etc.) <br>
                                    &#10034; Cámara fotográfica <br>
                                    &#10034; Portabebidas <br>
                                    &#10034; Poncho de lluvia <br>
                                    &#10034; Polos extra <br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Bastones de caminata <br>
                                    &#10034; Sandalias <br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/inca-trail-4-dias"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 650.00 <i
                                class="icon-info-circle price-info" data-title="Precio por adulto"></i></h4>
                        @include('layouts.book-castellano')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Galería de Imagenes</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/camino-inca.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/camino-inca.webp') }}"
                                    alt="Inca Trailto Machu Picchu" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/camino-inca-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/camino-inca-tour.webp') }}"
                                    alt="lares tour 4 days" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-trail-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail-tour.webp') }}"
                                    alt="tour a lares" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-trail.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail.webp') }}" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/turistas-camino-inca.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/turistas-camino-inca.webp') }}" alt="Inca Trail turists" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/camino-inca-machu-picchu.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/camino-inca-machu-picchu.webp') }}" alt="Inca Trail 4 days" loading="lazy">
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
