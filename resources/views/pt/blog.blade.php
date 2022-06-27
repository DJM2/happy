<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Peru tourism Blog | Happy Perú tours</title>
    <meta name="description"
        content="We offer you a wonderful trip to Machu Picchu, surrounded by a beautiful Andean landscape that you can enjoy thanks to the widest and highest panoramic.">
    <meta name="keywords"
        content="First class, Perurail first class, Perurail trail, inca trek, Perurail tour train, perurail to machu picchu, train to machu picchu, exclusive train, inca rail train, inca rail, peru rail train">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PeruRail Vistadome Train tour | Happy Perú tours" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/inca-rail-tour-train.webp" />
    <link rel="canonical" href="https://happyperutours.com/en/perurail-sacred-valley-tour">
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
            <li><button class="btn-lang" onclick="window.location.href='{{route('blog-english')}}'">English</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{route('blog-castellano')}}'">Español</button ></li>
        </ul></li>
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
                Peru Blog
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
                <img class="img-fluid mapa-img" src="{{ asset('img/blog/el-peru-en-el-mapa-del-mundo.png') }}" alt="">
            </p><br><br><br>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Peru tourism topics</h2><br><br>
            </div>
            <div class="full-width inca-trail">
                <div class="black">
                    <h2>Inca trail</h2>
                    <p>What you need to know about the Inca Trail</p>
                    <button> <a href="blog/blog-ingles/what-you-need-to-know-about-inca-trail">Read article</a>
                    </button>
                </div>
            </div>
            <div class="full-width food">
                <div class="black">
                    <h2>Peruvian Gastronomy</h2>
                    <p>The exquisite Peruvian Gastronomy</p>
                    <button> <a href="blog/blog-ingles/peruvian-gastronomy">Read article</a> </button>
                </div>
            </div>
            <div class="full-width vinicunca">
                <div class="black">
                    <h2>Vinicunca</h2>
                    <p>Better known as 'Rainbow Mountain'</p>
                    <button> <a href="blog/blog-ingles/vinicunca">Read article</a> </button>
                </div>
            </div>
            <div class="full-width puno">
                <div class="black">
                    <h2>Puno</h2>
                    <p>Capital of Peruvian folklore</p>
                    <button> <a href="blog/blog-ingles/puno-tourist-information">Read article</a> </button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.english-foot')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
