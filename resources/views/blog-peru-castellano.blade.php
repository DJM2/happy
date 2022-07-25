<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Happy Perú Tours, te presenta temas interesantes para disfrutar mejor el turismo en Perú</title>
    <meta name="description"
        content="Blog de turismo en Perú, naturaleza, gastronomía, cultura e historia, aventura, entretenimiento y uno de los legados más impresionantes del planeta.">
    <meta name="keywords"
        content="inca rail, peru destino turistico, El idioma quechua, Conoce vinicunca, Informacion sobre el camino Inca, tours para cusco, gastronomia Peru">
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Hapy Perú Tours, te presenta temas interesantes para disfrutar mejor el turismo en Perú" />
    <meta property="og:description"
        content="Blog de turismo en Perú, naturaleza, gastronomía, cultura e historia, aventura, entretenimiento y uno de los legados más impresionantes del planeta."" />
    <meta property="og:image" content="https://happyperutours.com/img/happy-peru-tours-travel-agency.jpg" />
    <link rel="canonical" href="https://happyperutours.com/blog-peru-castellano">
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
                        onclick="window.location.href='{{ route('blog-english') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('blog-portugues') }}'">Portugués</button></li>
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
            <h1 class="text-center h1-pages" style="color: #fff; margin-top:5em">
                <?php $titulo = 'Peru Blog';
                echo $titulo; ?>
            </h1>
        </div>
    </div>
    </div>
    <div class="hero"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Blog turismo</o>
                <m>Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <p>
                Naturaleza, gastronomía, cultura e historia, aventura, entretenimiento y uno de los legados más
                impresionantes del planeta. Un viaje a Perú es, posiblemente, uno de los que mayor riqueza natural,
                cultural e histórica puede ofrecer al viajero atravesando lugares emblemáticos como el Valle sagrado, el
                Cañon del Colca, el Lago Titicaca o el oásis de Huacachina para alcanzar poblaciones como Arequipa o
                Cuzco o emplazamientos mágicos como los geoglifos de las Líneas Nazca, sin olvidar la majestuosa ciudad
                de Machu Picchu, su rica variedad de platos típicos (desde Ceviche al Cuy) o la selva amazónica.
                Conoce las últimas noticias de la red, lee las historias de alto impacto de nuestros emprendedores y
                únete a la conversación.
            </p><br>
            <p class="text-center">
                <img class="img-fluid mapa-img" src="{{ asset('img/blog/el-peru-en-el-mapa-del-mundo.png') }}"
                    alt="">
            </p><br><br><br>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Temas de turismo Perú</h2><br><br>
            </div>
            <div class="full-width paucartambo">
                <div class="black">
                    <h2>Mirador Paucartambo</h2>
                    <p>Una espectacular vista de la salida del sol en el mirador de 3 Cruces</p>
                    <button> <a href="{{route('mirador-paucartambo')}}">Leer articulo</a>
                    </button>
                </div>
            </div>
            <div class="full-width atracciones">
                <div class="black">
                    <h2>Cusco Turístico</h2>
                    <p>Los Principales Atractivos Turísticos de Cusco</p>
                    <button> <a href="blog/blog-castellano/atracciones-turisticas-de-cusco">Leer articulo</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="full-width inca-trail">
                <div class="black">
                    <h2>Camino Inca</h2>
                    <p>Qué necesitas saber sobre el Camino Inca</p>
                    <button> <a href="blog/blog-castellano/que-necesitas-saber-sobre-el-camino-inca">Leer articulo</a>
                    </button>
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
                    <p>Capital del florklore peruano</p>
                    <button> <a href="blog/blog-castellano/informacion-turistica-puno">Leer articulo</a> </button>
                </div>
            </div>

        </div>
    </div>


    @include('layouts.foot-castellano')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
