<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Preguntas Frecuentas al momento de viajar a Perú</title>
    <meta name="title" content="Preguntas Frecuentas al momento de viajar a Perú">
    <meta name="description"
        content="Te presentamos la mayor cantidad de prefuntas frecuentes que necesitas saber, al momento de viajar a Perú">
    <meta property="og:description"
        content="Te presentamos la mayor cantidad de prefuntas frecuentes que necesitas saber, al momento de viajar a Perú" />
    <meta name="keywords"
        content="Moneda de peru, sol peruano, es peru peligroso?, clima d eperu, se necesita vacuna para entrar a peru?, vacuna covid peru, donde esta ubicado peru?">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="https://happyperutours.com/preguntas-frecuentes" />
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
    <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap">

        @include('layouts.menu-portugues')
        <li class="has-children">
            <idioma><a><span class="icon-language"></span> Português</a></idioma>
            <ul class="dropdown arrow-top" style="width: 120px">
                <li><button class="btn-lang" onclick="window.location.href='{{ route('testimonials') }}'">English</button></li>
                <li><button class="btn-lang" onclick="window.location.href='{{ route('testimonios') }}'">Español</button ></li>
            </ul></li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-form">
                <o>Reserva Perú,</o>
                <m> Ver disponibilidad.</m>
            </h1>
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
            <form style="color: #fff" method="POST" action="{{ route('book-index') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <input type="email" class="form-control" name="email" placeholder="Email:">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="name" placeholder="Nombre:">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="date" class="form-control" name="da" placeholder="Fecha de arrivo">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="date" class="form-control" name="do" placeholder="Fecha de salida">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="adults" placeholder="Adultos">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="childs" placeholder="Niños">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="3" style="height: 40px"
                        placeholder="Mensaje:"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="boton-happy">Enviar</button>
                </div>

            </form>
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
                        Perú es uno de los países más variados del mundo. Es una nación multicultural, llena de
                        tradiciones, una gastronomía única y vastas<strong> reservas naturales.</strong> Es el hogar de
                        12 sitios del
                        Patrimonio Mundial de la UNESCO y 84 de las 117 zonas de vida del planeta. Perú está situado en
                        la parte occidental de América del Sur y comparte fronteras con Ecuador, Colombia, Brasil,
                        Bolivia y Chile. Su enorme territorio, que abarca más de 1,2 millones de kilómetros cuadrados,
                        está compuesto por tres <strong> regiones: Costa, Sierra y Selva.</strong> Su población actual
                        supera los 31,5
                        millones de habitantes. El español es el idioma oficial del Perú; sin embargo, en el país
                        también se hablan 47 lenguas indígenas, entre ellas el<strong> Quechua y el Aimara.</strong>
                    </p>
                </div>
                <div class="col-lg-12">
                    <img src="{{ asset('img/panoramic/machu-picchu-panoramico.jpg') }}" alt="" width="100%">
                    <span>Foto: </span><a href="" class="a-seo">Vinicunca (Montaña de 7 colores)</a>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="Iam">
                        <p>Bienvenido a Happy Perú Tours</p>
                        <b>
                            <div class="innerIam">
                                <o>La mejor experiencia en Perú.</o><br />
                                <m>100% empresa peruana.</m><br />
                                <o>Nuestro objetivo es tu felicidad.</o><br />
                                <m>Brindamos la mejor información.</m><br />
                                <o>Vive una experiencia inolvidable.</o>
                            </div>
                        </b>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <h1 class="h2-happy">Tours en Perú</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index">
                        <a href="es/caminata-lares-4-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/tour-lares-4-days-peru.jpg') }}"
                                alt="Lares tour trek" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Caminata Lares 4d/3n</h5>
                            <p class="card-text">Es una buena alternativa para poder llegar a Machu Picchu si bien
                                es cierto...</p>
                            <a href="es/caminata-lares-4-dias" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/cusco-city-tour">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/traditional-city-tour.jpg') }}"
                                alt="Traditional City Tour" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">City Tour tradicional</h5>
                            <p class="card-text">UNESCO declaró a Cusco como centro del patrimonio mundial en 1983,
                                por su belleza e historia.</p>
                            <a href="es/cusco-city-tour" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/tour-happy-experience">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/happy-experience-tour-cusco-peru.jpg') }}"
                                alt="Happy exerience tour" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Happy Experience Tour</h5>
                            <p class="card-text">Happy experience tour (mercado. clases de cocina y el show del
                                pisco sour</p>
                            <a href="es/tour-happy-experience" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/inca-trail-360°-tren-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/inca-trail-first-class-tour.jpg') }}"
                                alt="Inca Rail 360° tour en tren" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Tour en tren Inca Rail 360°</h5>
                            <p class="card-text">Le ofrecemos una viaje maravilloso a Machu Picchu, rodeado de un
                                hermoso paisaje.</p>
                            <a href="es/inca-trail-360°-tren-tour" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/choquequirao-tour-4-dias">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/choquequirao-4-days-tour-cusco-peru.jpg') }}"
                                alt="Choquequirao Tour 4 dias" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Choquequirao 4D/3N</h5>
                            <p class="card-text">Choquequirao es un sitio arqueológico muy impresionante como
                                Machupicchu.</p>
                            <a href="es/choquequirao-tour-4-dias" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/inca-rail-voyager-tren">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/VOYAGER-tour-by-train-in-peru.png') }}"
                                alt="Inca Rail Voyager tour en tren">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Tour en tren Inca Rail Voyager</h5>
                            <p class="card-text">Iniciaremos la travesía disfrutando de un excelente e increíble
                                paisaje andino</p>
                            <a href="es/inca-rail-voyager-tren" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/vinicunca-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/montana-de-colores-trekking.jpg') }}"
                                alt="Inca Rail Voyager tour en tren">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Vinicunca: Montaña de colores</h5>
                            <p class="card-text">La montaña de 7 colores o montaña arco iris, son algunos nombres
                                que tiene Vinicunca</p>
                            <a href="es/vinicunca-tour" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="es/maras-moray-salineras-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/tour-valle-sagrado-moray-andenes.webp') }}"
                                alt="Inca Rail Voyager tour en tren">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Maras, Moray & Salineras</h5>
                            <p class="card-text">Tour a las SALINERAS DE MARAS y el sitio arqueológico de
                                experimentación agrícola de MORAY</p>
                            <a href="es/maras-moray-salineras-tour" class="boton-happy-2">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-bottom: 5em">
                    <h2 class="h2-happy">Sellos de la Empresa</h2>
                    <div class="row text-center">
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/certificado-exclusivo-happy-peru.png') }}"
                                alt="Certificado exclusive" class="img-logo" width="90px" loading="lazy">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/tripadvisor.png') }}" alt="Certificado exclusive"
                                class="img-logo" width="120px" loading="lazy">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/marca_peru.webp') }}" alt="Certificado exclusive"
                                class="img-logo" width="120px" loading="lazy">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/sello-safe-travels-peru.webp') }}" alt="Certificado exclusive"
                                class="img-logo" width="220px" loading="lazy">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!---------Prueba tours full width--------->
        <div class="container-fluid">
            <div class="row">
                <div class="full-width cusco">
                    <div class="black">
                        <h2>Cusco</h2>
                        <p>El ombligo del mundo</p>
                        <button> <a href="#">Ver tours</a> </button>
                    </div>
                </div>
                <div class="full-width lima">
                    <div class="black">
                        <h2>Lima</h2>
                        <p>Ciudad de los reyes</p>
                        <button> <a href="#">Ver tours</a> </button>
                    </div>
                </div>
                <div class="full-width arequipa">
                    <div class="black">
                        <h2>Arequipa</h2>
                        <p>La ciudad blanca</p>
                        <button> <a href="#">Ver tours</a> </button>
                    </div>
                </div>
                <div class="full-width puno">
                    <div class="black">
                        <h2>Puno</h2>
                        <p>Capital del folklore peruano</p>
                        <button> <a href="#">Ver tours</a> </button>
                    </div>
                </div>
            </div>
        </div>
        <!-----------Fin Tours full width---------->
    </section>
    @include('layouts.foot-portugues')

</body>

</html>
