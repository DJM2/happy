<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Tours Tradicionales| Happy Perú Tours | Travel Agency Perú</title>
    <meta name="description"
        content="Encuentra con Happy Perú, tours tradicionales exclusivos, clásicos de Perú, conoce Cusco y los principales de Perú">
    <meta name="keywords"
        content="Cusco, Tour Lares 4 dias, Machu Picchu tour, city tour cusco, tour valle sagrado, tour maras moray, salineras tour, Lima Tour, Tambomachay, Tours exclusivos en Perú, tours tradicionales, tradicionales en Perú, peru tradicional">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Traditional Tours | Happy Perú Tours | Travel Agency Perú" />
    <meta name="description" content="Encontrar tours por Perú, tours exclusivos, Cusco, Lima, Arequipa, Puno." />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/traditional-city-tour.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/tradicional">
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

    @include('layouts.menu-portugues')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> Português</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang" onclick="window.location.href='{{route('traditional')}}'">English</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{route('tradicional')}}'">Español</button ></li>
        </ul></li>
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
            <h1 class="text-center h1-pages">
                Tours Tradicionales
            </h1>
        </div>
    </div>
    </div>
    <div class="hero"></div>
    <section>
        <div class="container">
            <h1 class="h2-happy">Tours Tradicionales en Perú</h1>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index">
                        <a href="cusco-city-tour">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/tour-lares-4-days-peru.jpg') }}"
                                alt="Lares tour trek">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Cusco City tour</h5>
                            <p class="card-text">UNESCO declaró a 
                                Cusco como centro del patrimonio mundial en 1983,
                                por su belleza e historia...</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 1 día</span>
                                    <span class="price-card"><i class="icon-usd"></i>50.00</span><br>
                                </div>
                            <a href="cusco-city-tour" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="tour-happy-experience">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/traditional-city-tour.jpg') }}"
                                alt="Traditional City Tour">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Happy Experience Tour</h5>
                            <p class="card-text">Experiencia Happy Perú, tour en mercado local, clases de cocina y
                                show de pisco sour.</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 1 día</span>
                                    <span class="price-card"><i class="icon-usd"></i>60.00</span><br>
                                </div>
                            <a href="tour-happy-experience" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="happy-city-tour-full-day">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/happy-experience-tour-cusco-peru.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Happy city tour full day</h5>
                            <p class="card-text">UNESCO declaró a Cusco como centro del patrimonio mundial en 1983,
                                por su belleza e historia ...</p>
                            <a href="happy-city-tour-full-day" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="valle-sagrado-2-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/inca-trail-first-class-tour.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Valle Sagrado y Machu Picchu</h5>
                            <p class="card-text">El Tour al Valle Sagrado de los Incas el cual dura todo el día te
                                llevará a los lugares más clásicos...</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 2 días</span>
                                    <span class="price-card"><i class="icon-usd"></i>450.00</span><br>
                                </div>
                            <a href="valle-sagrado-2-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="valle-sagrado-full-day">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/sacred-valley-of-the-incas.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Valle Sagrado</h5>
                            <p class="card-text">El Tour al Valle Sagrado de los Incas el cual dura todo el día te
                                llevará a los lugares más clásicos...</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 1 día</span>
                                    <span class="price-card"><i class="icon-usd"></i>80.00</span><br>
                                </div>
                            <a href="valle-sagrado-full-day" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="maras-moray-salineras-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-valle-sagrado-maras.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Maras, Moray y Salineras</h5>
                            <p class="card-text">Tour a las SALINERAS DE MARAS y el sitio arqueológico de
                                experimentación agrícola de MORAY, un...</p>
                                <div class="line-card">
                                    <span class="duration-card"><i class="icon-clock-o"></i> 1 día</span>
                                    <span class="price-card"><i class="icon-usd"></i>60.00</span><br>
                                </div>
                            <a href="maras-moray-salineras-tour" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.english-foot')

</body>

</html>
