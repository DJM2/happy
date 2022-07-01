<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Passeio à lagoa Humantay | Travel Agency Perú</title>
    <meta name="description"
        content="LAGO HUMANTAY, hoje considerado um dos destinos turísticos naturais mais populares, localizado no sopé do nevado HUMANTAY. Excursão humana de dia inteiro.">
    <meta name="keywords"
        content="Cusco, Lago Humantay, Humantay tour, Humantay lagoa tour, Humantay Laguna tour, dia inteiro Humantay, conheça Humantay, a lagoa humantay">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tour a la laguna Humantay | Travel Agency Perú" />
    <meta property="og:description"
        content="LAGO HUMANTAY, hoje considerado um dos destinos turísticos naturais mais populares, localizado no sopé do nevado HUMANTAY. Excursão humana de dia inteiro." />
    <meta property="og:image" content="https://happyperutours.com/img/galeria/humantay-lake.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/humantay-lagoa">
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
                    onclick="window.location.href='{{ route('humantay-lake') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('laguna-humantay') }}'">Español</button>
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
                    <?php $titulo = 'Lagoa Humantay';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Humantay &nbsp;&nbsp;
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
        <div class="humantay"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Lagoa Humantay</o>
                    <m>Passeio de um dia</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">
                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Dia Inteiro</p>
                            </a>
                            <a href="7-lagoas-tour">
                                <p>Ausangate 7 lagoas</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Dia inteiro</p>
                            </a>
                            <a href="maras-moray-salineras-tour">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                            <a href="tour-happy-experience">
                                <p>Happy Experience Tour Exclusivo</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Queswachaca Tour</p>
                            </a>
                            <a href="vinicunca-tour">
                                <p>Vinicunca: Montanha de Cores</p>
                            </a>
                            <a href="cusco-city-tour">
                                <p>Cusco City Tour</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Dificuldade</th>
                                    <th scope="col">Duração da caminhada</th>
                                    <th scope="col">Duração do passeio</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fácil</td>
                                    <td>4 horas</td>
                                    <td>1 dia</td>
                                    <td>US$ 100,00 por adulto</td>

                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            <strong>LAGUNA HUMANTAY</strong>, hoje considerada um dos destinos turísticos naturais mais
                            procurados, está
                            localizada no sopé da nevada HUMANTAY, a uma altitude de 4.200 metros acima do nível do mar.
                            É uma Lagoa de águas azul-turquesa rodeada de paisagens maravilhosas. Durante a caminhada de
                            subida teremos belas vistas panorâmicas da região, acompanhadas por 2 APUS (montanhas
                            sagradas) A SALKANTAY e A HUMANTAY.
                        <p>
                        <h5>ROTEIRO:</h5>
                        <p class="p-tours">
                            Começamos nossa aventura às 4H00 com o recolho do hotel, após uma viagem de 2 horas de carro
                            chegaremos à cidade de MOLLEPATA onde teremos o café da manhã opcional, onde você pode usar
                            os banheiros e comprar alguns lanches para passear. Continuando nossa jornada teremos mais 1
                            hora e 30 minutos de carro até SORAYPAMPA (3900 M.S.N.M.) o ponto de partida de nossa
                            caminhada. A subida até a Lagoa dura 2 horas, no caminho desfrutaremos de impressionantes
                            paisagens acompanhadas de montanhas nevadas e vistas panorâmicas. No local teremos tempo
                            livre para explicações do guia, tirar fotos, explorar um pouco a região e nos encher de
                            energia natural que só se encontra nos ANDES do PERU. Felizes por nossa aventura na Lagoa,
                            retornaremos ao ponto de partida (SORAYPAMPA) com uma descida de aproximadamente 1 hora e 30
                            minutos, pegaremos nosso ônibus turístico em direção a MOLLEPATA onde degustaremos um almoço
                            para repor energias, enfim nosso ônibus nos trazerá de volta para a cidade de Cusco chegando
                            às 18:00 hrs no hotel.
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
                                        &check; Transporte turístico<br>
                                        &check; Guia turístico profissional bilíngüe<br>
                                        &check; Almoço Buffetbr>
                                        &check; Lanches<br>
                                        &check; Bilhete de ingreso <br>
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
                                        &#10008; Café da manhã<br>
                                        &#10008; Cavalo para a rota<br>
                                        &#10008; Cajados<br>
                                        &#10008; Bebidas extras
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
                                        &#10034; Remédios pessoais<br>
                                        &#10034; Passaporte original<br>
                                        &#10034; Protetor solar<br>
                                        &#10034; Câmera fotográfica<br>
                                        &#10034; Garrafa de agua<br>
                                        &#10034; Capa de chuva <br>
                                        &#10034; Roupas quentes (luvas, boné, xaile )<br>
                                        &#10034; Álcool em gel <br>
                                        &#10034; Chapéu <br>
                                        &#10034; Dinheiro extra<br>
                                        &#10034; Maleta de primeiros socorros ou medicamentos pessoais
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
                                        &#10034; Saídas diárias. <br>
                                        &#10034; Os preços são por pessoa e expressos em dólares americanos (US $).<br>
                                        &#10034; Os preços não incluem impostos (18%).<br>
                                        &#10034; Assim que a reserva for aceite, o passageiro deve enviar por e-mail a cópia do seu passaporte ou carteira de identidade de forma obrigatória.<br>
                                        &#10034; Para efectuar a sua reserva solicitamos o pagamento de 50%.
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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/humantay-lagoa"
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
                                <a href="{{ asset('img/galeria/humantay-lake.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/humantay-lake.jpg') }}"
                                        alt="laguna humantay" loading="lazy">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/tour-humantay-soraypampa.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/tour-humantay-soroypampa.jpg') }}"
                                        alt="Tour a la laguna humantay" loading="lazy">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/tour-humantay-turista.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/tour-humantay-turista.jpg') }}"
                                        alt="Caminata humantay" loading="lazy">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/trekking-salkantay-arribo.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/trekking-salkantay-arribo.jpg') }}"
                                        alt="trekking laguna humantay">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/tour-humantay-laguna.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/tour-humantay-laguna.jpg') }}"
                                        alt="caminata laguna humantay">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 display2">
                        <div class="similares">
                            <div class="similares">
                                <h4 class="text-center">Passeios semelhantes</h4>
                                <a href="vale-sagrado-dos-incas">
                                    <p>Vale Sagrado Dia Inteiro</p>
                                </a>
                                <a href="7-lagoas-tour">
                                    <p>Ausangate 7 lagoas</p>
                                </a>
                                <a href="happy-city-tour">
                                    <p>Happy City Tour Dia inteiro</p>
                                </a>
                                <a href="maras-moray-salineras-tour">
                                    <p>Maras, Moray e Salineras</p>
                                </a>
                                <a href="tour-happy-experience">
                                    <p>Happy Experience Tour Exclusivo</p>
                                </a>
                                <a href="qeswachaca-tour">
                                    <p>Queswachaca Tour</p>
                                </a>
                                <a href="vinicunca-tour">
                                    <p>Vinicunca: Montanha de Cores</p>
                                </a>
                                <a href="cusco-city-tour">
                                    <p>Cusco City Tour</p>
                                </a>
                            </div>
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
