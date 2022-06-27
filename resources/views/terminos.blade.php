<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Happy Perú Tours | Agencia de viajes y turismo Perú</title>
    <meta name="title" content="Happy Peru Tours - Travel Agency for Perú | Viajes a Perú">
    <meta name="description"
        content="Happy Perú Tours, tours para Perú, caminatas, tours de aventura, caminatas en cusco, ciclismo, machu picchu">
    <meta property="og:description"
        content="Happy Perú Tours, tours para Perú, caminatas, tours de aventura, caminatas en cusco, ciclismo, machu picchu" />
    <meta name="keywords"
        content="peru tours, caminata a machu picchu, aguas calientes, tour for cusco, tours for lima, tours for puno, tours for arequipa, treks in cusco">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="https://happyperutours.com/inicio" />
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

        @include('layouts.spanish')
        <li>
            <a href="terms-and-conditions">
                <idioma>English</idioma>
            </a>
        </li>
        <li><a href="terms-and-conditions" class="nav-link" id="idioma-responsive">English</a></li>
        </ul>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-pages" style="color: #fff; margin-top:2em">
                Términos y Condiciones
            </h1>
        </div>
    </div>
    </div>
    <div class="terms"></div>
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
    @include('layouts.foot-castellano')

</body>

</html>
