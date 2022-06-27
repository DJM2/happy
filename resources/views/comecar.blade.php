<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Happy Peru Tours | Agência de viagens e turismo do Peru</title>
    <meta name="title" content="Happy Peru Tours | Agência de viagens e turismo do Peru">
    <meta name="description"
        content="Happy Peru Tours, passeios ao Peru, caminhadas, passeios de aventura, caminhadas em cusco, ciclismo, machu picchu">
    <meta property="og:description"
        content="Happy Peru Tours, passeios ao Peru, caminhadas, passeios de aventura, caminhadas em cusco, ciclismo, machu picchu" />
    <meta name="keywords"
        content="peru tours, trek to machu picchu, hot waters, tour for cusco, tours from lima, tours for puno, tours for arequipa, treks in cusco">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="https://happyperutours.com/comecar" />
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
                <li><button class="btn-lang" onclick="window.location.href='{{ route('index') }}'">English</button>
                </li>
                <li><button class="btn-lang" onclick="window.location.href='{{ route('inicio') }}'">Español</button>
                </li>
            </ul>
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
            <h1 class="text-center h1-form">
                <o>Reserva Perú,</o>
                <m> Consulte disponibilidade.</m>
            </h1>
            @if (session()->has('flash'))
                <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-center">Sua mensagem foi enviada com sucesso, responderemos o mais breve possível
                        possível.
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
                        <input type="text" class="form-control" name="name" placeholder="Nome:">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="date" class="form-control" name="da" placeholder="Data de chegada">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="date" class="form-control" name="do" placeholder="Data de saída">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="adults" placeholder="Adultos">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="childs" placeholder="Crianças">
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="3" style="height: 40px" placeholder="Mensagem:"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="boton-happy">Mandar</button>
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
                        O Peru é um dos países mais variados do mundo. É uma nação multicultural, cheia de tradições,
                        uma gastronomia única e vastas <strong>reservas naturais.</strong> É o lar de 12 Patrimônios
                        Mundiais da UNESCO e 84 das 117 zonas de vida do planeta. O Peru está localizado na parte
                        ocidental da América do Sul e faz fronteira com Equador, Colômbia, Brasil, Bolívia e Chile. Seu
                        enorme território, com mais de 1,2 milhão de quilômetros quadrados, é formado por três regiões:
                        <strong>Litoral, Serra e Selva.</strong> Sua população atual ultrapassa 32 milhões de
                        habitantes. O Espanhol é a língua oficial do Peru; no entanto, 47 línguas indígenas também são
                        faladas no país, incluindo o <strong>Quíchua e o Aimará.</strong>
                    </p>
                </div>
                <div class="col-lg-12">
                    <img src="{{ asset('img/panoramic/machu-picchu-panoramico.jpg') }}" alt=""
                        width="100%">
                    <span>Foto: </span><a href="" class="a-seo">Vinicunca(montanha de 7 cores)</a>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="Iam">
                        <p>Bem-vindo ao Happy Perú Tours</p>
                        <b>
                            <div class="innerIam">
                                <o>A melhor experiência no Peru</o><br />
                                <m>Empresa 100% peruana</m><br />
                                <o>Nosso objetivo é a sua felicidade</o><br />
                                <m>A melhor informação</m><br />
                                <o>Viva uma experiência inesquecível</o>
                            </div>
                        </b>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <h1 class="h2-happy">Passeios no Peru</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index">
                        <a href="es/caminata-lares-4-dias">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/tour-lares-4-days-peru.jpg') }}"
                                alt="Lares tour trek" loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Caminhada Lares 4d/3n</h5>
                            <p class="card-text">Es una buena alternativa para poder llegar a Machu Picchu si bien
                                es cierto...</p>
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>600.00</span><br>
                            </div>
                            <a href="es/caminata-lares-4-dias" class="boton-happy-2">Mais info</a>
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
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Día</span>
                                <span class="price-card"><i class="icon-usd"></i>50.00</span><br>
                            </div>
                            <a href="es/cusco-city-tour" class="boton-happy-2">Mais info</a>
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
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Día</span>
                                <span class="price-card"><i class="icon-usd"></i>60.00</span><br>
                            </div>
                            <a href="es/tour-happy-experience" class="boton-happy-2">Mais info</a>
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
                            <a href="es/inca-trail-360°-tren-tour" class="boton-happy-2">Mais info</a>
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
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Días</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="es/choquequirao-tour-4-dias" class="boton-happy-2">Mais info</a>
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
                            <a href="es/inca-rail-voyager-tren" class="boton-happy-2">Mais info</a>
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
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Día</span>
                                <span class="price-card"><i class="icon-usd"></i>100.00</span><br>
                            </div>
                            <a href="es/vinicunca-tour" class="boton-happy-2">Mais info</a>
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
                            <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Día</span>
                                <span class="price-card"><i class="icon-usd"></i>60.00</span><br>
                            </div>
                            <a href="es/maras-moray-salineras-tour" class="boton-happy-2">Mais info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-bottom: 5em">
                    <h2 class="h2-happy">Selos da Empresa</h2>
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
                <div class="col-lg-12">
                    <h2 class="text-center">Tópicos de turismo no Peru</h2><br><br>
                </div>
                <div class="full-width inca-trail">
                    <div class="black">
                        <h2>Camino Inca</h2>
                        <p>Qué necesitas saber sobre el Camino Inca</p>
                        <button> <a href="blog/blog-castellano/que-necesitas-saber-sobre-el-camino-inca">Leer
                                articulo</a> </button>
                    </div>
                </div>
                <div class="full-width food">
                    <div class="black">
                        <h2>Gastronomía de Perú</h2>
                        <p>La exquisita gastronomía peruana.</p>
                        <button> <a href="blog/blog-castellano/gastronomia-peruana">Leer artículo</a> </button>
                    </div>
                </div>
                <div class="full-width vinicunca">
                    <div class="black">
                        <h2>Vinicunca</h2>
                        <p>La famosa montaña de colores</p>
                        <button> <a href="blog/blog-castellano/vinicunca-castellano">Leer artículo</a> </button>
                    </div>
                </div>
                <div class="full-width puno">
                    <div class="black">
                        <h2>Puno</h2>
                        <p>Capital of Peruvian folklore</p>
                        <button> <a href="blog/blog-castellano/informacion-turistica-puno">View Tours</a> </button>
                    </div>
                </div>

            </div>
        </div>
        <!-----------Fin Tours full width---------->
    </section>
    @include('layouts.foot-castellano')

</body>

</html>
