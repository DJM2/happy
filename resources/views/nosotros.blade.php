<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Sobre Happy Peru Tours | Agencia de viajes y turismo Perú</title>
    <meta name="title" content="Happy Peru Tours - Travel Agency for Perú | Viajes a Perú">
    <meta name="description"
        content="Happy Perú Tours, tours para Perú, caminatas, tours de aventura, caminatas en cusco, ciclismo, machu picchu">
    <meta property="og:description"
        content="Happy Perú Tours, tours para Perú, caminatas en Perú, tours de aventura en Cusco, caminatas en cusco, ciclismo en los andes, machu picchu" />
    <meta name="keywords"
        content="peru tours, caminata a machu picchu, aguas calientes, tour for cusco, tours for lima, tours for puno, tours for arequipa, treks in cusco">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta property="og:image" content="https://happyperutours.com/img/happy-peru-tours-travel-agency.jpg" />
    <link rel="canonical" href="https://happyperutours.com/nosotros" />
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
                <li><button class="btn-lang" onclick="window.location.href='{{ route('about-us') }}'">English</button></li>
                <li><button class="btn-lang" onclick="window.location.href='{{ route('about-us') }}'">Portugués</button ></li>
            </ul></li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="container form">
        <div class="abs-center form-index">
            <h1  class="text-center h1-pages" style="color: #fff; margin-top:3em">
                <?php $titulo='Sobre Happy Perú Tours'; echo $titulo; ?>   
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
                    <p>
                        Somos un equipo profesional con una experiencia de más de 15 años como Guías Oficiales de
                        Turismo en la ciudad del cusco, somos una empresa 100 % local, apostamos a formar una empresa
                        con el conocimiento amplio de las necesidades que buscan encontrar los viajeros en cada tour por
                        más pequeña que sea. El amor por nuestro trabajo, amor a la naturaleza, respeto a las montañas,
                        respeto a nuestra gente local de costumbres y tradiciones milenarias nos impulsaron en este
                        proyecto con la finalidad de brindar experiencias inolvidables con cada uno que quiera conocer y
                        compartir nuestra cultura peruana. <br>

                        Nuestro compromiso con nuestras comunidades locales; es generar oportunidades de empleo, apoyar
                        en sus ingresos económicos y mejorar su calidad de vida; utilizamos los recursos naturales de
                        manera sostenible y responsable.<br>

                        Nuestro compromiso con nuestros clientes; es satisfacer sus expectativas, cumpliendo estándares
                        de calidad con honestidad y transparencia; brindándoles profesionalismo, seguridad y confianza.
                    </p>
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
                    </div><br><br><br>
                    <p class="text-center">
                        <img class="img-fluid mapa-img" src="{{ asset('img/blog/el-peru-en-el-mapa-del-mundo.png') }}" alt="">
                    </p><br><br><br>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.foot-castellano')

</body>

</html>
