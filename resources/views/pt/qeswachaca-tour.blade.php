<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Passeio Queshuachaca| Travel Agency Perú Happy Perú Tours</title>
    <meta name="description"
        content="Q'eswachaka tour O grande red de caminos incas chamado QHAPAQ ÑAN, é o único meio de comunicação que existe desde tempos muito remotos, atualmente para os Cusqueños.">
    <meta name="keywords"
        content="Cusco, Queswachaca, Queswachaca tour, Queshuachaca happy peru tour, happy peru, Queshuachaca trek, Tour a qeswachaka, qehuachaca, tour qeshuachaca, puente qeswachaca tour">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Passeio Queshuachaca| Travel Agency Perú Happy Perú Tours" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/qeswachaca-bridge.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/qeswachaca-tour">
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
                    onclick="window.location.href='{{ route('qeswachaca-tour-ingles') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('qeswachaca-español') }}'">Español</button>
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
                    <?php $titulo = 'Visite um Qeswachaka';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Qeswachaca&nbsp;&nbsp;
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
        <div class="qeswachaca"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Tour Q'eswachaka</o>
                    <m>Cusco</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="inca-rail-360°">
                                <p>Inca Trail 360° Passeio de Trem </p>
                            </a>
                            <a href="inca-rail-primeira-classe">
                                <p>Inca Rail Primeira Classe Passeio de Trem </p>
                            </a>
                            <a href="inca-rail-voyager">
                                <p>Inca Rail Voyager Passeio de Trem</p>
                            </a>
                            <a href="perurail-vistadome">
                                <p>Peru Rail Vistadome Passeio de Trem</p>
                            </a>
                            <a href="perurail-hiram-binghan">
                                <p>Trem exclusivo Hiram Bingham</p>
                            </a>
                            <a href="happy-experiencia-tour">
                                <p>Happy Experience Passeio Exclusivo</p>
                            </a>
                            <a href="peru-rail-expedition">
                                <p>Peru Rail Expedition Trem</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Full Day</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Dificuldade</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fácil</td>
                                    <td>1 dia</td>
                                    <td>US$ 100,00</td>

                                </tr>
                            </tbody>
                        </table>
                        <h5 class="h5-tours">Visão global:</h5>
                        <p class="p-tours">
                            A grande rede de estradas incas chamada QHAPAQ ÑAN, foi o único meio de comunicação que
                            existiu desde tempos muito remotos, atualmente para os Cusqueños é um orgulho ter setores,
                            mesmo que lhes faltem essas estradas reais de nossos ancestrais; nosso Cusco tem 2 rios
                            importantes o VILCANOTA, APURÍMAC e pequenos afluentes a estes; que também tinha que ser
                            conectado e para isso havia PONTES PENDURADAS feitas de fibras vegetais. QESWACHACA é uma
                            dessas pontes que vai passando de geração em geração e a sua renovação é feita uma vez por
                            ano.
                        </p><br>
                        <h5 class="h5-tours"> Roteiro:</h5>

                        <p class="p-tours">
                            O guia irá buscá-lo no seu hotel às 4:30 da manhã, faremos a rota ao Sul da cidade tendo
                            nossa primeira parada no bairro CUSIPATA onde um café da manhã buffet nos espera em uma casa
                            de família local, continuando nosso passeio faremos uma pequena parada no mirante do
                            distrito de COMBAPATA, poderemos apreciar a união de dois rios (o rio SALCCA que une o
                            grande rio APURÍMAC) continuamos por volta de 30 minutos de ônibus e chegaremos ao distrito
                            de YANAOCA e mais 30 minutos para chegar ao distrito de QEWE onde está localizada a famosa
                            PONTE QESWACHACA.<br><br>
                            É construída com fibra vegetal principalmente de ICHU ou PALHA ANDINA, tendo quase 30 metros
                            de comprimento. A reforma da ponte é realizada uma vez por ano no mês de Junho, é um projeto
                            feito por moradores das comunidades locais do entorno; Teremos tempo suficiente para
                            explorar o local, tirar fotos, receber as informações do guia, no caminho de volta faremos
                            paradas nas lagoas de PAMPAMARCA, ASNACOCHA, ACOPIA e POMACANCHI; Depois de desfrutar desses
                            momentos inesquecíveis em nossas quatro lagoas, continuaremos nossa aventura até CUSIPATA,
                            local de nosso almoço buffet para finalmente retornar à cidade de Cusco chegando às 18:00
                            hrs. ao hotel.
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
                                        &check; Buffet de café da manhã <br>
                                        &check; Almoço Buffet<br>
                                        &check; Bilhete de entrada<br>
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
                                        &#10034; Passaporte original <br>
                                        &#10034; Protrtor solar<br>
                                        &#10034; Câmera fotográfica<br>
                                        &#10034; Garrafa de água<br>
                                        &#10034; Capa de chuva <br>
                                        &#10034; Álcool em gel <br>
                                        &#10034; Chapéubr>
                                        &#10034; Dinheiro extra
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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/qeswachaca-tour"
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
                                <a href="{{ asset('img/galeria/QESWACHACA.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/QESWACHACA.jpg') }}"
                                        alt="qeswachaca">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/qeswachaca-bridge.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/qeswachaca-bridge.jpg') }}"
                                        alt="Tour a qeswachaca">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 display2">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="inca-rail-360°">
                                <p>Inca Trail 360° Passeio de Trem </p>
                            </a>
                            <a href="inca-rail-primeira-classe">
                                <p>Inca Rail Primeira Classe Passeio de Trem </p>
                            </a>
                            <a href="inca-rail-voyager">
                                <p>Inca Rail Voyager Passeio de Trem</p>
                            </a>
                            <a href="perurail-vistadome">
                                <p>Peru Rail Vistadome Passeio de Trem</p>
                            </a>
                            <a href="perurail-hiram-binghan">
                                <p>Trem exclusivo Hiram Bingham</p>
                            </a>
                            <a href="happy-experiencia-tour">
                                <p>Happy Experience Passeio Exclusivo</p>
                            </a>
                            <a href="peru-rail-expedition">
                                <p>Peru Rail Expedition Trem</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Full Day</p>
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
