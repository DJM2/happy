<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Tour al Valle Sagrado de los Incas | Travel Agency Perú</title>
    <meta name="description"
        content="El Tour al Valle Sagrado de los Incas el cual dura todo el día te llevará a los lugares más clásicos; PISAQ sitio arqueológico, MERCADO TRADICIONAL, OLLANTAYTAMBO Y CHINCHERO.">
    <meta name="keywords"
        content="Cusco, Tour Valle Sagrado, Valle Sagrado de los Incas, Valle Sagrado full day, Tour a Pisaq, Tour a Ollantaytambo, chinchero, Valle sagrado de los incas, Inca Tours, tours exclusivos en el valle sagrado">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tour al Valle Sagrado de los Incas | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/tour-valle-sagrado-ollantaytambo-pinkuylluna.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/valle-sagrado-full-day">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('sacred-valley-of-the-incas') }}'">English</button></li>
            <li><button class="btn-lang" onclick="window.location.href='{{ route('vale-sagrado-dos-incas') }}'">Portugués</button ></li>
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
            <h1 class="text-center h1-tours">
                <?php $titulo='Valle Sagrado de los Incas'; echo $titulo; ?>         
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Valle Sagrado&nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 80; echo $precio; ?>.00
            </p>
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
        </div>
    </div>
    </div>
    <div class="machu"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Tour en Valle Sagrado</o>
                <m>de los Incas</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="huchuy-qosqo-a-machupicchu">
                            <p>Huchuy Qosqo y Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle</p>
                        </a>
                        <a href="tour-laguna-humantay">
                            <p>Tour Laguna Humantay</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Salkantay Tour 5 días</p>
                        </a>
                        <a href="tour-7-lagunas-ausangate">
                            <p>Ausangate 7 lagunas</p>
                        </a>
                        <a href="waqrapukara-full-day-tour">
                            <p>Tour Waqrapukara Full Day</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>4 horas</td>
                                <td>$80.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Visión general:</h5>
                    <p class="p-tours">
                        El Tour al Valle Sagrado de los Incas el cual dura todo el día te llevará a los lugares más
                        clásicos; PISAQ sitio arqueológico, MERCADO TRADICIONAL, OLLANTAYTAMBO Y CHINCHERO. El Valle
                        Sagrado llamado así por ser el principal abastecedor de alimentos del imperio incaico, se
                        asienta en las orillas del río Urubamba. Los incas construyeron centros arqueológicos, a lo
                        largo de sus riberas, que replicaban las constelaciones que ellos conocían del cielo andino por
                        lo que esto contribuye, aún más, a la hermosura de este encantador valle. En el camino de vuelta
                        a Cusco haremos una parada en CHINCHERO, con su templo colonial del siglo XVII, su sector
                        agrícola que data del tiempo de los incas y su población dedicada al arte textil ubicada en la
                        parte más alta del cusco sobre los 3700 m.s.n.m nos llevará a tener una experiencia emocionante
                        e inolvidable de nuestro recorrido.
                    </p><br>
                    <h5 class="h5-tours"> Itinerario:</h5>
                   
                    <p class="p-tours">
                        Empezamos con nuestro tour al Valle Sagrado de los Incas temprano cerca de las 08:00 hrs. Con el
                        recojo desde los puntos permitidos en el centro histórico de la ciudad, nos dirigimos al sitio
                        arqueológico de PISAQ, ubicado a 32 Km. (20 millas) desde la ciudad de Cusco, a 2,972 m.s.n.m.
                        Lugar que posee el mejor sistema de andenería logrado por los Incas en todos los Andes,
                        construcciones de arquitectura en piedra y templos importantes de la cultura inca. Podremos
                        visitar el "MERCADO INDIO" la feria de artesanías, entre las que sobresalen hermosas artesanías
                        textiles y artesanías en cerámica con reproducciones de piezas arqueológicas incaicas. Luego nos
                        dirigiremos al poblado de Urubamba, el cual se encuentra dentro del circuito del Valle Sagrado,
                        degustaremos de un delicioso almuerzo buffet con una variada gastronomía de platos locales e
                        internacionales.

                        Continuaremos nuestro recorrido y nos dirigiremos hacia el poblado de OLLANTAYTAMBO, se ubica a
                        97 Km. (60 millas) desde Cusco, a 2,846 m.s.n.m. Este poblado tiene la complejidad y belleza de
                        las construcciones incaicas y el pueblo contemporáneo. En la cumbre del complejo arqueológico
                        destacan construcciones de importancia religiosa y astronómica, así como también una vista
                        panorámica de Ollantaytambo denominado PUEBLO INCA VIVIENTE.<br><br>

                        Nos dirigimos al pueblo de Chincheros, ubicada a 28 km a una gran altitud de 3,750 m.s.n.m,
                        famoso por sus tejidos y la población más típica del Valle Sagrado de los Incas, es una ciudad
                        netamente incaica. En el Conjunto Arqueológico de Chinchero, llaman la atención sus andenes, lo
                        que permite entender que fue un centro de producción agrícola en la época inca. También se
                        construyó un almacén y se dotó a todo el complejo de un sistema de regadío muy
                        eficiente.<br><br>

                        Finalmente visitaremos el famoso mercado de Chinchero, donde los pobladores nativos, ataviados
                        con coloridos trajes típicos se aglomeran en la plaza principal para intercambiar sus productos.
                        Finalmente retornaremos a la ciudad del Cusco llegando cerca a las 19:00hrs. dejándolos cerca de
                        la Plaza de Armas del Cusco.
                    </p>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Incluye:
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &check; Transporte turístico <br>
                                    &check; Guía profesional de turismo bilingüe <br>
                                    &check; Almuerzo buffet
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        No Incluye:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Boleto turístico Cusco<br>
                                    &#10008; Bebidas extras <br>
                                    &#10008; Propinas

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Qué necesitas llevar
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Pasaporte original<br>
                                    &#10034; Bloqueador solar<br>
                                    &#10034; Cámara fotográfica<br>
                                    &#10034; Portabebidas<br>
                                    &#10034; Poncho de lluvia<br>
                                    &#10034; Alcohol en gel<br>
                                    &#10034; Gorras para el sol<br>
                                    &#10034; Dinero extra<br>
                                    &#10034; Botiquín o medicinas personales
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Notas Importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Salidas diarias.<br>
                                    &#10034; Los precios son por persona y están expresados en (US$) dólares
                                    americanos.<br>
                                    &#10034; Los precios no incluyen el IGV (18%). <br>
                                    &#10034; Una vez aceptada la reserva el pasajero debe enviar por e-mail la copia de
                                    su pasaporte o cédula de identidad en forma obligatoria. <br>
                                    &#10034; Para concretar su reserva solicitamos el pago del 50%.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ShareThis BEGIN -->
                    <p style="padding-top: 2em; color:#000" class="text-center">Compartir</p>
                    <div class="sharethis-inline-share-buttons"></div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                                        nonce="RA0e6tQN"></script>
                    <div class="fb-comments" data-href="https://happyperutours.com/es/valle-sagrado-full-day"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->
                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 80.00 <i
                            class="icon-info-circle price-info" data-title="Precio por adulto"></i></h4>
                        @include('layouts.book-castellano')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Galería de Imágenes</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-machu-picchu-andenes.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-machu-picchu-andenes.webp') }}"
                                    alt="Machu Picchu andenes" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-ollantaytambo-fortaleza-inca.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-ollantaytambo-fortaleza-inca.webp') }}"
                                    alt="Tour Sacred Valley Ollantaytambo" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-machu-picchu-panoramico.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-machu-picchu-panoramico.webp') }}"
                                    alt="Machu Picchu panoramic tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-chinchero-templo-exterior.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-chinchero-templo-exterior.webp') }}"
                                    alt="Temple of CHinchero" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-pisaq-ruinas.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-pisaq-ruinas.webp') }}"
                                    alt="Pisaq in the Sacred Valley" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/tour-valle-sagrado-ollantaytambo-pinkuylluna.webp') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/tour-valle-sagrado-ollantaytambo-pinkuylluna.webp') }}"
                                    alt="Pinkuylluna tour Ollantaytambo" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Similar Tours</h4>
                    <div class="similares">
                        <a href="cusco-city-tour">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="">
                            <p>Inka jungle</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.foot-castellano')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
