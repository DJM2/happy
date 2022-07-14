<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Cusco classic City tour | Travel Agency Perú</title>
    <meta name="description" content="Full day city tour in Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay">
    <meta name="keywords"
        content="Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay, city tour cusco, city tour, city tour peru, amazing city tour, visit sacsayhuaman, sacsayhuaman">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Happy Perú Tours | Travel Agency Perú" />
    <meta property:="ogdescription"
        content="Full day city tour in Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay" />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/en/cusco-city-tour">
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

    @include('layouts.english')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> English</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('city-tour-castellano') }}'">Español</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('city-tour-portugues') }}'">Portugués</button></li>
        </ul>
    </li>
    </ul>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-tours">
                <?php $titulo = 'Cusco City Tour';echo $titulo; ?>
            </h1>

            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i><?php $precio = 50;
                echo $precio; ?>.00
            </p>
            @if (session()->has('flash'))
                <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-center">Your message was sent successfully, we will reply as soon as possible
                        possible.
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
            <h2 class="h2-happy">Cusco City Tour</h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour</p>
                        </a>
                        <a href="humantay-lake-tour">
                            <p>Humantay Lake Tour</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="sacred-valley-2-days">
                            <p>Sacred Valley 2 days</p>
                        </a>
                        <a href="salkantay-trek-4-days-tour">
                            <p>Salkantay Trek 4 days</p>
                        </a>
                        <a href="rainbow-mountain-tour">
                            <p>Rainbow Mountain tour</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras - Moray tour</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Easy</td>
                                <td>4 hours</td>
                                <td>$50.00 per adult</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        <fuerte>UNESCO</fuerte> has declared Cusco as a world heritage center in 1983, for it is
                        beauty, history with Inca
                        arqueoligical sites, colonial and vice regal constructions, this tour will be the best way to
                        start to know Cusco city located in the heart of the Andes it is rich in culture and traditions,
                        during the tour we will be connected with its pass also considered a living museum. To do this
                        tour is not necessarily good physical condition, this is recommended to get good acclimatization
                        before doing a trek.
                    <p>
                    <h5> Itinerary:</h5>
                    <p class="p-tours">
                        Pick up in the hotel is at 13:00 hours , we will star the tour in the <fuerte> QORICANCHA
                        </fuerte> temple or
                        temple of the SUN, this temple was the most important one in time of Incas, we will walk around
                        this sacred place for about 40 minutes approximately, visiting each temple like the temple of
                        the SUN temple of the STARS, temple of the MOOM and the temple of the lightning. Your guide will
                        explain about the importance and functions of each temple in the pass afterwards we will
                        continue to the Inca complex of SACSAYHUAMAN where we will walk around it for 45 minutes this
                        Inca site is considered as one of the biggest and very important Inca sites of Cusco. In this
                        place every 24 of June is performed the festivity of the sun called INTI RAYMI later we go to
                        three more Inca sites like <fuerte> QENQO, PUCAPUKARA AND TAMBOMACHAY </fuerte>each of them will
                        be visited for
                        about 40 minutes all of them with the same importance and clearly religious functions for the
                        Incas. Finally, we will return to the city to visit the Cathedral of Cusco built in the 16th and
                        17th centuries, in the place that, during the Inca Empire, was occupied by both the Suntur Wasi
                        and the Kiswarcancha or Palace of the Inca Viracocha. Ending the tour at 6:00 pm.</p>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        It includes:
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    - Tourism transport<br>
                                    - Profesional bilingual tour guide
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
                                    - Tourist ticket Cusco<br>
                                    - Entrance ticket to the Qoricancha<br>
                                    - Entrance ticket to the Cathedral <br>
                                    - Tips

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What you need to bring
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    - Original passport <br>
                                    - Sunscreen <br>
                                    - Photographic camera <br>
                                    - Drink holder <br>
                                    - Rain poncho <br>
                                    - Alcohol gel <br>
                                    - Sun caps <br>
                                    - Extra money <br>
                                    - First-aid kit or personal medicines
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Important notes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    - Daily departures.<br>
                                    - Prices are per person and are expressed in (US $) American dollars.<br>
                                    - Prices do not include taxes (18%).<br>
                                    - Once the reservation is accepted, the passenger must send by e-mail the copy of
                                    his passport or identity card in a compulsory way.<br>
                                    - To make your reservation we request the payment of 50%.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ShareThis BEGIN -->
                    <p style="padding-top: 2em; color:#000" class="text-center">Share this</p>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://happyperutours.com/en/cusco-city-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>From:</span><i class="icon-dollar"></i> 50.00 <i
                                class="icon-info-circle price-info" data-title="Price per adult"></i></h4>
                        @include('layouts.book-ingles')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Images Gallery</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-qoricancha.webp') }}"
                                    loading="lazy" alt="City Tour Cusco">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-plaza-de-armas.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-plaza-de-armas.webp') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-sacsayhuaman.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-sacsayhuaman.webp') }}"
                                    loading="lazy" alt="Tour in Sacsayhuaman">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha-sincretismo.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-qoricancha-sincretismo.webp') }}"
                                    loading="lazy" alt="Temple of Koricancha">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-tambomachay.webp') }}"
                                    loading="lazy" alt="Tour to Tambomachay Cusco">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay-fuente.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-tambomachay-fuente.webp') }}"
                                    loading="lazy" alt="Fount of Tambomachay">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 display2">
                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour</p>
                        </a>
                        <a href="humantay-lake-tour">
                            <p>Humantay Lake Tour</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="sacred-valley-2-days">
                            <p>Sacred Valley 2 days</p>
                        </a>
                        <a href="salkantay-trek-4-days-tour">
                            <p>Salkantay Trek 4 days</p>
                        </a>
                        <a href="rainbow-mountain-tour">
                            <p>Rainbow Mountain tour</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras - Moray tour</p>
                        </a>
                        </a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.english-foot')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
