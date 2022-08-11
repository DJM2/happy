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
        @include('layouts.menu-portugues')
        <li class="has-children">
            <idioma><a><span class="icon-language"></span> Português</a></idioma>
            <ul class="dropdown arrow-top" style="width: 120px">
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('blog-english') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('blog-castellano') }}'">Español</button></li>
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
                <?php $titulo = 'Blog peruano';
                echo $titulo; ?>
            </h1>
        </div>
    </div>
    </div>
    <div class="hero"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Blog de turismo</o>
                <m>Perú</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <p>
                Natureza, gastronomia, cultura e história, aventura, entretenimento e uma das mais
                 impressionante no planeta. Uma viagem ao Peru é, possivelmente, uma das maiores riquezas naturais,
                 cultural e histórica pode oferecer ao viajante a travessia de lugares emblemáticos como o Vale Sagrado, o
                 Colca Canyon, Lago Titicaca ou o oásis de Huacachina para chegar a cidades como Arequipa ou
                 Cuzco ou locais mágicos como os geoglifos das Linhas de Nazca, sem esquecer a majestosa cidade
                 de Machu Picchu, sua rica variedade de pratos típicos (de Ceviche a Cuy) ou da selva amazônica.
                 Receba as últimas notícias da rede, leia as histórias de alto impacto de nossos empreendedores e
                 junte-se à conversa.
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
                <h2 class="text-center">Tópicos de turismo no Peru</h2><br><br>
            </div>
            <div class="full-width paucartambo">
                <div class="black">
                    <h2>Miradouro 3 Cruces</h2>
                    <p>Uma vista espetacular do nascer do sol no mirante 3 Cruces Paucartambo</p>
                    <button> <a href="{{route('mirador-paucartambo')}}">Leia o artigo</a>
                    </button>
                </div>
            </div>
            <div class="full-width atracciones">
                <div class="black">
                    <h2>Turista Cuzco</h2>
                    <p>As principais atrações turísticas de Cusco</p>
                    <button> <a href="{{route('blog-atracciones-portugues')}}">Leia o artigo</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="full-width inca-trail">
                <div class="black">
                    <h2>Trilha inca</h2>
                    <p>O que você precisa saber sobre a Trilha Inca</p>
                    <button> <a href="{{route('blog-trilha-inca')}}">Leia o artigo</a>
                    </button>
                </div>
            </div>
            <div class="full-width food">
                <div class="black">
                    <h2>Gastronomia do Peru</h2>
                    <p>A requintada gastronomia peruana.</p>
                    <button> <a href="{{route('blog-gastronomia-portugues')}}">Leia o artigo</a> </button>
                </div>
            </div>
            <div class="full-width vinicunca">
                <div class="black">
                    <h2>Vinicunca</h2>
                    <p>A famosa montanha de 7 cores</p>
                    <button> <a href="{{route('blog-vinicunca-portugues')}}">Leia o artigo</a> </button>
                </div>
            </div>
            <div class="full-width puno">
                <div class="black">
                    <h2>Puno</h2>
                    <p>Capital do folclore peruano</p>
                    <button> <a href="{{route('blog-puno-portugues')}}">Leia o artigo</a> </button>
                </div>
            </div>

        </div>
    </div>


    @include('layouts.foot-portugues')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
