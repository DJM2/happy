<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Humantay Lake Tour | Travel Agency Perú</title>
    <meta name="description" content="HUMANTAY LAKE, nowadays considered one of the most popular natural tourist destinations, located at the foot of the snow-capped HUMANTAY.">
    <meta name="keywords" content="Cusco, Humantay lake,  tour Humantay, Humantay lake tour, Tour Humantay Lake, full day Humantay, reserve humantay lake, humantay lagoon">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Happy Perú Tours | Travel Agency Perú" />
    <meta property="og:description" content="HUMANTAY LAKE, nowadays considered one of the most popular natural tourist destinations, located at the foot of the snow-capped HUMANTAY." />
    <meta property="og:image" content="https://happyperutours.com/img/galeria/humantay-lake.jpg" />
    <link rel="canonical" href="https://happyperutours.com/en/humantaylake-tour">
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

    @include('layouts.english-tours-menu')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> English</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang" onclick="window.location.href='{{ route('laguna-humantay') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('humantay-lagoa') }}'">Portugués</button ></li>
        </ul></li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-tours">
                <?php $titulo = 'Humantay Lagoon'; echo $titulo; ?>      
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Humantay &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 100; echo $precio; ?>.00
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
    <div class="humantay"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Humantay</o> <m>Lagoon Tour</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="sacred-valley-full-day">
                            <p>Sacred Valley Full Day tour</p>
                        </a>
                        <a href="ausangate-7-lakes-tour">
                            <p>Ausangate 7 lagoons</p>
                        </a>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour Full day</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray & Salt Mines</p>
                        </a>
                        <a href="happy-experience-tour">
                            <p>Happy Experience Exclusive Tour</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Queswachaca Tour</p>
                        </a>
                        <a href="rainbow-mountain-tour">
                            <p>Vinicunca: Rainbow Mountain</p>
                        </a>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Walk Duration</th>
                                <th scope="col">Tour Duration</th>
                                <th scope="col">Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Easy</td>
                                <td>4 hours</td>
                                <td>1 day</td>
                                <td>$100.00 per adult</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        <fuerte> HUMANTAY LAKE,</fuerte> nowadays considered one of the most popular natural tourist
                        destinations, located
                        at the foot of the snow-capped HUMANTAY, at an altitude of 4200 meters above sea level. It is a
                        lagoon with turquoise waters surrounded by wonderful landscapes. During the ascent walk we will
                        have beautiful panoramic views of the area, accompanied by 2 APUS (sacred mountains) THE
                        SALKANTAY AND THE HUMANTAY.
                    <p>
                    <h5> Itinerary:</h5>
                    <p class="p-tours">
                        We start our adventure at 4:00 am with the pick up from the hotel, after 2 hours of travel by
                        car we will arrive at the town of MOLLEPATA where we will have the optional breakfast where you
                        can use the toilets and buy some snacks for the walk. Continuing our journey, we will have 1
                        hour and 30 more minutes by car to SORAYPAMPA (3900 M.S.N.M.) starting point of our walk. The
                        ascent lasts 2 hours to the lagoon, on the way we will enjoy impressive landscapes accompanied
                        by snow-capped mountains and panoramic views. Once in the place we will have free time for the
                        guide's explanation, take pictures, explore the area a little and fill ourselves with natural
                        energy that is only found in the ANDES OF PERU. Happy for our adventure in the lagoon we will
                        return to the starting point (SORAYPAMPA) with a descent of approximately 1 hour and 30 minutes,
                        we will take our tourist bus towards MOLLEPATA where we will taste a lunch to rebuild energy,
                    </p>

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
                                    &check; Tourism transport<br>
                                    &check; Profesional bilingual tour guide<br>
                                    &check; Buffet lunch<br>
                                    &check; Snacks<br>
                                    &check; Income<br>
                                    &check; First aid and oxygen
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
                                    &#10008; Breakfast<br>
                                    &#10008; Horse for the route<br>
                                    &#10008; Walking sticks<br>
                                    &#10008; Extra drinks<br>
                                    &#10008; Tips<br>
                                    &#10008; Personal medicines

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
                                    &#10034; Original passport <br>
                                    &#10034; Sunscreen <br>
                                    &#10034; Photographic camera <br>
                                    &#10034; Drink holder <br>
                                    &#10034; Rain poncho <br>
                                    &#10034; Alcohol gel <br>
                                    &#10034; Sun caps <br>
                                    &#10034; Extra money <br>
                                    &#10034; First-aid kit or personal medicines
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Important notes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Daily departures.<br>
                                    &#10034; Prices are per person and are expressed in (US $) American dollars.<br>
                                    &#10034; Prices do not include taxes (18%).<br>
                                    &#10034; Once the reservation is accepted, the passenger must send by e-mail the copy of
                                    his passport or identity card in a compulsory way.<br>
                                    &#10034; To make your reservation we request the payment of 50%.
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
                    <div class="fb-comments" data-href="https://happyperutours.com/en/humantay-lake-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>From:</span><i class="icon-dollar"></i> 100.00 <i
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
                            <a href="{{ asset('img/galeria/humantay-lake.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/humantay-lake.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-humantay-soraypampa.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-humantay-soroypampa.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-humantay-turista.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-humantay-turista.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/trekking-salkantay-arribo.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/trekking-salkantay-arribo.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-humantay-laguna.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-humantay-laguna.jpg') }}">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 display2">
                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="sacred-valley-2-days">
                            <p>Sacred Valley 2 days</p>
                        </a>
                        <a href="ausangate-7-lakes-tour">
                            <p>Ausangate 7 lagoons tour</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="inca-trail-360°-train-tour">
                            <p>Inca Rail 360° Train Tour</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Qeswachaca Tour</p>
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
