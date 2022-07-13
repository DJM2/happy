<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>7 Lagoas Ausangate |Agência de viagens Happy Peru Tours</title>
    <meta name="description"
        content="A grande cordilheira dos Andes e suas majestosas montanhas cobertas de neve, Cusco não é estranho a essas maravilhas, dentro da cordilheira de Vilcanota tem belas montanhas.">
    <meta name="keywords"
        content="7 lagoas, 7 lagoas Ausangate, passeio pelo Ausangate, passeio 7 lagoas, passeio Ausangate, majestoso Ausangate, passeio 7 lagoas pelo Ausangate">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="7 Lagoas Ausangate | Agência de viagens Happy Peru Tours" />
    <meta name="description"
        content="A grande cordilheira dos Andes e suas majestosas montanhas cobertas de neve, Cusco não é estranho a essas maravilhas, dentro da cordilheira de Vilcanota tem belas montanhas." />
    <meta property="og:image" content="https://happyperutours.com/img/galeria/ausangate-tour.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/7-lagoas-tour">
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
            <li><button class="btn-lang" onclick="window.location.href='{{ route('7-lakes-tour') }}'">English</button>
            </li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('7-lagunas-tour') }}'">Español</button>
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
                <h1 class="text-center h1-pages">
                    <?php $titulo = 'Tour 7 lagoas - Ausangate';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Ausangate&nbsp;&nbsp;
                    <i class="icon-dollar"></i> <?php $precio = 100;
                    echo $precio; ?>.00
                </p>
                @if (session()->has('flash'))
                    <div style="text-align:center" class="alert alert-success alert-dismissible fade show"
                        role="alert">
                        <p class="text-center">Sua mensagem foi enviada com sucesso, responderemos o mais breve possível
                            possível.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </p>
                    </div>
                @endif
            </div>
        </div>
        </div>
        <div class="lares"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Ausangate, </o>
                    <m>Passeio pelas 7 lagoas</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="humantay-lagoa">
                                <p>Lagoa Humantay Tour</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Full day</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Queswachaca Tour</p>
                            </a>
                            <a href="vinicunca-montanha">
                                <p>Vinicunca: Montanha de Cores</p>
                            </a>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>
                            <a href="happy-experiencia-tour">
                                <p>Happy Experience Tour Exclusivo</p>
                            </a>
                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Full Day</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Dificuldade</th>
                                    <th scope="col">Tempo de caminhada</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Moderado</td>
                                    <td>5 horas</td>
                                    <td>1 dia</td>
                                    <td>US$ 100,00 por adulto</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="h5-tours">Visão global:</h5>
                        <p class="p-tours">
                            A Grande Cordilheira dos Andes e suas majestosas montanhas cobertas de neve, Cusco não é
                            estranho a essas maravilhas, dentro da cordilheira de Vilcanota tem belas montanhas cobertas
                            de neve, como o nevado AUSANGATE (6384 m) localizado dentro das 5 montanhas cobertas de neve
                            mais importantes do Peru. O passeio pelas 7 lagoas é um passeio de 1 dia pelas montanhas
                            nevadas de Ausangate e Qayangate onde será feito um passeio para apreciar as belezas que a
                            natureza nos oferece, mostrando-nos lindas Lagoas de diferentes cores com nomes indígenas
                            quechuas dados pelos povos locais e transmitido de geração em geração, desfrute também dos
                            banhos termais naturais de Pacchanta.
                        </p><br>
                        <h5 class="h5-tours">Roteiro:</h5>

                        <p class="p-tours">
                            O guia irá buscá-lo no seu hotel às 4:00 da manhã para ir à Comunidade de Pacchanta (4800m),
                            com duração de 3 horas em carro privativo. Aqui tomaremos o café da manhã em uma casa de
                            família local, então nos preparamos para iniciar nossa aventura de 5 horas de caminhada para
                            visitar as lindas lagoas de diferentes cores (turquesa, azul, verde, vermelho) que a serra
                            de Vilcanota nos mostra, algumas com seus nomes nativos em quechua como: Orqo Otorongo,
                            China Otorongo, Puca Cocha, Alqa Cocha, Ccomer Cocha, Azul Cocha e Pata Cocha. No caminho de
                            volta para Pacchanta, o almoço estará pronto para ser degustado. Neste lugar também podemos
                            visitar as águas termo-medicinais para um banho relaxante antes de retornar à cidade de
                            Cusco; A chegada ao hotel será por volta das 19h00.
                        </p>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Inclui:
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &check; Transporte turístico <br>
                                        &check; Guia turístico profissional bilíngüe<br>
                                        &check; Buffet de café da manhã<br>
                                        &check; Almoço Buffet<br>
                                        &check; Ingreso para as lagoas<br>
                                        &check; Pagamento pelo uso da estrada<br>
                                        &check; Maleta de Primeiros socorros e oxigênio
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Não inclui:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10008; Bebidas extras <br>
                                        &#10008; Cavalos<br>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            O que você precisa trazer:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10034; Passaporte original<br>
                                        &#10034; Protetor solar<br>
                                        &#10034; Repelente de mosquitos<br>
                                        &#10034; Snacks (chocolates, dulces, frutos secos etc.) <br>
                                        &#10034; Toallas y/o ropa de baño si va usar las aguas termo medicinales<br>
                                        &#10034; Portabebidas <br>
                                        &#10034; Poncho de lluvia <br>
                                        &#10034; Polos extra <br>
                                        &#10034; Alcohol en gel <br>
                                        &#10034; Bastones de caminata <br>
                                        &#10034; Sandalias <br>
                                        &#10034; Gorras para el sol <br>
                                        &#10034; Dinero extra <br>
                                        &#10034; Botiquín o medicinas personales

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="notas">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseNotas" aria-expanded="false"
                                            aria-controls="collapseNotas">
                                            Anotações importantes:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNotas" class="collapse" aria-labelledby="notas"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10034; Saídas diárias.<br>
                                        &#10034; Os preços são por pessoa e expressos em dólares americanos (US $).<br>
                                        &#10034; Os preços não incluem impostos (18%). <br>
                                        &#10034; Assim que a reserva for aceite, o passageiro deve enviar por e-mail a cópia
                                        do seu passaporte ou carteira de identidade de forma obrigatória. <br>
                                        &#10034; Para fazer sua reserva solicitamos o pagamento de 50%.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ShareThis BEGIN -->
                        <p style="padding-top: 2em; color:#000" class="text-center">Compartilhar</p>
                        <div class="sharethis-inline-share-buttons"></div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0&appId=588015035734857&autoLogAppEvents=1"
                            nonce="RA0e6tQN"></script>
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/7-lagoas-tour"
                            data-width="100%" data-numposts="5"></div>
                        <!-- ShareThis END -->

                    </div>
                    <div class="col-lg-3">
                        <div class="similares">
                            <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 100.00 <i
                                    class="icon-info-circle price-info" data-title="Preço por adulto"></i></h4>
                            @include('layouts.book-portugues')
                        </div>
                    </div>
                </div>
                <!-- Gallery -->
                <h3 class="h2-happy">Galeria de imagens</h3>
                <div class="photo-gallery" style="padding-bottom: 3em">
                    <div class="container">
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/ausangate-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/ausangate-tour.jpg') }}"
                                        alt="tour ausangate">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/tour-7-lagoon.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/tour-7-lagoon.jpg') }}"
                                        alt="7 lagunas tour">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/7-lagoons-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/7-lagoons-tour.jpg') }}"
                                        alt="tour 7 lagunas">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/ausangate-7-lagoons.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/ausangate-7-lagoons.jpg') }}">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/ausangate-tour-7-lagoons.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/ausangate-7-lagoons-tour.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 display2">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="humantay-lagoa">
                                <p>Lagoa Humantay Tour</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Full day</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Queswachaca Tour</p>
                            </a>
                            <a href="vinicunca-montanha">
                                <p>Vinicunca: Montanha de Cores</p>
                            </a>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>
                            <a href="happy-experiencia-tour">
                                <p>Happy Experience Tour Exclusivo</p>
                            </a>
                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Full Day</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.foot-portugues')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
