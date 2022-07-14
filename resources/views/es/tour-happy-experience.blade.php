<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Exclusivo Happy City Tour en Cusco | Travel Agency Perú</title>
    <meta name="description"
        content="Una vez llegado a Cusco necesitará aclimatarse, este tour será una buena opción para conocer la forma de vida de la gente local en Cusco, el tour del mercado...">
    <meta name="keywords"
        content="Cusco, tour exclusivo, cusco tour, tour, Pucapucara, Tambomachay, Exclusivo Tours en Cusco, tour en cusco, city tour cusco, city tour exclusivo en cusco">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Exclusivo Happy City Tour Cusco | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/tour-happy-experience">
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
                        onclick="window.location.href='{{ route('happy-experience-tour') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('happy-experiencia-tour') }}'">Portugués</button></li>
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
                <?php $titulo = 'Happy City Tour';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 60;
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
    <div class="traditional"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Exclusive </o>
                <m>Happy City Tour</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="huchuy-qosqo-a-machupicchu">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray y Salineras</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay trek tour 5 días</p>
                        </a>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City tour full day</p>
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
                                <td>8 horas</td>
                                <td>$60.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        <strong>HAPPY EXPERIENCE TOUR (MERCADO, CLASES DE COCINA Y EL SHOW DEL PISCO SOUR):</strong><br>

                        Una vez llegado a Cusco quizás no te sienta 100% bien, de modo que necesitarás aclimatarse y la
                        mejor forma es pasar un tiempo en Cusco sin realizar mucho esfuerzo y este tour será una buena
                        opción para conocer la forma de vida de la gente local en Cusco, el tour del mercado, clases de
                        cocina y el show del pisco sour son interesantes porque nos ofrecen cosas diferentes comparado a
                        otros tours. Este es más para estar en contacto con gente local; por ejemplo, usar el transporte
                        de servicio local y cómo ellos realizan el comercio de productos orgánicos, vegetales, frutas y
                        demás todo el día. ¡¡ no te sorprendas ¡¡ si en el camino escuchas a las vendedoras decir por
                        ejemplo “Papito lindo” “tesoro” o para las chicas “mamita linda” “Chaska ñawi” son alguna de las
                        expresiones cusqueñas cariñosas que utilizan para poder vender sus productos. “si tu n o te
                        sientes 100% hermoso o hermosa no te preocupes en los mercados de Cusco los comerciantes te
                        harán sentir hermoso y feliz.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>

                    <p class="p-tours">
                        El Guía hará el recojo del hotel a las 9:00 am para luego dirigirnos al paradero de servicio de
                        bus público más cercano, tomaremos el bus con dirección a uno de los mercados más famosos del
                        cusco VINOCANCHON el tiempo de viaje será de 30 minutos, durante la ruta el guía es el encargado
                        de explicar curiosidades del uso del transporte público, nombres de los distritos u otros
                        paraderos hasta llegar a nuestro destino. Una vez llegados al mercado nos alistamos para tener
                        experiencias únicas y muchas sorpresas que encontraremos en nuestro recorrido. Recuerden que
                        todos estos productos de primera necesidad que encontramos son orgánicos producidos en las
                        montañas y valles del Cusco, se hará el recorrido por las diferentes seccione de productos
                        debidamente clasificados; lo más interesante que veremos es la sección de comidas típicas; por
                        ejemplo: el caldo de cabeza de cordero o admiraran la cantidad de porción que sirven en un
                        plato. Continuando con el tour visitaremos las tradicionales CHICHERÍAS o bares andinos donde
                        degustaremos la tradicional cerveza de maíz más conocida como CHICHA conoceremos la forma de
                        preparación y fermentación de la misma. Seguidamente abordaremos nuestro van turístico que nos
                        llevará hacia la localidad de HUASAO “capital del curanderismo andino en Perú CHAMANES” donde
                        nos espera Mamá GENARA para darnos las clases de cocina, prepararemos una rica sopa de quinoa,
                        ají de ollucos acompañando nuestro almuerzo andino con mote con queso y su infaltable CHICHA
                        MORADA bebida refrescante que no contiene alcohol. tendremos la oportunidad de ver la crianza de
                        cuyes y quizás poder alimentarlos. Finalmente viene lo más esperado EL SHOW DEL PISCO SOUR
                        (bebida nacional del Perú) conoceremos sus ingredientes y aprenderemos a preparar; después de un
                        brindis por este día de experiencias inolvidables retornaremos a Cusco arribando al hotel
                        aproximadamente a las 5:00 pm.
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
                                    &check; Guía profesional<br>
                                    &check; Tickets de transporte público <br>
                                    &check; Transporte turístico <br>
                                    &check; Degustación de la CHICHA <br>
                                    &check; Almuerzo andino <br>
                                    &check; Pisco sour
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
                                    &#10008; Compras en el mercado<br>
                                    &#10008; Propinas o gratitudes

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
                                    &#10034; Bloqueador solar <br>
                                    &#10034; Cámara fotográfica<br>
                                    &#10034; Portabebidas <br>
                                    &#10034; Poncho de lluvia<br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Gorras para el sol
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/tour-happy-experience"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 60.00 <i
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
                            <a href="{{ asset('img/galeria/happy-cusco-exclusive.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-cusco-exclusive.webp') }}"
                                    alt="Happy Experience Tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-cusco-experience.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/happy-cusco-experience.webp') }}"
                                    alt="Happy Cusco Tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-cusco-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-cusco-tour.webp') }}"
                                    alt="Cusco City Tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-experience.webp') }}"
                                    alt="Tour around Cusco Happy Peru" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience-cusco.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/happy-experience-cusco.webp') }}" loading="lazy"
                                    alt="Travel TO Cusco">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/happy-experience-tour.webp') }}" loading="lazy"
                                    alt="Gastronomy tour Cusco">
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
                        <a href="">
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
