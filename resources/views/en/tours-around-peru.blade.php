<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Tours around Peru | Happy Peru Tours, Travel Agency Peru</title>
    <meta name="description"
        content="Peru has a great cultural and gastronomic wealth and thanks to the Andes Mountains we have 3 natural regions: Coast, Sierra and Selva">
    <meta name="keywords"
        content="Tours in Peru, tours around peru, tours in peru, tour to travel to peru, peru vacations, vacations in peru, travel through peru, packages in peru, machu picchu peru, travel to machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tours around Peru | Happy Peru Tours, Travel Agency Peru" />
    <meta name="description"
        content="Peru has a great cultural and gastronomic wealth and thanks to the Andes Mountains we have 3 natural regions: Coast, Sierra and Selva" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/tours-around-peru.webp" />
    <link rel="canonical" href="https://happyperutours.com/en/tours-around-peru">
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
                    onclick="window.location.href='{{ route('alrededor-de-peru') }}'">Español</button></li>
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
                <?php $titulo = 'Tours around Perú';
                echo $titulo; ?>
            </h1>
        </div>
    </div>
    </div>
    <div class="around"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tours around </o>
                <m>Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-tours">
                        Peru is a country full of tourist places, where thanks to the Andes mountain range we can
                        find the natural regions of Coast, mountains and jungle, which allows you to see a great
                        cultural, gastronomic and social variety. It is difficult to get to know Peru in a single visit,
                        since offers the visitor a diversity of tourist places full of history, customs, flora and
                        fauna that goes with each type of person and lifestyle.
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
                                Enjoy a tourism full of culture and history, combined with adventure.
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
    @include('layouts.english-foot')

</body>

</html>
