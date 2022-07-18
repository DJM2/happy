<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Tours alrededor del Perú | Happy Perú Tours, Travel Agency Perú</title>
    <meta name="description"
        content="Perú tiene una gran riqueza cultural y gastronómica y gracias a la Cordillera de los Andes tenemos 3 regiones naturales: Costa, Sierra y Selva">
    <meta name="keywords"
        content="Tours en Peru, tours alrededor de peru, tours en peru, tour para viajar a peru, peru vacaciones, vacaciones en peru, viajar por peru, paquetes en peru, machu picchu peru, viajar a machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tours alrededor del Perú | Happy Perú Tours, Travel Agency Perú" />
    <meta name="description"
        content="Perú tiene una gran riqueza cultural y gastronómica y gracias a la Cordillera de los Andes tenemos 3 regiones naturales: Costa, Sierra y Selva" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/tours-around-peru.webp" />
    <link rel="canonical" href="https://happyperutours.com/es/alrededor-de-peru">
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
                <o>Tours alrededor</o>
                <m>de Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-tours">
                        Perú es un país lleno de lugares turísticos, donde gracias a la coordillera de los Andes podemos
                        encontrar las regiones naturales de Costa, sierra y selva, lo que hace que puedas ver una gran
                        variedad cultural, gastronómica y social. Es difícil conocer Perú en una sola visita, ya que
                        ofrece al visitante una diversidad de lugares turísticos llenos de historia, costumbres, flora y
                        fauna que va con cada tipo de persona y estilo de vida.
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
                            <a href="{{ route('lima-paracas-3-days') }}" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.foot-castellano')

</body>

</html>
