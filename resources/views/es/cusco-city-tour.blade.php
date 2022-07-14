<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Cusco, clasico City tour | Travel Agency Perú</title>
    <meta name="description" content="Full day city tour en Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay">
    <meta name="keywords"
        content="Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay, templo de la merced, catedral del cusco, saqsayhuaman, visita cusco, tour en cusco, conoce la ciudad del cusco, visitar saqsayhuaman">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cusco, clasico City tour | Travel Agency Perú" />
    <meta name="description" content="Full day city tour en Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay" />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/cusco-city-tour">
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
                        onclick="window.location.href='{{ route('city-tour-english') }}'">English</button></li>
                <li><button class="btn-lang"
                        onclick="window.location.href='{{ route('city-tour-portugues') }}'">Portugués</button></li>
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
                <?php $titulo = 'Cusco City Tour';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 50;
                echo $precio; ?>.00
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
    <div class="traditional"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Cusco</o>
                <m>City Tour Full day</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour full day</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle 4 días</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Lares trek 4d/3n</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="tour-laguna-humantay">
                            <p>Tour Laguna Humantay</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Vale Sagrado 2 días</p>
                        </a>
                        <a href="tour-salkantay-4-dias">
                            <p>Tour Salkantay 4 días</p>
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
                                <td>$50.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        <fuerte>UNESCO</fuerte> declaró a Cusco como centro del patrimonio mundial en 1983, por
                        su belleza e historia con sitios arqueológicos incas, construcciones coloniales y virreinales,
                        este tour será la mejor forma de empezar a conocer Cusco; ubicado en el corazón de los andes
                        rica en cultura y tradiciones, durante su recorrido nos conecta con su pasado considerado
                        también como un museo vivo. Para realizar el city tour no implica esfuerzo físico y es muy
                        recomendado para una buena aclimatación antes de iniciar una caminata.
                    <p>
                    <h5> Itinerario:</h5>
                    <p class="p-tours">
                        Recojo el hotel 13:00 hrs, iniciamos el recorrido en el templo del QORICANCHA o templo del SOL,
                        este fue el más importante en el tiempo de los incas recorreremos el lugar aproximadamente 40
                        minutos visitando cada templo como: el templo del sol, las estrellas, la luna y el relámpago,
                        recibirán información acerca de la importancia y funciones que tuvieron en el pasado.
                        Continuaremos el recorrido dirigiéndonos al complejo arqueológico de SACSAYHUAMAN, con una
                        visita de 45 minutos; considerado como uno de los sitios arqueológicos más grandes e importantes
                        de Cusco; lugar donde se realiza actualmente cada 24 de junio la festividad dedicada al Padre
                        SOL llamado INTI RAYMI, luego visitaremos tres sitios arqueológicos más que son QENQO,
                        PUKAPUKARA Y TAMBOMACHAY, todos con una visita de no menos de 40 minutos, todos ellos con la
                        misma importancia y funciones netamente religiosas para los incas. Finalmente retornaremos a la
                        ciudad para visitar la catedral del Cusco construida en el siglo XVI y XVII, en el lugar que,
                        durante el incanato, fuera ocupado tanto por el Suntur Wasi como por el Kiswar Kancha o Palacio
                        del Inca Viracocha. Terminando el tour a las 6:00pm.
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
                                    &check; Transporte turístico<br>
                                    &check; Guía profesional bilingüe
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
                                    &#10008; Boleto turístico Cusco <br>
                                    &#10008; Ticket de ingreso al Qoricancha <br>
                                    &#10008; Ticket de ingreso a la Catedral<br>
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
                                    &#10034; Bloqueador solar <br>
                                    &#10034; Cámara fotográfica <br>
                                    &#10034; Portabebidas <br>
                                    &#10034; Poncho de lluvia <br>
                                    &#10034; Alcohol en gel <br>
                                    &#10034; Gorras para el sol <br>
                                    &#10034; Dinero extra <br>
                                    &#10034; Botiquín o medicinas personaless
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/cusco-city-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 50.00 <i
                                class="icon-info-circle price-info" data-title="Precio por adulto"></i></h4>
                        @include('layouts.book-castellano')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Galeria de Imágenes</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-qoricancha.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-plaza-de-armas.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-plaza-de-armas.jpg') }}" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-sacsayhuaman.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-sacsayhuaman.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha-sincretismo.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-qoricancha-sincretismo.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-tambomachay.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay-fuente.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-tambomachay-fuente.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 display2">
                    <div class="similares">
                        <h4 class="text-center">Tours Similares</h4>
                        <a href="happy-city-tour-full-day">
                            <p>Happy City Tour full day</p>
                        </a>
                        <a href="huchuy-qosqo-a-machu-picchu">
                            <p>Huchuy Qosqo & Machu Picchu</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle 4 días</p>
                        </a>
                        <a href="lares-trek-4-days">
                            <p>Caminata a Lares por 4 días</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                            <a href="tour-laguna-humantay">
                                <p>Tour Laguna Humantay</p>
                            </a>
                            <a href="valle-sagrado-2-dias">
                                <p>Vale Sagrado 2 días</p>
                            </a>
                            <a href="tour-salkantay-4-dias">
                                <p>Tour Salkantay 4 días</p>
                            </a>
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
