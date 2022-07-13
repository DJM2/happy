<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Caminata a Lares, Tour de 4 days Cusco, Perú | Travel Agency Perú</title>
    <meta name="description"
        content="Es una buena alternativa para poder llegar a Machu Picchu si bien es cierto el valle de Lares es muy extenso esto hace que haya distintas rutas">
    <meta name="keywords"
        content="Cusco tour, Tour Lares 4 dias, lares tour, Pucapucara, Tambomachay, Tour exclusivo en Lares, caminata Lares, caminata machu picchu, tour en lares, lares 4 dias">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Caminata a Lares, Tour de 4 days Cusco, Perú | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/galeria/lares-tour-4-days.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/caminata-lares-4-dias">
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
                        onclick="window.location.href='{{ route('lares-trek-4-days') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('lares-trekking-4-dias') }}'">Portugués</button></li>
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
                <?php $titulo = 'Caminata a Lares 4 días';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Lares &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 600;
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
                <o>Caminata a Lares</o>
                <m> 4 días, 3 noches</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="perurail-valle-sagrado-tour">
                            <p>Peru Rail y Valle Sagrado</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo y Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray y Salineras</p>
                        </a>
                        <a href="tour-salkantay-4-dias">
                            <p>Salkantay 4 dias</p>
                        </a>
                        <a href="vinicunca-tour">
                            <p>Vinicunca: Montaña de Colores</p>
                        </a>
                        <a href="inca-trail-4-dias">
                            <p>Camino Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="valle-sagrado-3-dias">
                            <p>Valle Sagrado Tour 3 días</p>
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
                                <td>$600.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Es una buena alternativa para poder llegar a <strong> Machu Picchu</strong> si bien es cierto el
                        valle de Lares es
                        muy extenso esto hace que haya distintas rutas que nos conducirán a un solo objetivo el valle
                        sagrado de los incas. La ruta que ofrecemos nos mostrará la belleza de los Andes Peruanos, su
                        gente andina, costumbres y tradiciones que van pasando de generación en generación; es una ruta
                        de senderismo que inicia con los baños termales muy conocidos, luego atravesaremos partes altas
                        de los andes hermosas vistas de maravillosos paisajes que nos acompañarán durante el recorrido,
                        la caminata no es muy concurrida como el camino inca pero se disfruta de la misma manera porque
                        podremos estar en contacto con la naturaleza y sus pueblos nativos, observaremos una variedad de
                        flora, fauna salvaje y doméstica, para luego llegar al valle sagrado de los incas y finalmente
                        conectarnos hacia Machupicchu.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>
                    <p class="p-tours text-center">
                        <fuerte>Día 01:</fuerte>
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
                                <td>4 horas</td>
                                <td>10 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Este día iniciaremos con el recojo del hotel a las 5:00 am, abordaremos el bus turístico privado
                        para dirigirnos hacia la localidad de LARES donde se encuentran los BAÑOS TERMALES, con un
                        tiempo de recorrido aproximado de 3 horas; durante el trayecto pasaremos por una parte del valle
                        sagrado teniendo vistas impresionantes de los nevados que protegen nuestro valle y que son parte
                        de la Cordillera de los Andes, al llegar a los baños termales denominados también termo-
                        medicinales por estar compuesto por aguas volcánicas y otros minerales, mucha gente de lugar
                        acude a estos baños para tratar problemas con los hueso, el estrés, enfermedades reumáticas y
                        otros, luego nos alistamos para continuar nuestra aventura esta vez volveremos a tomar el bus
                        para conducirnos hacia el lugar de inicio de nuestro trekking ubicado a pie de la carretera
                        (3050 m.s.n.m.) será también el punto de encuentro con el arriero y los caballos que nos
                        apoyaran con todo el equipo de campamento, después de 2 horas y media de caminata ascendente
                        arribaremos al pueblo de KISWARANI, donde nos espera el primer almuerzo, esta zona por la altura
                        a la que se encuentra es conocida como la zona del cultivo de papa, durante el trayecto el guía
                        les irá mostrando el modus vivendus de la población y sus actividades cotidianas como la forma
                        de cultivo de la papa orgánica. Luego de un riquísimo almuerzo los arrieros o llameros nos darán
                        una pequeña explicación acerca de la crianza de sus llamas o alpacas consideradas sagradas en el
                        tiempo de los incas, continuando nuestro recorrido haremos una caminata de 2 horas
                        aproximadamente hasta nuestro lugar de campamento donde nuestro equipo nos espera con las
                        tiendas listas, bebidas calientes y posteriormente la cena.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>Día 02:</fuerte>
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
                                <td>8 horas</td>
                                <td>14 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        El despierto será muy temprano con un tradicional té de coca para preparar nuestro cuerpo para
                        altura, con los primeros rayos de sol veremos a la gente local alistándose para su día cotidiano
                        como es pastoreo de sus animales, una vez finalizado el desayuno tendremos unos minutos para
                        alistar nuestras cosas personales y proveernos de agua hervida y algunos snacks para el camino,
                        iniciaremos con ascenso en forma de zigzag de 4 horas aproximadamente hasta llegar a la parte
                        más alta del viaje llamado el PASO DEL CÓNDOR o PASO DE PACHACUTEC (4670 m.s.n.m.) llegado a
                        este punto la vista será impresionante divisamos alpacas, llamas, lagunas o lagos naturales,
                        estaremos rodeados de los picos más altos de las montañas y nevados como el PITUSIRAY (5700
                        m.s.n.m) antes de iniciar el descenso disfrutaremos de una bebida caliente, después de 1 hora de
                        descenso tendremos el almuerzo para luego continuar por 3 horas más de descenso y poder arribar
                        a nuestro campamento llamado CANCHA CANCHA (3750m.s.n.m.), es uno de los pueblos donde todavía
                        no llega la tecnología por tal razón todavía sus pobladores practican costumbres incas como en
                        la construcción de sus viviendas utilizando la piedra, invitamos a todos ustedes a llevar apoyo
                        como útiles escolares para los niños de la zona pues se disfrutará momentos para compartir con
                        ellos. Visitaremos una de las viviendas locales para conocer la forma de crianza de los cuyes y
                        aprender un poco de su textilería tradicional.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>Día 03:</fuerte>
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
                                <td>4 horas</td>
                                <td>9 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Este día será un tanto diferente, pero de igual manera se iniciará con el té de coca tradicional
                        de despierto y luego de un delicioso desayuno comenzaremos la aventura del día, descenderemos
                        por un tiempo de 4 horas hasta llegar al punto final del recorrido llamado HUARAN
                        (2700m.s.n.m.), a medida del descenso podremos sentir el cambio de temperatura gracias a los
                        microclimas de la zona, de la misma manera las zonas de cultivo irán cambiando puesto que ya se
                        podrán apreciar otros productos de cultivo como maíz, quinua, kiwicha, frutas como el durazno,
                        palta o aguacate, nísperos y otros. HUARAN será el punto de despedida con el arriero y cocinero
                        que nos acompañaron durante el trayecto, luego de una ceremonia de gratitud y apreciación
                        abordaremos nuestro bus turístico que nos llevará hasta el pueblo de Ollantaytambo, aquí
                        tendremos un tiempo para visitar las qolqas o graneros del tiempo de los incas, disfrutaremos un
                        momento por los alrededores del pueblo conocido como PUEBLO INCA VIVIENTE, luego de una cena en
                        un restaurante local nos dirigiremos hacia la estación de tren para abordar el tren que nos
                        llevará a Machupicchu; teniendo nuestra última noche en un confortable hotel.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>Día 04:</fuerte>
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
                                    &check; Transporte turístico Cusco- Baños termales - Kiswarani<br>
                                    &check; Transporte turístico Huarán- Ollantaytambo<br>
                                    &check; Ticket de tren turístico Ollantaytambo – Aguas Calientes – Ollantaytambo<br>
                                    &check; 1 vía de bus turístico aguas calientes – Machupicchu<br>
                                    &check; Tickets de ingreso a baños termales y lares<br>
                                    &check; 3 desayunos, 4 almuerzos, 3 cenas, 3 horas de té (opción vegetariana)<br>
                                    &check; Guía profesional bilingüe<br>
                                    &check; Cocinero profesional<br>
                                    &check; Agua hervida 3 mañanas<br>
                                    &check; Snacks<br>
                                    &check; Equipo de campamento (carpa y colchoneta)<br>
                                    &check; Arriero o conductor de los caballos<br>
                                    &check; Caballo (7 kilos por persona)<br>
                                    &check; Caballo (para todo el equipo de campamento y cocina)<br>
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
                                        No Incluye:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Primer desayuno <br>
                                    &#10008; Ultimo almuerzo <br>
                                    &#10008; Bebidas extras <br>
                                    &#10008; Bolsa de dormir <br>
                                    &#10008; Bastones de caminata <br>
                                    &#10008; Propinas <br>
                                    &#10008; Renta de bolsa de dormir (20 dólares) <br>
                                    &#10008; Renta de bastones de caminata (20 dólares)

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Qué necesitas llevar
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Pasaporte original<br>
                                    &#10034; Bolsa de dormir<br>
                                    &#10034; Bloqueador solar <br>
                                    &#10034; Repelente de mosquitos <br>
                                    &#10034; Snacks (chocolates, dulces, frutos secos etc.) <br>
                                    &#10034; Linterna <br>
                                    &#10034; Cámara fotográfica <br>
                                    &#10034; Baterías extras <br>
                                    &#10034; Portabebidas <br>
                                    &#10034; Poncho de lluvia <br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Bastones de caminata <br>
                                    &#10034; Ropa extra <br>
                                    &#10034; Sandalias <br>
                                    &#10034; Gorras para el sol y frío <br>
                                    &#10034; Dinero extra <br>
                                    &#10034; Botiquín o medicinas personales
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Notas Importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Salidas diarias.<br>
                                    &#10034; Los precios son por persona y están expresados en (US$) dólares
                                    americanos.<br>
                                    &#10034; Los precios no incluyen el IGV (18%). <br>
                                    &#10034; Una vez aceptada la reserva el pasajero debe enviar por e-mail la copia de
                                    su pasaporte o cédula de identidad en forma obligatoria. <br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/caminata-lares-4-dias"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 600.00 <i
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
                            <a href="{{ asset('img/galeria/lares-trek-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-trek-tour.jpg') }}"
                                    alt="lares trek tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-tour-4-days.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-tour-4-days.jpg') }}"
                                    alt="lares tour 4 days" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-a-lares.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/tour-a-lares.jpg') }}"
                                    alt="tour a lares" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-en-lares.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/tour-en-lares.jpg') }}"
                                    alt="tour en lares" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-tour-peru.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-tour-peru.jpg') }}"
                                    loading="lazy" alt="Lares tour caminata 4 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-caminata-4-dias.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-caminata-4-dias.jpg') }}"
                                    loading="lazy" alt="Caminata lares">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Tours Similares</h4>
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="inca-trail-360°-tren-tour">
                            <p>Tren Inca Rail 360°</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
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
