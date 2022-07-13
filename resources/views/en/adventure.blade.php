<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Adventure tours for Perú | Happy Perú Tours | Travel Agency Perú</title>
    <meta name="description"
        content="Encuentre tours de aventura para visitar Perú y Machu Picchu, caminatas incas, recorrido por la ciudad de cusco y más.">
    <meta name="keywords"
        content="Cusco, Peru adventures, adventures for Peru, adventure tours, adventure tours Peru, adventure tour for peru, peru travel adventures, visit peru, travel to peru, travel to machu picchu">
    <meta property="og:type" content="website" />
    <meta name="description"
        content="Find adventure tours to visit Perú and Machu Picchu, Inca treks, cusco sity tour and more." />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/lares-trek-4-days.jpg" />
    <link rel="canonical" href="https://happyperutours.com/en/adventure">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('aventuras') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('aventura-portugues') }}'">Portugués</button ></li>
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
                Adventure Tours
            </h1>
        </div>
    </div>
    </div>
    <div class="adventure"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Adventure</o>
                <m>Tours Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Mountain, desert, ocean, jungle... Discover the natural attractions of a country that combines
                        them all
                        possible landscapes: Peru. If you are lovers of adrenaline and extreme sports, you are in
                        luck!

                        Thanks to its great variety of settings, any time of the year is good to visit this
                        country that combines history, adventure and nature. Kayaking, rafting, climbing or trekking
                        in the land of the Incas is a unique experience. From Civitatis, we want to recommend the
                        more adventurous ways to explore Peru.
                    </p><br><br>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index">
                        <a href="inca-trail-2-days">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/camino-inca-machu-picchu.webp') }}"
                                alt="Camino Inca de 2 días" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Short Inca Trail</h5>
                            <p class="card-text">Enjoy the incredible Inca trail in two days, to reach Machu
                                Picchu.
                            </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="inca-trail-2-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="inca-trail-4-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/camino-inca-tour.webp') }}"
                                alt="Camino Inca de 4 dias" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Inca Trail 4 days</h5>
                            <p class="card-text">Get to know Machu Picchu with a 4-day trek to reach it,
                                an unforgettable experience!</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>650.00</span><br>
                            </div>
                            <a href="inca-trail-4-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="huchuy-qosqo-to-machu-picchu">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/huchuy-qosqo-tour-2-days.webp') }}"
                                alt="Caminata a Huchuy Qosqo" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Huchuy Qosqo trek</h5>
                            <p class="card-text">On this tour you can get to Machu Picchu through the very
                                beautiful
                                Huchuy Qosqo trek </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>580.00</span><br>
                            </div>
                            <a href="huchuy-qosqo-to-machu-picchu" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="sacred-valley-3-days-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/sacred-valley-of-the-incas.webp') }}"
                                alt="Valle Sagrado y Machu Picchu">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Sacred Valley & Inca trail 3 days</h5>
                            <p class="card-text">This is a walk through the Sacred Valley of the Incas, where
                                we will arrive to Machu Picchu in 3 days.</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 3 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>570.00</span><br>
                                </div>
                            <a href="sacred-valley-3-days-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="inca-jungle-4-days-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-machu-picchu-panoramico-chullito.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Inca Jungle to Machu Picchu</h5>
                            <p class="card-text">A new Inca trail alternative to reach the wonder of
                                Macchu Picchu</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>450.00</span><br>
                                </div>
                            <a href="inca-jungle-4-days-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="lares-trek-4-days">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-machu-picchu-sorprendente.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Lares trek to Machu Picchu</h5>
                            <p class="card-text">It is a good alternative to get to Machu Picchu, rich in
                                beautiful landscapes en route.</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>600.00</span><br>
                                </div>
                            <a href="lares-trek-4-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="choquequirao-4-days-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/choquequirao-4-days-tour-cusco-peru.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Choquequirao 4 days trek</h5>
                            <p class="card-text">Choquequirao, is the second largest archaeological site
                                known as impressive as Machupicchu</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                                </div>
                            <a href="choquequirao-4-days-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="salkantay-trek-4-days-tour">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/salkantay-tour.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Salkantay trek to Machu Picchu</h5>
                            <p class="card-text"> Considered one of the best walks in the world, it is the way
                                most incredible to get to Machu Picchu.</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>470.00</span><br>
                                </div>
                            <a href="salkantay-trek-4-days-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="salkantay-trek-tour-5-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/salkantay-tour-trek.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Salkantay trek to Machu Picchu</h5>
                            <p class="card-text">Considered one of the best walks in the world, it is the way
                                most incredible to get to Machu Picchu.</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 5 Days</span>
                                    <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                                </div>
                            <a href="salkantay-trek-tour-5-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.english-foot')

</body>

</html>
