<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Tours en tren para Machu Picchu | Happy Perú Tours, Travel Agency Perú</title>
    <meta name="description"
        content="Encuentra con Happy Peru Tours tours en tren hacia Machu Picchu. Tours al valle Sagrado de los Incas, tours en tren de primera clase, tours con servicio a bordo...">
    <meta name="keywords"
        content="Cusco, tren expeditions, tren vistadome, tren hiram bingham, tren hiram binghan, tour en tren primera clase, primera clase, tour de primera clase, tours en tren machupicchu, tren 360°, tren primera clase a machupicchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Traditional Tours | Happy Perú Tours | Travel Agency Perú" />
    <meta name="description" content="Find tours for Perú, exclusive tours, Cusco, Lima, Arequipa, Puno." />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/expedition-train-tren.webp" />
    <link rel="canonical" href="https://happyperutours.com/es/tours-en-tren">
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
                <li><button class="btn-lang" onclick="window.location.href='{{ route('around') }}'">English</button>
                </li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('tren-portugues') }}'">Portugués</button></li>
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
                <?php $titulo = 'Tours alrededor de Perú';
                echo $titulo; ?>
            </h1>
        </div>
    </div>
    </div>
    <div class="around"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tours de lujo en tren</o>
                <m>a Machu Picchu</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-tours">
                        Encuentra con <strong>Happy Peru Tours</strong> tours en tren hacia Machu Picchu. Tours al valle
                        Sagrado de los Incas, tours en tren de primera clase, tours con servicio a borde, para que pase
                        ua experiencia agradable durante su visita. Estos servicios turísticos cuentan con todas las
                        comodidades a bordo y con una decoración inspirada en la cultura incaica: la antesala perfecta
                        para su visita a la ciudadela de Machu Picchu.
                    </p><br><br>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index">
                        <a href="{{ route('lima-paracas-3-days') }}">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/lima-ica-paracas-tour.webp') }}"
                                alt="Ballestas Islands" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Lima - Ica - Paracas</h5>
                            <p class="card-text">
                                Conoce el norte de Perú con este hermosos tour, donde conocerá Lima, Ica y Paracas
                            </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 3 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>350.00</span><br>
                            </div>
                            <a href="{{ route('lima-paracas-3-days') }}" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.foot-castellano')

</body>

</html>
