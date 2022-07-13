<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Tours de aventura para Perú | Happy Perú Tours, Travel Agency Perú</title>
    <meta name="description" content="">
    <meta name="keywords"
        content="Tours de aventura, Tours de aventura en Perú, Peru aventura tours, tour de aventura en perú, aventura en Perú, actividades de aventura en Perú, visitar peru, viaje a perú, viaje a machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tours de Aventura | Happy Perú Tours | Travel Agency Perú" />
    <meta name="description" content="Encuentra tours de aventura en Perú, tours de aventura exclusivos" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/lares-trek-4-days.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/aventuras">
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
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('adventure') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('aventura-portugues') }}'">Portugués</button></li>
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
                <?php $titulo = 'Tours de Aventura';
                echo $titulo; ?>
            </h1>
        </div>
    </div>
    </div>
    <div class="adventure"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tours de Aventura</o>
                <m>en Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-tours">
                        Montaña, desierto, océano, selva… Descubre los atractivos naturales de un país que combina todos
                        los paisajes posibles: Perú. Si sois amantes de la adrenalina y el deporte extremo, ¡estáis de
                        suerte!

                        Gracias a su gran variedad de escenarios, cualquier época del año es buena para visitar este
                        país que combina historia, aventura y naturaleza. Practicar kayak, rafting, escalada o trekking
                        en la tierra de los incas es una experiencia única. Desde Civitatis, queremos recomendaros las
                        formas más aventureras de explorar Perú.
                    </p><br><br>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index">
                        <a href="inca-trail-2-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/camino-inca-machu-picchu.webp') }}"
                                alt="Camino Inca de 2 días" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Camino Inca 2 días</h5>
                            <p class="card-text">Disfruta del increible camino Inca en dos días para llegar a Machu
                                Picchu.
                            </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="inca-trail-2-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="inca-trail-4-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/camino-inca-tour.webp') }}"
                                alt="Camino Inca de 4 dias" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Camino Inca 4 días</h5>
                            <p class="card-text">Conoce Machu Picchu con una caminata de 4 días para llegar a él,
                                una experiencia inolvidable!</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>650.00</span><br>
                            </div>
                            <a href="inca-trail-4-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/huchuy-qosqo-tour-2-days.webp') }}"
                                alt="Caminata a Huchuy Qosqo" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Huchuy Qosqo trek</h5>
                            <p class="card-text">En este tour podrás llegar a Machu Picchu mediante la muy bella
                                caminata de Huchuy Qosqo </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>580.00</span><br>
                            </div>
                            <a href="huchuy-qosqo-a-machu-picchu" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="valle-sagrado-3-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/sacred-valley-of-the-incas.webp') }}"
                                alt="Valle Sagrado y Machu Picchu">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Valle Sagrado & Camino Inca</h5>
                            <p class="card-text">Esta es una caminata por el Valle sagrado de los Incas, por donde
                                llegaremos a Machu Picchu en 3 dias</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 3 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>570.00</span><br>
                            </div>
                            <a href="valle-sagrado-3-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="inca-jungle-4-dias-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-machu-picchu-panoramico-chullito.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Inca Jungle a Machu Picchu</h5>
                            <p class="card-text">Una nueva alternativa de camino Inca para llegar a la maravilla de
                                Machu Picchu</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>450.00</span><br>
                            </div>
                            <a href="inca-jungle-4-dias-tour" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="caminata-lares-4-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-machu-picchu-sorprendente.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Caminata caminata a Machu Picchu</h5>
                            <p class="card-text">Es una buena alternativa para poder llegar a Machu Picchu, rico en
                                bellos paisajes en ruta. </p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>600.00</span><br>
                            </div>
                            <a href="caminata-lares-4-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="choquequirao-tour-4-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/choquequirao-4-days-tour-cusco-peru.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Choquequirao 4 días</h5>
                            <p class="card-text">Choquequirao, es el segundo sitio arqueológico más
                                conocido igual de impresionante que Machupicchu</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="choquequirao-tour-4-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="tour-salkantay-4-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/salkantay-tour.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Salkantay trek a Machu Picchu</h5>
                            <p class="card-text"> Considerado una de las mejores caminatas del mundo, es la forma
                                más increíble de llegar a Machu Picchu.</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>470.00</span><br>
                            </div>
                            <a href="tour-salkantay-4-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="tour-salkantay-5-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/salkantay-tour-trek.webp') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Salkantay 5 días</h5>
                            <p class="card-text">Considerado una de las mejores caminatas del mundo, es la forma
                                más increíble de llegar a Machu Picchu.</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="tour-salkantay-5-dias" class="boton-happy-2">Más Info</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.english-foot')

</body>

</html>
