<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Tour Lima, Ica, Paracas e Islas Ballestas</title>
    <meta name="description"
        content="Este tour es una excelente alternativa para todo viajero que solo tenga unos días para conocer y disfrutar de un turismo lleno de cultura y aventura.">
    <meta name="keywords"
        content="tour lima, tour ica, tour paracas, islas ballestas, conocer lima, viajar a paracas, viajar a las islas ballestas, huacachina , tour huacachina. city tour lima, viñedo tacama, tour ica, viajar a huacachina">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tour Lima, Ica, Paracas e Islas Ballestas" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/sacred-valley-3-days-tour.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/lima-ica-paracas-3-dias">
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
                        onclick="window.location.href='{{ route('lima-paracas-3-days') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('lima-paracas-3-dias-portugues') }}'">Portugués</button>
                </li>
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
                <?php $titulo = 'Lima, Ica y Paracas';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Lima - Ica - Paracas &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 350;
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
    <div class="lima-ica-paracas"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tour Lima, Ica, Paracas &</o>
                <m>Huacachina - Islas Ballestas</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao tour 4 días</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado tour 2 días</p>
                        </a>

                        <a href="inca-trail-4-dias">
                            <p>Inca Trail a Machu Picchu 4 días</p>
                        </a>
                        <a href="tour-7-lagunas-ausangate">
                            <p>Ausangate 7 lagunas</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay Tour 5 días</p>
                        </a>

                        <a href="valle-sagrado-full-day">
                            <p>Valle Sagrado Full Day</p>
                        </a>
                        <a href="inca-trail-2-dias">
                            <p>Camino Inca 2 dias</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
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
                                <td>3 días</td>
                                <td>$350.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        Lima es la capital de la republica de Perú, conocida como la ciudad de los reyes asi lo denomino
                        Francisco Pizarro porque se funda el 18 de enero mes en el que se celebra la bajada de reyes. La
                        arquitectura colonial del Centro Histórico, exquisita gastronomía, distritos modernos y el
                        legado de culturas prehispánicas son algunas de las razones por las que <strong>Lima</strong> es
                        atractiva para
                        cualquier turista. <br><br>
                        Ica, conocida como la ciudad del eterno sol porque goza de éste durante todo el año, Ica como
                        ciudad posee construcciones coloniales que datan del siglo VIII, cuenta también con un área
                        extensa de desierto costero donde se encuentra el oasis de la Huacachina.<br>
                        Paracas, es un balneario, una bahía, y también es un distrito donde hay dos <strong>Áreas
                            Naturales
                            Protegidas: La Reserva Nacional de Paracas y las Islas Ballestas.</strong><br><br>
                        Este tour es una excelente alternativa para todo viajero que solo tenga unos días para conocer y
                        disfrutar de un turismo lleno de cultura, historia combinado con aventura. Es así que Happy Perú
                        Tours les brinda este servicio donde podrá recorrer los famosos viñedos (elabora los vinos
                        peruanos), aventura en el desierto de la Huacachina, paseo por las islas ballestas y completar
                        el recorrido con las visitas a los museos más importantes de la ciudad de lima y la zona más
                        visitada por los turistas.

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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>1 día</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">ICA - HUACACHINA</h5>
                    <p class="p-tours">
                        El recojo se realiza muy temprano desde el hotel tomamos la ruta de la panamericana sur rumbo a
                        Ica, 15 minutos antes de llegar a la ciudad hacemos una parada en el viñedo TACAMA, para
                        realizar el tour del vino en este lugar se tendrá el amuerzo, seguidamente nos dirigimos hacia
                        el hotel en la ciudad de Ica después de realizar un pequeño descanso continuaremos el recorrido
                        visitando el desierto de la Huacachina, donde practicaremos el sand boarding y buggies. Se
                        tendrá también un tiempo libre para disfrutar del atardecer o sunset en el desierto.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>1 día</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">ISLAS BALLESTAS</h5>
                    <p class="p-tours">
                        Este día también iniciamos muy temprano con el recojo del hotel, para dirigirnos hacia Paracas
                        precisamente al muelle desde donde partiremos en bote a visitar las islas ballestas, el
                        recorrido tiene una duración de 2 horas aproximadamente donde apreciaremos a los animales más
                        representativos como lobos marinos, pingüinos de Humbolt, leones marinos, pelicanos y aves
                        huaneras. Durante el trayecto tambien podremos apreciar el famoso CANDELABRO, luego del almuerzo
                        continuaremos el retorno hacia la ciudad de Lima, una vez en la ciudad nos dirigimos a visitar
                        el maravilloso parque de las aguas en sus funciones con danzas típicas del Perú, retornando al
                        hotel aproximadamente 8:00pm.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>1 Día</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                    <h5 class="h5-tours">LIMA</h5>
                    Iniciaremos nuestro tour alrededor de las 9:00 am con la visita al Museo Larco, museo de arte pre-
                    colombino donde se exhibe galerías que muestran los 5000 años de desarrollo de la historia del Perú.
                    Seguidamente llegaremos al museo convento de San francisco y catacumbas ubicado en el casco
                    monumental, considerado uno de los museos religiosos más implementados llamando la atención de
                    muchos turistas las famosas catacumbas. Finalmente recorreremos el boulevard de barranco, una
                    caminata por lugares tranquilos y llenos de historia, barrios tradicionales, y las calles del barrio
                    de Miraflores. Terminamos el tour aproximadamente 5:00 pm.
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
                                    &check; Transporte turístico Lima – Ica – Paracas – Lima <br>
                                    &check; Guía oficial de turismo<br>
                                    &check; Tickets de ingreso a los diversos lugares<br>
                                    &check; Sand boarding <br>
                                    &check; Buggies <br>
                                    &check; Bote o Lanchas para el recorrido<br>
                                    &check; Hotel en Ica y Lima<br>
                                    &check; Snacks

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
                                    &#10008; Alimentación <br>
                                    &#10008; Bebidas extras <br>
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
                                    &#10034; Polos y pantalones extra <br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Gorras para el sol <br>
                                    &#10034; Dinero extra <br>
                                    &#10034; Artículos Personales <br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/lima-ica-paracas-3-dias"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 350.00 <i
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
                            <a href="{{ asset('img/galeria/huacachina-ica-peru.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/huacachina-ica-peru.webp') }}"
                                    alt="Tour a Huacachina ICa Peru" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lima-tour-peru.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/lima-tour-peru.webp') }}"
                                    alt="Ciudad de reyes Lima" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lobo-marino-paracas-peru.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/paracas-tour-happy-peru.webp') }}"
                                    alt="Sea lion in Paracas" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao tour 4 días</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado tour 2 días</p>
                        </a>

                        <a href="inca-trail-4-dias">
                            <p>Inca Trail a Machu Picchu 4 días</p>
                        </a>
                        <a href="tour-7-lagunas-ausangate">
                            <p>Ausangate 7 lagunas</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay Tour 5 días</p>
                        </a>

                        <a href="valle-sagrado-full-day">
                            <p>Valle Sagrado Full Day</p>
                        </a>
                        <a href="inca-trail-2-dias">
                            <p>Camin Inca 2 dias</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
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
