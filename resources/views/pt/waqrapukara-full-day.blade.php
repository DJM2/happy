<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Waqrapukara excursão de dia inteiro | Travel Agency Perú</title>
    <meta name="description"
        content="Cujos termos quíchuas significam 'fortaleza em forma de chifres', é uma nova rota de aventura para descobrir um novo sítio arqueológico inca...">
    <meta name="keywords"
        content="Cujos termos quíchuas significam 'fortaleza em forma de chifres', é uma nova rota de aventura para descobrir um novo sítio arqueológico inca...">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Waqrapukara excursão de dia inteiro | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/waqrapukara-happy-peru.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/waqrapukara-full-day">
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
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('waqrapukara-tour') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('waqrapukara-tour-español') }}'">Español</button>
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
                <h1 class="text-center h1-tours">
                    <?php $titulo = 'Passeio a Waqrapukara';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Waqrapukara&nbsp;&nbsp;
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
        <div class="waqra"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Waqrapukara</o>
                    <m>Passeio de dia inteiro</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">

                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>
                            <a href="passeio-choquequirao-4-dias">
                                <p>Choquequirao passeio 4 dias</p>
                            </a>
                            <a href="humantay-lagoa">
                                <p>Lagoa Humantay</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Full day</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Qeswachaca Tour</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Dificuldade</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Duração da caminhada</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Moderado</td>
                                    <td>1 dia</td>
                                    <td>2 horas</td>
                                    <td>US$ 100.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="h5-tours">Visão global:</h5>
                        <p class="p-tours">
                            Cujos termos quechua significam "fortaleza em forma de chifres", é uma nova rota de aventura
                            para descobrir um novo Sítio Arqueologico inca, principalmente para uso religioso;
                            localizado num magnífico vale de rochas com uma vista impressionante do Canyon Apurímac,
                            onde corre um dos rios mais importantes de Cusco chamado APURIMAC.
                        </p><br>
                        <h5 class="h5-tours">Roteiro:</h5>
                        <p class="p-tours">
                            A saída do hotel será às 4h30, tomaremos a rota Sul da cidade de Cusco e após de 2 horas de
                            ônibus chegaremos a SANGARARA, aqui tomaremos o café da manhã; Continuaremos por volta de 30
                            minutos até o povoado de PITUMARCA, depois seguiremos para PUNTA CARRETERA ou estacionamento
                            onde começaremos nossa aventura; Durante a viagem observaremos alguns animais domésticos e
                            selvagens de nossa Serra Cusqueña, também desfrutaremos de algumas pequenas lagoas de
                            formação natural pela água da chuva; A caminhada é feita em terreno plano e depois desce e
                            chega-se a WAQRAPUKARA (4300 m.a.s.l.), o tempo estimado de caminhada é de 3 horas. Uma vez
                            no local teremos tempo para explorar e fotografar o Sítio Arqueológico composto por dois
                            importantes Setores, o Religioso ou Cerimonial e o Agrícola, depois de desfrutar também de
                            nosso lanche iniciaremos o retorno pelo mesmo caminho até PITUMARCA onde o ônibus nos espera
                            para retornar a Cusco. Chegada na cidade às 19h00 rumo ao hotel.
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
                                        &check; Guia profissional bilíngüe <br>
                                        &check; Café da manhã<br>
                                        &check; Lanche<br>
                                        &check; Bilhete de ingreso<br>
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
                                        &#10008; Bebidas extra<br>
                                        &#10008; Cajados<br>
                                        &#10008; Remédios pessoais
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Dicas:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10034; Pasaporte original <br>
                                        &#10034; Protetor solar<br>
                                        &#10034; Câmera fotográfica<br>
                                        &#10034; Garrafa de água<br>
                                        &#10034; Capa de chuva<br>
                                        &#10034; Roupas quentes (luvas, boné, xaile)<br>
                                        &#10034; Álcool em gel<br>
                                        &#10034; Chapéu<br>
                                        &#10034; Dinheiro extra<br>
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
                                        &#10034; Assim que a reserva for aceite, o passageiro deve enviar por e-mail a
                                        cópia
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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/waqrapukara-full-day"
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
                                <a href="{{ asset('img/galeria/trek-to-waqrapucara.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/trek-to-waqrapucara.jpg') }}"
                                        alt="waqrapukara tour">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/waqrapucara-full-day-tour.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/waqrapucara-full-day-tour.jpg') }}"
                                        alt="waqrapukara full day">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/waqrapukara-cusco-tour.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/waqrapukara-cusco-tour.jpg') }}"
                                        alt="Waqrapukara cusco">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/waqrapukara-happy-peru.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/waqrapukara-happy-peru.jpg') }}"
                                        alt="tour a waqrapukara">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/waqrapukara-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/waqrapukara-tour.jpg') }}"
                                        alt="Tour a Waqrapukara">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/waqrapukara-tour-full-day.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/waqrapukara-tour-full-day.jpg') }}"
                                        alt="Cusco - waqrapukara">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 display2">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>
                            <a href="passeio-choquequirao-4-dias">
                                <p>Choquequirao passeio 4 dias</p>
                            </a>
                            <a href="humantay-lagoa">
                                <p>Lagoa Humantay</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Full day</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Qeswachaca Tour</p>
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
