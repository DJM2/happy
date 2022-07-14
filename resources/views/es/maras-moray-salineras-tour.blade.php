<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Tour en Maras, Moray & Salineras Cusco | Travel Agency Perú</title>
    <meta name="description"
        content="Tour a las SALINERAS DE MARAS y el sitio arqueológico de experimentación agrícola de MORAY, un
    interesante y divertido recorrido de medio día">
    <meta name="keywords"
        content="Cusco, Tour Maras, Tour Moray, Valle Sagrado, Valle Sagrado de los Incas, Inca Tours, Tours Exclusivos en Valle Sagrado, Salineras, Tour Exclusivo Moray">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tour en Maras, Moray & Salineras Cusco | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/galeria/tour-en-maras-moray.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/maras-moray-salineras-tour">
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
        @include('layouts.spanish-tours')
        <li class="has-children">
            <idioma><a><span class="icon-language"></span> Español</a></idioma>
            <ul class="dropdown arrow-top" style="width: 120px">
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('maras-moray-salt-mines') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('maras-moray-e-salineras') }}'">Portugués</button>
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
                <?php $titulo = 'Maras, Moray y Salineras';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Maras - Moray &nbsp;&nbsp;
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
    <div class="maras"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tour en Maras, Moray</o>
                <m>& Salineras</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="perurail-valle-sagrado-tour">
                            <p>Peru Rail y Valle Sagrado </p>
                        </a>
                        <a href="tour-happy-experience">
                            <p>Tour Exclusivo Happy Experience</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray y Salineras</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo y Machu picchu</p>
                        </a>
                        <a href="valle-sagrado-full-day">
                            <p>Valle Sagrado full day</p>
                        </a>
                        <a href="vinicunca-tour">
                            <p>Vinicunca: Montaña de Colores</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Tour Qeswachaca</p>
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
                                <td>6 horas</td>
                                <td>$60.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Vista General:</h5>
                    <p class="p-tours">
                        Tour a las SALINERAS DE MARAS y el sitio arqueológico de experimentación agrícola de MORAY, un
                        interesante y divertido recorrido de medio día que te llevará a conocer una de las mejores
                        construcciones de experimentación agrícola del tiempo de los incas, la forma que ellos dominaron
                        los diferentes climas para la adaptación de los productos alimenticios; las minas de sal de
                        MARAS, es un manantial salado caliente en la cabeza del valle. Aunque los Incas construyeron las
                        minas hace unos 2.000 años, el método de cosecha aún no ha cambiado mucho.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>

                    <p class="p-tours">
                        Tour a las SALINERAS DE MARAS y el sitio arqueológico de experimentación agrícola de<strong>
                            MORAY,</strong> un
                        interesante y divertido recorrido de medio día que te llevará a conocer una de las mejores
                        construcciones de experimentación agrícola del tiempo de los incas, la forma que ellos dominaron
                        los diferentes climas para la adaptación de los productos alimenticios; las minas de sal de
                        <strong> MARAS,</strong> es un manantial salado caliente en la cabeza del valle. Aunque los
                        Incas construyeron las
                        minas hace unos 2.000 años, el método de cosecha aún no ha cambiado mucho.
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
                                    &check; Transporte turístico<br>
                                    &check; Guía profesional de turismo bilingüe <br>
                                    &check; Almuerzo buffet
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
                                    &#10008; Boleto turístico Cusco<br>
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
                                        Notas Importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Daily departures.<br>
                                    &#10034; Children under 0-2 years do not pay as long as they go in the parents'
                                    lap.<br>
                                    &#10034; Children under 3-16 years have a special discount.<br>
                                    &#10034; Prices are per person and are expressed in (US $) US dollars.<br>
                                    &#10034; Prices do not include IGV (18%).<br>
                                    &#10034; The tour service is group.<br>
                                    &#10034; Once the reservation has been accepted, the passenger must send a copy of
                                    their passport or identity card by email.<br>
                                    &#10034; To finalize your reservation we request payment of 40%.
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/maras-moray-salineras-tour"
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
                            <a href="{{ asset('img/galeria/tour-en-maras-moray.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/tour-en-maras-moray.webp') }}"
                                    alt="Maras moray tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-maras.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-maras.webp') }}"
                                    alt="Sacred Valley of the Incas" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/pueblo-de-cuyes.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/pueblo-de-cuyes.webp') }}"
                                    alt="Pueblo de cuyes Chinchero" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-maras-extraccion-de-sal.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-maras-extraccion-de-sal.webp') }}"
                                    alt="Maras moray Sacred Valley" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-moray-andenes.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-moray-andenes.webp') }}"
                                    alt="Tour Sacred Valley of the incas" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-moray.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-moray.webp') }}"
                                    alt="Tour in Moray Sacred Valley" loading="lazy">
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
