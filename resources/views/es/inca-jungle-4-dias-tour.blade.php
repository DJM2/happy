<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Inca Jungle tour de 4 días | Travel Agency Perú</title>
    <meta name="description"
        content="El INCA JUNGLE es una buena alternativa para llegar a Machu Picchu, tiene una duración de 4 días y 3 noches, es una mezcla de deportes de aventura.">
    <meta name="keywords"
        content="Cusco, Tour inca jungle, inca jungle tour, inca jungle 4 dias, inka jungle 4 dias tour, llegar a machu picchu por inca jungle, Inca Tours, caminata por inca jungle, tour a machu picchu, trek a aguas calientes">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Inca Jungle tour de 4 días | Travel Agency Perú" />
    <meta property="og:image"
        content="https://happyperutours.com/img/panoramic/inca-jungle-Machupicchu-tour-x-travel-peru.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/inca-jungle-4-dias-tour">
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
                        onclick="window.location.href='{{ route('inca-jungle-4-days') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('selva-inca-4-dias') }}'">Portugués</button></li>
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
                <?php $titulo = 'Inca Jungle, tour de 4 días';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 450;
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
    <div class="inca-jungle"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tour Inca Jungle de </o>
                <m>4 días a Machu Picchu</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="inca-trail-4-dias">
                            <p>Camino Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="valle-sagrado-3-dias">
                            <p>Vale Sagrado 3 días</p>
                        </a>
                        <a href="tour-laguna-humantay">
                            <p>Laguna Humantay</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>

                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay Tour 5 días</p>
                        </a>
                        <a href="waqrapukara-full-day-tour">
                            <p>Waqrapukara full day</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao tour 4 días</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo a Machupicchu</p>
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
                                <td>$450.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        El INKA JUNGLE, es una buena alternativa para llegar a Machupicchu, dura 4 días y 3 noches, es
                        una mezcla de deportes de aventura, con cultura e historia, una de las mejores rutas donde se
                        aprecia abundante flora y fauna de la región ceja de selva. Destinado para todos los que desean
                        salir de la rutina clásica de caminatas que conducen a una de las 7 maravillas del mundo
                        MACHUPICCHU.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DIA 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Distancia en bus</th>
                                <th scope="col">Distancia en bicicleta</th>
                                <th scope="col">Acomodación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>3 horas</td>
                                <td>64 km | 4 horas</td>
                                <td>Lodge</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Se inicia con el recojo del hotel 6:00 am para dirigirnos hacia el valle sagrado de los incas en
                        un bus turístico privado, llegando al pueblo Ollantaytambo tendremos el desayuno opcional, para
                        luego continuar por alrededor de 1 hora hasta el ABRA MÁLAGA (4350 m.s.n.m.) lugar de inicio de
                        nuestra aventura sobre dos ruedas “bicicleta”. Después de un tiempo prudencial para organizar el
                        grupo con las respectivas bicicletas, indicaciones del guía y el uso de los implementos de
                        protección, iniciamos el descenso por un aproximado de 3 horas hasta el pequeño poblado de
                        HUAMANMARCA, durante el recorrido tendremos algunas paradas para las fotografías de paisajes
                        hermosos como son el NEVADO DE LA VERÓNICA (5700 m.s.n.m.) y el cambio de vegetación de la parte
                        andina hacia el bosque tropical, llegando al poblado de SANTA MARIA(1250 m.s.n.m.) entre las
                        12:00 a 13:00 horas, donde degustaremos un riquísimo almuerzo en el lodge que será nuestro lugar
                        de pernocte. Luego del almuerzo continuaremos con los deportes de aventura esta vez en el Río
                        Vilcanota realizando el RAFTING opcional, con unos rápidos de categoría III, para esta actividad
                        contamos con todas las medidas de seguridad como casco, chalecos salvavidas, cortavientos y un
                        guía experto en kayak de seguridad. Seguidamente retornaremos a nuestro lodge para la cena.
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
                                <th scope="col">Acomodación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>7 horas</td>
                                <td>22 km</td>
                                <td>Hostel</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Después de degustar un consistente desayuno emprenderemos nuestra caminata fresca 6.00am,
                        durante las primeras horas caminaremos dentro de las plantaciones de frutas como los platanales,
                        naranjales y poder reconocer las plantaciones de Coca, luego ascenderemos hasta el lugar llamado
                        COLA DE MONO, propiedad privada de una familia local que nos enseñará sus costumbres y
                        tradiciones de la vida cotidiana, el guía nos hará una explicación de los productos que las
                        familias de la zona producen como por ejemplo, producción de café, maíz, cacao, yuca y otros;
                        también podremos degustar bebidas tradicionales. Continuamos nuestro ascenso hasta conectarnos
                        con el camino inca original recientemente restaurado, este camino conectaba la ciudad de
                        Machupicchu con el último refugio inca llamado VILCABAMBA, por el camino inca se tendrá una
                        vista del majestuoso <strong> CAÑÓN DEL HUANCARCCASA Y EL NEVADO DEL SALKANTAY,</strong>
                        seguidamente
                        descenderemos hacia el poblado de QUELLOMAYO, donde disfrutaremos de un almuerzo y un merecido
                        descanso para luego continuar por un aproximado de 2 horas hasta llegar a las famosas aguas
                        termales de COCALMAYO, después de un relajado tiempo en las aguas termales tomaremos nuestro
                        transporte privado hacia el poblado de SANTA TERESA , lugar de la cena y pernocte en un hostal.
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
                                <th scope="col">Acomodación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>3 horars</td>
                                <td>12 km</td>
                                <td>Hostel</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Este día ya nos estaremos aproximando a nuestro objetivo MACHUPICCHU, iniciando nuestra
                        actividad inmediatamente después del desayuno, realizando otra actividad opcional que es el zip
                        line o tirolesa, finalizado esta aventura tomaremos un transporte hacia el poblado de
                        HIDROELÉCTRICA donde tendremos el almuerzo y luego continuar con una caminata de 3 horas hasta
                        el pueblo de aguas calientes, aquí tendremos la cena en un restaurante y el pernocte en un
                        hostal confortable.
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
                                <td>3 horas</td>
                                <td>6 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Éste día será para nosotros un reto de tratar de ser uno de los primeros grupos en visitar la
                        ciudadela de Machupicchu por ello el despierto será muy temprano 4:00 am para poder estar a
                        tiempo en la estación de bus porque también habrá mucha gente teniendo el mismo objetivo, el
                        primer bus partirá a las 5:30am con un recorrido de 30 minutos estaremos haciendo nuestro
                        ingreso a la ciudadela a las 6.00am, el tour guiado tiene una duración aproximada de 3 horas
                        conociendo los lugares más importantes y resaltantes de Machupicchu luego de ello tendrán un
                        tiempo libre racional para tomar fotografías y llenarse de energías que solo este lugar
                        maravilloso puede ofrecer, también tendrán la opción de poder realizar una pequeña caminata
                        hacia el INTIPUNKU o puerta del sol desde donde podrán tomar fotografías panorámicas de
                        Machupicchu, se les recomienda bajar a aguas calientes para el almuerzo puesto que hay más
                        opciones, el tren de retorno a Cusco partirá a las 4:20pm arribando a la ciudad del Cusco a las
                        8:30 pm hasta el hotel.
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
                                    &check; Transporte turístico Cusco- Abra Málaga <br>
                                    &check; Tren turístico Aguas Calientes – Ollantaytambo<br>
                                    &check; 1 vía de bus turístico aguas calientes – Machupicchu <br>
                                    &check; Tickets de ingreso a Machupicchu <br>
                                    &check; 3 desayunos, 3 almuerzos, 3 cenas, 2 horas de té (opción vegetariana) <br>
                                    &check; Snacks <br>
                                    &check; Guía profesional bilingüe <br>
                                    &check; Alojamiento 1 Lodge, 2 hostal <br>
                                    &check; Bicicletas con suspensión delantera <br>
                                    &check; Implementos de protección <br>
                                    &check; Actividades de aventura <br>
                                    &check; Botiquín de primeros auxilios <br>
                                    &check; Oxígeno <br>
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
                                    &#10008; Bebidas extra <br>
                                    &#10008; 2do ticket de bus turístico (Machupicchu- aguas calientes) opcional<br>
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
                    <div class="fb-comments"
                        data-href="https://happyperutours.com/es/inca-jungle-4-dias-tour
                        data-width="
                        100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 450.00 <i
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
                            <a href="{{ asset('img/galeria/inca-jungle-4-days.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-jungle-4-days.jpg') }}"
                                    alt="Inca jungle 4 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inka-jungle-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inka-jungle-tour.jpg') }}"
                                    alt="caminata inca jungle por 4 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-jungle-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-jungle-tour.jpg') }}"
                                    alt="tour a machu picchu caminata">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="inca-trail-4-dias">
                            <p>Camino Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="valle-sagrado-3-dias">
                            <p>Vale Sagrado 3 días</p>
                        </a>
                        <a href="tour-laguna-humantay">
                            <p>Laguna Humantay</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>

                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay Tour 5 días</p>
                        </a>
                        <a href="waqrapukara-full-day-tour">
                            <p>Waqrapukara full day</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao tour 4 días</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo a Machupicchu</p>
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
