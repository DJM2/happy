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

    @include('layouts.english')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> English</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang" onclick="window.location.href='{{ route('caminata-a-lares-4-dias') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('lares-trekking-4-dias') }}'">Portugués</button ></li>
        </ul></li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-pages">
                <?php $titulo='Trek to Lares 4 days'; echo $titulo; ?>     
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Lares &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 600; echo $precio; ?>.00
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
                <o>Lares Trek</o>
                <m> 4 Days, 3 nights</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Similar Tours</h4>
                        <a href="perurail-sacred-valley-tour">
                            <p>Peru Rail & Sacred Valley</p>
                        </a>
                        <a href="huchuy-qosqo-to-machu-picchu">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray & Salineras</p>
                        </a>
                        <a href="salkantay-trek-4-days-tour">
                            <p>Salkantay trek 4 days</p>
                        </a>
                        <a href="rainbow-mountain-tour">
                            <p>Vinicunca: Rainbow Mountain</p>
                        </a>
                        <a href="inca-trail-4-days">
                            <p>Inca Trail to Machu Picchu 4 days</p>
                        </a>
                        <a href="sacred-valley-3-days-tour">
                            <p>Sacred Valley 3 days Tour</p>
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
                                <td>$600.00 per adult</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        It is a good alternative to get to Machupicchu, although the Lares valley is very extensive,
                        this means that there are different routes that will lead us to a single objective, the sacred
                        valley of the Incas. The route we offer will show us the beauty of the Peruvian Andes, its
                        Andean people, customs and traditions that are passed from generation to generation; It is a
                        hiking route that begins with the well-known thermal baths, then we will cross high parts of the
                        Andes, beautiful views of wonderful landscapes that will accompany us during the tour, the walk
                        is not very crowded like the Inca trail but it is enjoyed in the same way because we will be
                        able to be in contact with nature and its native peoples, we will observe a variety of flora,
                        wild and domestic fauna, to then reach the sacred valley of the Incas and finally connect to
                        Machupicchu.
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
                                <td>4 hours</td>
                                <td>10 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        This day we will start with the pick up from the hotel at 5:00 am, we will board the private
                        tourist bus to go to the town of LARES where the THERMAL BATHS are located, with an
                        approximate travel time of 3 hours; During the journey we will pass through a part of the
                        sacred valley having impressive views of the snow-capped mountains that protect our valley
                        and which are part of the Andes Mountains, upon reaching the thermal baths also known as
                        thermo-medicinal because they are made up of volcanic waters and other minerals, many local
                        people go to these baths to treat bone problems, stress, rheumatic diseases and others, then
                        we get ready to continue our adventure this time we will take the bus again to drive us to
                        the starting place of our trekking located at the foot of the road (3050 masl) it will also
                        be the meeting point with the muleteer and the horses that will support us with all the
                        camping equipment, after 2 and a half hours of ascending walk we will arrive at the town of
                        KISWARANI, where the first lunch, this area because of the height at which it is located is
                        known as the potato cultivation area, during the journey the guide will go most rando the
                        vivendus ways of the population and their daily activities such as the way of growing
                        organic potatoes. After a delicious lunch, the muleteers or llamaros will give us a short
                        explanation about the raising of their llamas or alpacas considered sacred in the time of
                        the Incas, continuing our journey we will make a walk of approximately 2 hours to our
                        campsite where our team she awaits us with the stores ready, hot drinks and later dinner.
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
                                <td>Dificult</td>
                                <td>8 hours</td>
                                <td>14 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        The awakening will be very early with a traditional coca tea to prepare our body for altitude,
                        with the first rays of sun we will see the local people getting ready for their daily day such
                        as herding their animals, once breakfast is finished We will have a few minutes to prepare our
                        personal things and provide ourselves with boiled water and some snacks for the road, we will
                        start with a zigzag ascent of approximately 4 hours until we reach the highest part of the trip
                        called PASO DEL CONDOR or PASO DE PACHACUTEK ( 4670m.snm) at this point the view will be
                        impressive we will see alpacas, llamas, lagoons or natural lakes, we will be surrounded by the
                        highest peaks of the mountains and snow-capped mountains such as PITUSIRAY (5700 masl) before
                        starting the descent we will enjoy a drink hot, after 1 hour of descent we will have lunch and
                        then continue for 3 more hours of descent and be able to arrive at our camp called CANCHA CANCHA
                        ( 3750m.snm), s one of the towns where technology has not yet reached, for this reason its
                        inhabitants still practice Inca customs such as the construction of their homes using stone, we
                        invite all of you to bring support such as school supplies for the children of the area because
                        you will enjoy moments to share with them. We will visit one of the local houses to learn about
                        the way of raising guinea pigs and learn a little about their traditional textiles.
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
                                <td>Moderate</td>
                                <td>4 hours</td>
                                <td>9 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        This day will be a bit different, but in the same way it will start with the traditional coca
                        tea awake and after a delicious breakfast we will begin the adventure of the day, we will
                        descend for a time of 4 hours until we reach the end point of the route called HUARAN
                        (2700m.snm), as we descend we will be able to feel the change in temperature thanks to the
                        microclimates of the area, in the same way the growing areas will change since other crop
                        products such as corn will be appreciated, quinoa, quiwicha, fruits such as peach, avocado or
                        avocado, loquats and others. HUARAN will be the farewell point with the muleteer and cook who
                        accompanied us during the journey, after a ceremony of gratitude and appreciation we will board
                        our tourist bus that will take us to the town of Ollantaytambo, here we will have time to visit
                        the colqas or granaries of the time of the Incas, we will enjoy a moment around the town known
                        as VIVIENTE INCA PEOPLE, after a dinner in a local restaurant we will go to the train station to
                        board the train that will take us to Machupicchu; having our last night in a comfortable hotel.
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
                                <td>Easy</td>
                                <td>3 hours</td>
                                <td>6 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        This day will be a challenge for us to try to be one of the first groups to visit the citadel of
                        Machupicchu, therefore the awakening will be very early at 4:00 am to be able to be on time at
                        the bus station because there will also be Many people having the same objective, the first bus
                        will leave at 5:30 a.m. with a 30-minute tour we will be making our entrance to the citadel at
                        6:00 a.m., the guided tour lasts approximately 3 hours knowing the most important places and
                        Highlights of Machupicchu after that they will have a rational free time to take pictures and
                        fill themselves with energy that only this wonderful place can offer, they will also have the
                        option of being able to take a short walk to the INTI PUNKU or Puerta del Sol from where they
                        can take panoramic photographs from Machupicchu, it is recommended to go down to hot waters for
                        lunch since there are more options, the return train to Cusco will depart at 4:20 pm arriving at
                        the city. from Cusco at 8:30 pm to the hotel.
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
                                    &check; Pick up from the hotel. <br>
                                    &check; Tourist transport Cusco- Thermal baths – Kiswarani. <br>
                                    &check; Tourist transport Huarán- Ollantaytambo. <br>
                                    &check; Tourist train ticket Ollantaytambo - Aguas Calientes – Ollantaytambo. <br>
                                    &check; One way of tourist bus Aguas Calientes – Machupicchu. <br>
                                    &check; Entrance tickets to thermal baths and lares. <br>
                                    &check; 3 breakfasts, 4 lunches, 3 dinners, 3 hours of tea (vegetarian option). <br>
                                    &check; Professional bilingual guide. <br>
                                    &check; Professional cook. <br>
                                    &check; Boiled water 3 mornings. <br>
                                    &check; Snacks. <br>
                                    &check; Camping equipment (tent and mat). <br>
                                    &check; Muleteer or horse driver. <br>
                                    &check; Horse (7 kilos per person). <br>
                                    &check; Horse (for all camping and kitchen equipment). <br>
                                    &check; First aid kit. <br>
                                    &check; Oxygen. <br>
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
                                    &#10008; First breakfast. <br>
                                    &#10008; Last lunch<br>
                                    &#10008; Extra drinks<br>
                                    &#10008; Sleeping bag<br>
                                    &#10008; Walking poles<br>
                                    &#10008; Tips<br>
                                    &#10008; Sleeping bag rental ($ 20)<br>
                                    &#10008; Rental of walking poles ($ 20)

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
                                    &#10034; Snacks (chocolates, sweets, nuts etc.)<br>
                                    &#10034; Photographic camera<br>
                                    &#10034; Drink holder<br>
                                    &#10034; Rain poncho<br>
                                    &#10034; Extra poles<br>
                                    &#10034; Alcohol gel<br>
                                    &#10034; Walking poles<br>
                                    &#10034; Sandals<br>
                                    &#10034; Sun caps<br>
                                    &#10034; Extra money<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/en/lares-trek-4-days"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>From:</span><i class="icon-dollar"></i> 600.00 <i
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
                            <a href="{{ asset('img/galeria/lares-trek-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-trek-tour.jpg') }}"
                                    alt="lares trek tour">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-tour-4-days.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-tour-4-days.jpg') }}"
                                    alt="lares tour 4 days">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-a-lares.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/tour-a-lares.jpg') }}"
                                    alt="tour a lares">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-en-lares.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/tour-en-lares.jpg') }}"
                                    alt="tour en lares">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-tour-peru.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/lares-tour-peru.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/lares-caminata-4-dias.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/lares-caminata-4-dias.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Similar Tours</h4>
                    <div class="similares">
                        <a href="perurail-sacred-valley-tour">
                            <p>Peru Rail & Sacred Valley</p>
                        </a>
                        <a href="huchuy-qosqo-to-machu-picchu">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-days-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="maras-moray-salineras-tour">
                            <p>Maras, Moray & Salineras</p>
                        </a>
                        <a href="salkantay-trek-4-days-tour">
                            <p>Salkantay trek 4 days</p>
                        </a>
                        <a href="rainbow-mountain-tour">
                            <p>Vinicunca: Rainbow Mountain</p>
                        </a>
                        <a href="inca-trail-4-days">
                            <p>Inca Trail to Machu Picchu 4 days</p>
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
