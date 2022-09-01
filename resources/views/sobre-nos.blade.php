<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>About Happy Perú tours | Travel agency for Perú</title>
    <meta name="description"
        content="We offer you a wonderful trip to Machu Picchu, surrounded by a beautiful Andean landscape that you can enjoy thanks to the widest and highest panoramic.">
    <meta name="keywords"
        content="First class, Perurail first class, Perurail trail, inca trek, Perurail tour train, perurail to machu picchu, train to machu picchu, exclusive train, inca rail train, inca rail, peru rail train">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PeruRail Vistadome Train tour | Happy Perú tours" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/inca-rail-tour-train.webp" />
    <link rel="canonical" href="https://happyperutours.com/sobre-nos">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('about-us') }}'">English</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('nosotros') }}'">Español</button></li>
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
            <h1 class="text-center h1-pages" style="color: #fff; margin-top:2.5em">
                <?php $titulo = 'Aobre Happy perú Tours';
                echo $titulo; ?>
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
                        Somos uma equipa profissional com mais de 15 anos de experiência como Guias Oficiais de
                        Turismo na cidade de Cusco, somos uma empresa 100% local, estamos comprometidos em formar uma
                        empresa com amplo conhecimento das necessidades que os viajantes buscam encontrar em cada
                        passeio menor do que é. O amor pelo nosso trabalho, o amor pela natureza, o respeito pelas
                        montanhas, respeito pelo nosso povo local de antigos costumes e tradições nos levou a este
                        projeto a fim de proporcionar experiências inesquecíveis com todos que desejam conhecer e
                        compartilhar nossa cultura peruana. <br>

                        Nosso compromisso com nossas comunidades locais; é gerar oportunidades de trabalho, apoiar
                        em sua renda econômica e melhorar sua qualidade de vida; usamos os recursos naturais de
                        forma sustentável e responsável.<br>

                        Nosso compromisso com nossos clientes; é atender às suas expectativas, atendendo aos padrões
                        de qualidade com honestidade e transparência; proporcionando profissionalismo, segurança e
                        confiança.
                    </p>
                    <div class="col-lg-12 text-center" >
                        <div class="Iam" style="font-size: 25px">
                            <p>Bem-vindo a Happy Perú Tours</p>
                            <b>
                                <div class="innerIam">
                                    <o>A melhor experiência no Peru.</o><br />
                                    <m>Empresa 100% peruana.</m><br />
                                    <o>Nosso objetivo é a sua felicidade.</o><br />
                                    <m>Fornecemos as melhores informações.</m><br />
                                    <o>Viva uma experiência inesquecível.</o>
                                </div>
                            </b>
                        </div>
                    </div><br><br><br><br>
                    <p class="text-center">
                        <img class="img-fluid mapa-img" src="{{ asset('img/blog/el-peru-en-el-mapa-del-mundo.png') }}"
                            alt="">
                    </p><br><br><br>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.foot-portugues')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
