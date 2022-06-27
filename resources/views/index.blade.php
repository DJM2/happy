<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>Happy Perú Tours | Travel Agency Perú</title>
    <meta name="title" content="Happy Peru Tours - Travel Agency for Perú | Travel to Perú">
    <meta name="description"
        content="Happy Perú Tours, tours for Perú, Find treks, adventures and trekking tour around Perú">
	<meta property="og:description" content="Happy Perú Tours, tours for Perú. Find treks, adventures and trekking tour around Perú" />
    <meta name="keywords"
        content="peru tours, trekking to machu picchu, aguas calientes, tour for cusco, tours for lima, tours for puno, tours for arequipa, treks in cusco">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="canonical" href="https://happyperutours.com" />
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

    @include('layouts.english')
    <li class="has-children">
        <idioma><a><span class="icon-language"></span> English</a></idioma>
        <ul class="dropdown arrow-top" style="width: 120px">
            <li><button class="btn-lang" onclick="window.location='inicio'">Español</button></li>
            <li><button class="btn-lang" onclick="window.location='comecar'">Português</button ></li>
        </ul></li>
        
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
                <o>Book Perú,</o>
                <m> check Availability.</m>
            </h1>
            @if (session()->has('flash'))
            <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-center">Your message was sent successfully, we will reply as soon as possible
                    possible.
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
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" name="name" placeholder="Name:">
                    </div>
                    <div class="form-group col-md-2">
                        <input placeholder=" Date arrive" class="textbox-n" type="text" onfocus="(this.type='date')" name="da" style="border-radius: 5px;
                        border-style: none;
                        padding: 5px 0px;
                        padding-top: 0.41em;">
                    </div>
                    <div class="form-group col-md-2">
                        <input placeholder=" Date arrive" class="textbox-n" type="text" onfocus="(this.type='date')" name="do" style="border-radius: 5px;
                        border-style: none;
                        padding: 5px 0px;
                        padding-top: 0.41em;">
                        
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="adults" placeholder="Adults">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" class="form-control" name="childs" placeholder="Children">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="3" style="height: 40px"
                        placeholder="Message:"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="boton-happy">Send</button>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="Iam">
                        <p>Welcome to Happy Perú Tours</p>
                        <b>
                            <div class="innerIam">
                                <o>The best experience in Perú.</o><br />
                                <m>100% Peruvian company.</m><br />
                                <o>Our goal is your happyness.</o><br />
                                <m>We provide the best information.</m><br />
                                <o>Live an unforgettable experience.</o>
                            </div>
                        </b>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <h1 class="h2-happy">Tours for Perú</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index">
                        <a href="en/lares-trek-4-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/tour-lares-4-days-peru.jpg') }}"
                                alt="Lares tour trek">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Lares Trek 4d/3n</h5>
                            <p class="card-text">It is a good alternative to get to Machupicchu, although the
                                Lares...</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>600.00</span><br>
                            </div>
                            <a href="en/lares-trek-4-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/cusco-city-tour">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/traditional-city-tour.jpg') }}"
                                alt="Traditional City Tour">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Traditional City Tour</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Day</span>
                                <span class="price-card"><i class="icon-usd"></i>50.00</span><br>
                            </div>
                            <a href="en/cusco-city-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/happy-experience-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/happy-experience-tour-cusco-peru.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Happy Experience Tour</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Day</span>
                                <span class="price-card"><i class="icon-usd"></i>60.00</span><br>
                            </div>
                            <a href="en/happy-experience-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/salkantay-trek-tour-5-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/7-lagunas-tour.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Salkantay trek tour 5 days</h5>
                            <p class="card-text">The great mountain range of the Andes and its majestic
                                snow-capped...</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 5 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="en/salkantay-trek-tour-5-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/sacred-valley-2-days">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/short-inca-trek-to-machu-picchu.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Valle Sagrado & Machu Picchu 2D-1N</h5>
                            <p class="card-text">The Tour to the Sacred Valley of the Incas which lasts all day
                                will...</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>450.00</span><br>
                            </div>
                            <a href="en/sacred-valley-2-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/hiram-binghan-train-tour">
                            <img class="card-img-top"
                                src="{{ asset('img/thumbnail/VOYAGER-tour-by-train-in-peru.png') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Hiram Bingham Train tour</h5>
                            <p class="card-text">Visit Machu Picchu on the Hiram Bingham luxury train...</p>
                             <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 1 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>100.00</span><br>
                            </div>
                            <a href="en/hiram-binghan-train-tour" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/inca-trail-2-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/camino-inca.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Inca Trail 2 days</h5>
                            <p class="card-text">The short Inca trail of 2 days, is a journey through the last...
                            </p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 2 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>500.00</span><br>
                            </div>
                            <a href="en/inca-trail-2-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-index" style="width: 18rem;">
                        <a href="en/inca-trail-4-days">
                            <img class="card-img-top" src="{{ asset('img/thumbnail/salkantay-tour.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">Inca Trail 4 days</h5>
                            <p class="card-text">The Inca trail 4 days to Machupicchu considered one of the most
                                beautiful...</p>
							 <div class="line-card">
                                <span class="duration-card"><i class="icon-clock-o"></i> 4 Days</span>
                                <span class="price-card"><i class="icon-usd"></i>650.00</span><br>
                            </div>
                            <a href="en/inca-trail-4-days" class="boton-happy-2">More Info</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" style="padding-bottom: 5em">
                    <h2 class="h2-happy">Company stamps</h2>
                    <div class="row text-center">
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/certificado-exclusivo-happy-peru.png') }}"
                                alt="Certificado exclusive" class="img-logo" width="90px">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/tripadvisor.png') }}" alt="Certificado exclusive"
                                class="img-logo" width="120px">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/marca_peru.webp') }}" alt="Certificado exclusive"
                                class="img-logo" width="120px">
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <img src="{{ asset('img/sello-safe-travels-peru.webp') }}" alt="Certificado exclusive"
                                class="img-logo" width="220px">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!---------Prueba tours full width--------->
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
        <!-----------Fin Tours full width---------->
    </section>

    @include('layouts.english-foot')

</body>

</html>
