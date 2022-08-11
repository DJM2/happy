<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Alternative Tours for Perú | Travel Agency Perú</title>
    <meta name="title" content="Happy Peru Tours - Travel Agency for Perú | Travel to Perú">
    <meta name="description"
        content="Happy Perú Tours, tours for Perú, Find treks, adventures and trekking tour around Perú">
    <meta property="og:description"
        content="Happy Perú Tours, tours for Perú. Find treks, adventures and trekking tour around Perú" />
    <meta name="keywords"
        content="peru tours, trekking to machu picchu, aguas calientes, tour for cusco, tours for lima, tours for puno, tours for arequipa, treks in cusco">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="https://happyperutours.com/alternatives" />
    <meta property="og:image" content="https://happyperutours.com/img/happy-peru-tours-travel-agency.jpg" />
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
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('alternatives-english') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('alternativos-castellano') }}'">Español</button></li>
        </ul>
    </li>
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
                Ao Redor do Perú
            </h1>
        </div>
    </div>
    </div>
    <div class="hero"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-happy" style="margin-bottom: 1em; text-transform:uppercase">Perú</h2>
                    <p class="p-tours">
                        O Peru é um dos países mais variados do mundo. É uma nação multicultural, repleta de tradições,
                        uma gastronomia única e vastas reservas naturais. É o lar de 12 Patrimônios Mundiais da UNESCO e
                        84 das 117 zonas de vida do planeta. O Peru está situado na parte ocidental da América do Sul e
                        faz fronteira com Equador, Colômbia, Brasil, Bolívia e Chile. Seu enorme território, com mais de
                        1,2 milhão de quilômetros quadrados, é composto por três regiões: Litoral, Planalto e Selva. Sua
                        população atual ultrapassa 31,5 milhões de habitantes. O espanhol é a língua oficial do Peru; no
                        entanto, 47 línguas indígenas também são faladas no país, incluindo o quechua e o aimará.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="h2-happy">Ao redor do Perú</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index">
                        <a href="lima-ica-paracas-3-dias-tour">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/lima-ica-paracas-tour.webp') }}"
                                alt="Ilhas Ballestas" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Lima - Ica - Paracas</h5>
                            <p class="card-text">
                                Desfrute de um turismo cheio de cultura, história, aliado a aventura.
                            </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 3 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>350.00</span><br>
                            </div>
                            <a href="lima-ica-paracas-3-dias-tour" class="boton-happy-2">Mais informação</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.foot-portugues')

</body>

</html>
