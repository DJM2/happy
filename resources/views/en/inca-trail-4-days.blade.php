<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Inca Trail 4 days trek tour | Travel Agency Perú</title>
    <meta name="description"
        content="The Inca trail 4 days to Machupicchu considered one of the most beautiful in America, where you can enjoy unforgettable experiences, breathtaking views.">
    <meta name="keywords"
        content="Cusco, Inca trail, inca trek, inca trail  4 days, 4 days inca trail, inca trail to Machu Picchu, Machu Picchu tour, Machu Picchu trek, trek to Machu Picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Inca Trail 4 days trek tour | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/turistas-camino-inca.jpg" />
    <link rel="canonical" href="https://happyperutours.com/en/inca-trail-4-days">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('inca-trail-4-dias-tour') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('trilha-inca-4-dias') }}'">Portugués</button ></li>
        </ul></li>
    </ul>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-pages">
                <?php $titulo = 'Inca trail 4 days'; echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 650; echo $precio; ?>.00
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
    <div class="machu"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Inca trail to Machu  </o>
                <m>Picchu,  4 days trek</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="happy-experience-tour">
                            <p>Happy Experience Tour</p>
                        </a>
                        <a href="hiram-binghan-train-tour">
                            <p>Hiram Binghan train tour</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle to Machu Picchu</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="salkantay-trek-tour-5-days">
                            <p>Salkantay teek 5 days</p>
                        </a>
                        <a href="sacred-valley-2-days">
                            <p>Sacred Valley of the Incas</p>
                        </a>
                        <a href="inca-rail-first-class">
                            <p>First Class Train Tour</p>
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
                                <td>4 days</td>
                                <td>$650.00 per adult</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="h5-tours">Overview:</h5>
                    <p class="p-tours">
                        The Inca trail 4 days to Machupicchu considered one of the most beautiful in America, where you
                        can enjoy unforgettable experiences, breathtaking views of the Cusco mountain range, of our
                        famous Verónica snow-capped mountain, being at the top of a mountain over 4200 meters 13779 feet
                        Continue the road through a forest jungle covered with varied flora and fauna, finding important
                        Inca archaeological sites of different functions, especially religious. This Inca road also
                        called the sacred road to the Inca citadel of Machupicchu.
                    </p><br>
                    <h5 class="h5-tours"> Itinerary:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DAY 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderate</td>
                                <td>7 hours</td>
                                <td>12 km / 3.2 miles</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="p-tours">
                        We leave the city of Cusco very early at 5:00 am, before arriving at the starting point of our
                        walk at km 82 or PISCAKUCHO we will make a stop in the town of Ollantaytambo for breakfast, km
                        82 is also the place where we will find the rest of the team that will accompany us during the
                        Trek, after organizing everything we will start our adventure passing through a checkpoint where
                        we will present all the mandatory documents to use the Inca trail network.<br>

                        After 3 and a half hours of walking we will arrive at the TARAYOC sector, there we will have
                        lunch. Then we will continue ascending to our campsite called YUNCACHIMPA (3150m.sn.m) from
                        where we will have a view of the VERONICA snow-capped mountain.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DAY 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Difficult</td>
                                <td>9 hours</td>
                                <td>15 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        The awakening will be with a traditional coca tea at 5:00 am, after breakfast at approximately
                        6:30 am we leave the camp to continue the ascent to the highest part of our route "ABRA DE
                        WARMIWAÑUSCA" 4200 m.a.s.l. From there we will immediately descend to the lunch place called
                        PACAYMAYO, a beautiful ravine through which the river of the same name runs, after tasting lunch
                        we will ascend to 3900 m.a.s.l. “RUNKURACAY PASS” where in the middle of the mountain we will
                        find the archaeological site of RUNKURACAY, the pass of the same name is known as the place of
                        offerings where travelers have the opportunity to connect with the mountains by making an
                        offering together with their guide. of coca leaves, stones and a lot of faith. After one hour of
                        descent we will arrive at our first archaeological site SAYACMARCA after the visit we will
                        continue to our second camp CHAKICOCHA (3650 m.a.s.l.) arriving at approximately 5:00 pm.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DAY 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Light</td>
                                <td>5 hours</td>
                                <td>10 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Considered the most beautiful day of the entire route, we will start the walk at 7:00 am, this
                        day we will have the opportunity to walk through the forest jungle that is why the beauty of
                        this day because we will observe a variety of birds, mammals, insects, butterflies if we are
                        lucky we could even meet the famous spectacled bear representative of our Inca trail. We can
                        also enjoy a variety of flora including the most beautiful orchids and archaeological sites such
                        as PHUYUPATAMARCA (3950 m.a.s.l.), for lunch we will arrive at WIÑAYWAYNA (2650 m.a.s.l.) it
                        will also be the last camp, after lunch we will have a visit to the archaeological site of
                        wiñaywayna and the rest of the afternoon free to recharge our batteries for our last day of
                        Trek.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DAY 04:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificulty</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Distance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Light</td>
                                <td>2 hours</td>
                                <td>5 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        The awakening will be very early at 3:30 am, after breakfast and using the flashlights we will
                        start the walk through the last part of the Inca trail, an hour later we will arrive at INTI
                        PUNKU "PUERTA DEL SOL" from where we will have a impressive view of MACHUPICCHU (2400 m.a.s.l.)
                        and the first rays of the sun. Finally, we will descend for an hour to the same citadel, we will
                        go to the checkpoint to organize, leave our backpacks and re-enter Machupicchu for the guided
                        tour.<br>
                        In the afternoon the return will be by train to Ollantaytambo then bus to the city of Cusco
                        arriving at the hotel at approximately 8:30 pm.
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
                                    &check; Pick up from the hotel <br>
                                    &check; Transportation Cusco- kilometer 82<br>
                                    &check; Transportation Ollantaytambo – Cusco<br>
                                    &check; Entrance tickets to the Inca Trail and Machupicchu<br>
                                    &check; Tourist bus ticket to descend to Aguas Calientes<br>
                                    &check; 4 breakfasts, 3 lunches, 3 dinners, 3 hours of tea (vegetarian option)<br>
                                    &check; Snacks<br>
                                    &check; Professional bilingual guide<br>
                                    &check; Professional cook<br>
                                    &check; Camping equipment (tent and mat)<br>
                                    &check; Carrier (7 kilos per person)<br>
                                    &check; Porter (for all camping and kitchen equipment)<br>
                                    &check; First aid kit<br>
                                    &check; Oxygen<br>
                                    &check; Alcohol and Gel disinfectants part of the biosafety protocol
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
                                    &#10008; First breakfast<br>
                                    &#10008; Last lunch<br>
                                    &#10008; Extra drinks<br>
                                    &#10008; Sleeping bag<br>
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
                                    &#10034; Original passport<br>
                                    &#10034; Sleeping bag<br>
                                    &#10034; Sunscreen<br>
                                    &#10034; Mosquito repellent<br>
                                    &#10034; Snacks (chocolates, sweets, nuts etc.) <br>
                                    &#10034; Flashlight <br>
                                    &#10034; Photographic camera <br>
                                    &#10034; Extra batteries <br>
                                    &#10034; Drink holder <br>
                                    &#10034; Rain poncho <br>
                                    &#10034; Alcohol gel <br>
                                    &#10034; Walking poles <br>
                                    &#10034; Extra clothes <br>
                                    &#10034; Sandals <br>
                                    &#10034; Caps for the sun and cold <br>
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
                                    copy of his passport or identity card in a compulsory way.<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/en/inca-trail-4-days"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>From:</span><i class="icon-dollar"></i> 650.00 <i
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
                        <a href="happy-experience-tour">
                            <p>Happy Experience Tourr</p>
                        </a>
                        <a href="hiram-binghan-train-tour">
                            <p>Hiram Binghan train tour</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="choquequirao-4-days-tour">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="salkantay-trek-tour-5-days">
                            <p>Salkantay teek 5 days</p>
                        </a>
                        <a href="sacred-valley-2-days">
                            <p>Sacred Valley of the Incas</p>
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
