<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Happy Perú Tours Terms and Conditions</title>
    <meta name="description"
        content="Terms and conditions for happy Perú Tours">
    <link rel="canonical" href="https://happyperutours.com/terms-and-conditions" />
    <meta property="og:image" content="https://happyperutours.com/img/panoramic/terms-and-conditions-happy-peru-tours.webp" />
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

    @include('layouts.english')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> English</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang" onclick="window.location.href='{{ route('terminos') }}'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('terminos') }}'">Portugués</button ></li>
        </ul></li>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <div class="container form">
        <div class="abs-center form-index">
            <h1 class="text-center h1-pages" style="color: #fff; margin-top:2em">
                <?php $titulo = 'Terms & Conditions'; echo $titulo; ?>        
            </h1>
        </div>
    </div>
    </div>
    <div class="terms"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-happy" style="margin-bottom: 1em; text-transform:uppercase">Terms and Conditions Happy Perú Tours</h2>
                    <p class="p-tours">
                        Perú is one of the world’s most varied countries. It is a multicultural nation, filled with
                        traditions, a unique gastronomy and vast natural reserves. It is home to 12 <fuerte> UNESCO
                        </fuerte> World Heritage
                        Sites and 84 of the planet’s 117 life zones. Peru is situated in the western part of South
                        America
                        and shares borders with Ecuador, Colombia, Brazil, Bolivia and Chile. Its enormous territory,
                        covering more than 1.2 million square kilometers, is composed of three regions: Coast, Highlands
                        and
                        Jungle. Its current population exceeds 31.5 million inhabitants.

                        Spanish is the official language of Peru; however, 47 indigenous languages are also spoken in
                        the
                        country, including <fuerte> Quechua</fuerte> and Aymara.
                    </p>
                </div>
                <div class="col-lg-12">
                    <img src="{{ asset('img/panoramic/machu-picchu-panoramico.jpg') }}" alt="" width="100%">
                    <span>Photo: </span><a href="" class="a-seo">Vinicunca (Rainbow Mountain)</a>
                </div>
            </div>
        </div>
      
    </section>

    @include('layouts.english-foot')

</body>

</html>
