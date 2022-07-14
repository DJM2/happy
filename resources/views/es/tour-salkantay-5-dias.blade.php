<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Salkantay Trek 5 días | Travel Agency Perú</title>
    <meta name="description"
        content="La caminata esconde magníficos paisajes naturales y nos invita a descubrir las maravillas de las regiones del Perú. Iniciando en la región Quechua donde...">
    <meta name="keywords"
        content="Cusco, Tour salknatay, Salkantay trek, salkantay trek tour, tour to salkantay, salkantay 5 days tour, 5 days trek salkantay">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Salkantay Trek 5 días | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/salkantay-trek.jpgg" />
    <link rel="canonical" href="https://happyperutours.com/es/tour-salkantay-5-dias">
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
                        onclick="window.location.href='{{ route('salkantay-5-days') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('salkantay-5-dias') }}'">Portugués</button></li>
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
                <?php $titulo = 'Salkantay Trek 5 días';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Salkantay - Machupicchu&nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 500;
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
    <div class="lares"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Caminata en Salkantay</o>
                <m> de 5 días</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado 2 días</p>
                        </a>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>

                        <a href="tour-7-lagunas-ausangate">
                            <p>Ausangate 7 lagunas tour</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>

                        <a href="inca-trail-360°-tren-tour">
                            <p>Inca Rail 360° Tour en tren</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Qeswachaca Tour</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="inca-trail-4-dias">
                            <p>Camino Inca a Machupicchu 4 días</p>
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
                                <td>Difícil</td>
                                <td>5 días</td>
                                <td>$500.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        Considerado una de las mejores caminatas del mundo, es la forma más increíble de llegar a
                        MACHUPICCHU; esta ruta de senderismo atraviesa uno de los nevados más importantes de la ciudad
                        del Cusco que es el SALKANTAY (6270 m.s.n.m.), la caminata esconde magníficos paisajes naturales
                        y nos invita a descubrir las maravillas de las regiones del Perú. Iniciando en la región Quechua
                        3000 m.s.n.m. luego acampar sobre los 3900 m.s.n.m. región Puna, hasta llegar al paso del
                        SALKANTAY 4650 m.s.n.m. y finalmente conocer nuestra ceja de selva o selva alta 1900 m.s.n.m.
                        durante su trayecto se aprecia la gran variedad de flora y fauna silvestre. Un día antes de
                        llegar a nuestro objetivo que es MACHU PICCHU podremos ascender a una de las últimas
                        construcciones incas LLACTAPATA desde donde divisamos la gran ciudadela de MACHUPICCHU con una
                        vista impresionante del valle.
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
                                <td>6 horas</td>
                                <td>12 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        El recojo del hotel será a las 4:30 de la mañana, tomaremos el bus privado turístico hacia el
                        pueblo de Mollepata por alrededor de 2 horas y 30 minutos, en éste lugar tendremos el desayuno
                        opcional luego continuaremos en bus por aproximadamente 1 hora hasta CHALLACANCHA, punto de
                        inicio de nuestra caminata y lugar de encuentro con el resto de equipo de nuestro grupo,
                        tendremos tiempo suficiente para poder organizar nuestras mochilas, cosas personales, equipo de
                        campamento, equipo de cocina y los caballos que serán nuestro medio de transporte durante los 3
                        primeros días. A pocos minutos de iniciar la caminata llegaremos a un antiguo canal inca por
                        donde continuaremos el trayecto, desde este lugar también tendremos una vista impresionante del
                        nevado del HUMANTAY, al cabo de tres horas de caminata llegaremos a SORAYPAMPA (3900 m.s.n.m.)
                        donde tendremos el primer almuerzo y primer campamento, después del almuerzo haremos una pequeña
                        caminata para conocer la hermosa laguna Humantay, famosa en la región de Cusco. Retornaremos
                        justo para la hora del té y posteriormente la cena que nos proveerá el equipo de cocina; por la
                        noche se recomienda tomarse unos minutos para observar las estrellas puesto que nos encontramos
                        en un lugar alto, limpio sin contaminación y es fácil divisar las constelaciones.
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
                                <td>18 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Muy temprano su guía le despertará con un té de coca caliente, éste día estará lleno de
                        sorpresas por todos los paisajes que encontrarás en el camino, luego del desayuno nos
                        dirigiremos hacia la parte más alta de la caminata esto nos tomará un aproximado de 4 horas, la
                        parte más alta o llamado también el PASO DE SALKANTAY está elevado sobre 4650 m.s.n.m. desde
                        este punto podremos apreciar el majestuoso nevado del SALKANTAY 6280 m.s.n.m. para llegar al
                        paso la caminata ascendente será un poco difícil pero NO imposible si lo hacemos a pasos lentos,
                        una vez arriba el guía hará una explicación del lugar para luego iniciar el descenso por el
                        valle siempre apreciando hermosos panoramas que nos brinda la naturaleza, después de 1 hora
                        aproximadamente llegaremos al lugar de almuerzo HUAYRACMACHAY, una vez terminado el descanso y
                        disfrutado un riquísimo almuerzo continuaremos el descenso por el valle por un tiempo de 3 horas
                        pero en esta parte el paisaje cambiará, tendremos exuberante flora y fauna, este microclima de
                        la parte alta de los andes es conocido como bosque nuboso parecido a la selva entonces alistamos
                        cámaras porque empezaremos a ver animales en su hábitat natural, flores y orquídeas, este día
                        terminará aproximadamente 5:30 pm en el segundo campamento CHAULLAY (2800 M.S.N.M.)
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
                                <td>Moderado</td>
                                <td>9 horas</td>
                                <td>18 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Este día también es interesante porque a medida que descendemos el clima va cambiando de frío a
                        más húmedo, el paisaje se va tornando más verde y el guía irá mostrándoles todo durante la ruta.
                        El desayuno será muy temprano porque trataremos de ser los primeros de todos los grupos en salir
                        del campamento y así tener la oportunidad de ver animales, disfrutar la tranquilidad de la
                        caminata y tener tiempo para algunas actividades como hacer el tour del café o visitar las aguas
                        termales de Santa teresa, el trayecto en este día será gradual con algunas pequeñas subidas y
                        caminos planos por aproximadamente 5 horas luego arribaremos a nuestro último campamento llamado
                        LA PLAYA, llegando entre la 1 o 2 de la tarde, allí el guía les dará opciones para algunas
                        actividades extras. La cena será temprano porque todavía el siguiente día será largo.
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
                                <td>Moderado</td>
                                <td>9 horas</td>
                                <td>18 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        El despertar será con un té caliente para iniciar la mañana tendremos tiempo suficiente para
                        alistara todo nuestro equipo y luego del desayuno iniciaremos nuestra caminata por casi 3 horas
                        hasta llegar al sitio arqueológico de LLACTAPATA tomando la ventaja de la mañana fresca antes
                        que llegue el sol, el sitio arqueológico es un hermoso lugar que se encuentra dentro de la
                        vegetación con un clima cálido y húmedo, lugar privilegiado porque desde allí se podrá apreciar
                        no solo la montaña del Machupicchu y Waynapicchu si no también la ciudadela Inca de Machupicchu,
                        hermosa vista que quedará para el recuerdo, seguidamente continuaremos nuestra aventura
                        descendiendo hacia el valle del AOBAMBA donde tomaremos el almuerzo también este lugar es
                        espectacular por tener caídas de agua o cascadas y agua fresca para tomar un baño, luego del
                        almuerzo caminaremos por un aproximado de 40 minutos hacia el poblado de <strong>
                            HIDROELÉCTRICA,</strong> de
                        donde tomaremos un camino a lo largo de la línea férrea por 3 horas hasta llegar al pueblo de
                        <strong>AGUAS CALIENTES,</strong> aquí nos espera una cena en un confortable restaurante y la
                        última noche en un
                        hostal.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 05:</fuerte>
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
                        Machupicchu, se les recomienda bajar a aguas calientes para el almuerzo puesto que hay mas
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
                                    &check; Transporte turístico Cusco- Challa cancha <br>
                                    &check; Tren turístico Aguas Calientes – Machupicchu <br>
                                    &check; Transporte turístico Ollantaytambo – Cusco <br>
                                    &check; 1 vía de bus turístico Aguas Calientes – Machupicchu <br>
                                    &check; Tickets de ingreso a Mollepata, ruta Salkantay y Machupicchu <br>
                                    &check; 4 desayunos, 4 almuerzos, 4 cenas, 3 horas de té (opción vegetariana) <br>
                                    &check; Snacks <br>
                                    &check; Guía profesional bilingüe <br>
                                    &check; Cocinero profesional <br>
                                    &check; Equipo de campamento (carpa y colchoneta) <br>
                                    &check; Arriero o conductor de los caballos <br>
                                    &check; Caballo (7 kilos por persona) <br>
                                    &check; Caballo (para todo el equipo de campamento y cocina) <br>
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
                                    &#10008; 2do ticket de bus turístico (Machupicchu- aguas calientes) opcional.<br>
                                    &#10008; Bolsas para dormir<br>
                                    &#10008; Costo de actividades extra<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/tour-salkantay-5-dias"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 500.00 <i
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
                            <a href="{{ asset('img/galeria/salkantay-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-tour.jpg') }}"
                                    alt="Tour de Salkantay">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/salkantay-adventure.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-adventure.jpg') }}"
                                    alt="Salkantay tour">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/salkantay-tour-trek.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-tour-trek.jpg') }}"
                                    alt="Salkantay 5 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/salkantay-trek.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-trek.jpg') }}"
                                    alt="salkantay a machu picchu">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/salkantay-start-trek.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-start-trek.jpg') }}"
                                    alt="machu picchu por salkantay">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!----Similar responsive--------->
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
