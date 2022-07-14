<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Waqrapucara full day tour | Travel Agency Perú</title>
    <meta name="description"
        content="Whose Quechua terms mean 'fortress in the form of horns', it is a new adventure route to discover a new Inca archaeological site">
    <meta name="keywords"
        content="Cusco, waqrapucara tour, waqrapucara trek, trek to waqrapucara, visit waqrapucara, visit waqrapucara tour, tours to waqrapucara">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Waqrapucara full day tour | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/waqra-pukara-happy-peru-tours.jpg" />
    <link rel="canonical" href="https://happyperutours.com/en/waqrapukara-full-day-tour">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('waqrapukara-tour-castellano') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('waqrapukara-full-day') }}'">Portugués</button ></li>
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
                <?php $titulo = 'Waqrapukara'; echo $titulo; ?>          
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Waqrapukara &nbsp;&nbsp;
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
    <div class="waqra"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Waqrapukara</o>
                <m>Full day tour</m>
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
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4 days tour</p>
                        </a>
                        <a href="humantay-lake-tour">
                            <p>Humantay Lake</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="inca-trail-4-days">
                            <p>Inca Trail To Machu Picchu 4 days</p>
                        </a>
                        <a href="sacred-valley-full-day">
                            <p>Sacred Valley Full day</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray & Salt Mines</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Qeswachaca Tour</p>
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
                                <td>Moderate</td>
                                <td>1 day</td>
                                <td>$100.00 per adult</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Overview:</h5>
                    <p class="p-tours">
                        Whose Quechua terms mean "fortress in the form of horns", it is a new adventure route to
                        discover a new Inca archaeological site, mainly for religious use; located in a magnificent
                        valley of rocks with an impressive view of the Apurímac Canyon, where one of the most important
                        rivers of Cusco called APURIMAC runs.
                    </p><br>
                    <h5 class="h5-tours"> Itinerary:</h5>
                 
                    <p class="p-tours">
                        The pick up from the hotel will be at 4:30 am, we will take the southern route of the city of
                        Cusco and after 2 hours by bus we will arrive at SANGARARA, here we will have breakfast; We will
                        continue for about 30 minutes to the town of PITUMARCA, then we go to PUNTA CARRETERA or parking
                        area there we will begin our adventure; During the journey we will observe some domestic and
                        wild animals of our Sierra Cusqueña, we will also enjoy some small lagoons of natural formation
                        by rainwater; The walk is done through flat terrain and then descend and arrive at WAQRAPUKARA
                        (4300 m.a.s.l.), the estimated walking time is 3 hours. Once in the place we will have enough
                        time to explore and take pictures of the archaeological site made up of two important sectors,
                        the religious or ceremonial and the agricultural, after also enjoying our box lunch we will
                        begin the return along the same path to PITUMARCA where the bus awaits us to return to Cusco.
                        Arriving in the city at 7:00 p.m. to the hotel.
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
                                    &check; Tourist transport Cusco<br>
                                    &check; Professional bilingual tour guide<br>
                                    &check; Buffet breakfast <br>
                                    &check; Buffet lunch <br>
                                    &check; Login <br>
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
                                    &#10008; Walking sticks <br>
                                    &#10008; Extra drinks <br>
                                    &#10008; Tips
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
                                    &#10034; Sunscreen<br>
                                    &#10034; Photographic camera<br>
                                    &#10034; Drink holder<br>
                                    &#10034; Rain poncho<br>
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
                                    &#10034; Prices do not include VAT (18%).<br>
                                    &#10034; Once the reservation is accepted, the passenger must send by e-mail the
                                    copy of his
                                    passport or identity card in a compulsory way.<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/en/waqrapukara-full-day"
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
                            <a href="{{ asset('img/galeria/trek-to-waqrapucara.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/trek-to-waqrapucara.webp') }}"
                                    alt="trek to waqrapukara" loading="lazy">  
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapucara-full-day-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapucara-full-day-tour.webp') }}"
                                    alt="waqrapukara full day" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-cusco-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapukara-cusco-tour.webp') }}"
                                    alt="waqrapukara tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-happy-peru.webp') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapukara-happy-peru.webp') }}"
                                    alt="tour to waqrapukara" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-tour.webp') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/waqrapukara-tour.webp') }}"
                                    alt="waqrapukara cusco tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/waqrapukara-tour-full-day.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/waqrapukara-tour-full-day.webp') }}"
                                    alt="waqrapukara tour full day" loading="lazy">
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
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4 days tour</p>
                        </a>
                        <a href="humantay-lake-tour">
                            <p>Humantay Lake</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="inca-trail-4-days">
                            <p>Inca Trail To Machu Picchu 4 days</p>
                        </a>
                        <a href="salkantay-trek-tour-5-days">
                            <p>Salkantay Trek 2 days</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>maras, Moray & Salineras</p>
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
