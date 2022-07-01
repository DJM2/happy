<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>A famosa caminhada até a montanha das Cores | Travel Agency Perú</title>
    <meta name="description"
        content="Com seu nome original VINICUNCA, mas popularmente conhecida como a montanha das sete cores, fazendo parte de uma das montanhas mais importantes de Cusco.">
    <meta name="keywords"
        content="Cusco, Rainbow mountain, a famosa montanha de cores, vinicunca trek, visite a montanha do arco-íris, visite vinicunca, tour vinicunca, reserva vinicunca, reserva vinicunca">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="A famosa caminhada até a montanha das Cores  | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/trek-to-rainbow-mountain.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/vinicunca-montanha">
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
                    onclick="window.location.href='{{ route('rainbow-mountain') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('vinicunca-tour') }}'">Español</button>
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
                    <?php $titulo = 'Montanha de Cores';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Vinicunca&nbsp;&nbsp;
                    <i class="icon-dollar"></i> <?php $precio = 100;
                    echo $precio; ?>.00
                </p>
                @if (session()->has('flash'))
                    <div style="text-align:center" class="alert alert-success alert-dismissible fade show"
                        role="alert">
                        <p class="text-center">Sua mensagem foi enviada com sucesso, responderemos assim que possível.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </p>
                    </div>
                @endif
            </div>
        </div>
        </div>
        <div class="rainbow-mountain"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Vinicunca tour: </o>
                    <m>Montanha de cores</m>
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
                                <p>Choquequirao 4 dias </p>
                            </a>
                            <a href="humantay-lagoa">
                                <p>Humantay Lagoa</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca à Machu Picchu 4 dias</p>
                            </a>
                            <a href="salkantay-5-dias">
                                <p>Salkantay 5 dias</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nível de dificuldade</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Moderado</td>
                                    <td>1 día</td>
                                    <td>$100.00 por adulto</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="h5-tours">Visão Global:</h5>
                        <p class="p-tours">
                            Com o seu nome original VINICUNCA, mas popularmente conhecida como a montanha das sete
                            cores, formando parte de uma das montanhas mais importantes que circundam o nevado
                            AUSANGATE, com uma altura de 5200 m.s.n.m. No meio da década de 2010, iniciou-se a sua massa
                            turística, atraída pelo conjunto de riscas de várias cores, isto devido à sua composição
                            mineralógica presente nas encostas e picos.<br> Atualmente, também é considerada a JÓIA
                            escondida dos Andes Peruanos. Convida-nos a desfrutar das cores naturais das suas montanhas,
                            um contacto com a população local, os seus costumes, tradições e vestuários típicos da
                            região. Completando nossa aventura com uma vista impressionante do VALE VERMELHO.
                        </p><br>
                        <h5 class="h5-tours"> ROTEIRO:</h5>

                        <p class="p-tours">
                            Saindo da cidade de Cusco às 4h30 da manhã, continuaremos para o Sul, chegando ao distrito
                            de Cusipata onde tomaremos o café da manhã; Continuaremos a viagem por aproximadamente 1
                            hora e meia até chegarmos ao ponto de partida de nossa caminhada e ao final dos ônibus (4600
                            msnm), iniciaremos a caminhada em subida por aproximadamente 2 horas,durante o percurso nos
                            deleitaremos com a vista de impressionantes montanhas íngremes, pampas cobertos de ichu ou
                            palha, vegetação típica da Puna Peruana; Também poderemos apreciar a colorida avifauna em
                            seu habitat. Chegaremos ao topo da montanha e pegaremos a montanha à esquerda para ver a
                            magnífica MONTANHA DE CORES, de lá serão tiradas as famosas fotografias, no caminho de volta
                            tomaremos o caminho para o VALE VERMELHO, após desfrutarmos nesta bela paisagem voltaremos
                            ao nosso ponto de partida ou estação de ônibus para continuar o retorno, fazendo uma parada
                            no mesmo local do café da manhã para desta vez almoçar. Estaremos na cidade de Cusco entre
                            ás 17h e 17h30.
                        </p>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            IncluI:
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &check; Transporte turístico <br>
                                        &check; Guia turístico profissional bilíngüe <br>
                                        &check; Café da manhã <br>
                                        &check; Almoço Buffet <br>
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
                                        &#10008; Cavalo para a rota<br>
                                        &#10008; Cajados <br>
                                        &#10008; Bebidas extras<br>
                                        &#10008; Dicas <br>
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
                                            O que você precisa trazer
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10034; Passaporte original <br>
                                        &#10034; Protetor solar<br>
                                        &#10034; Roupas quentes (luvas, boné, xaile) <br>
                                        &#10034; Câmera fotográfica <br>
                                        &#10034; Garrafa de agua <br>
                                        &#10034; Álcool em gel <br>
                                        &#10034; Chapéu <br>
                                        &#10034; Dinheiro extra <br>
                                        &#10034; Mleta de primeiros socorros ou medicamentos pessoais <br>
                                        &#10034; Capa de Chuva

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="notas">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseNotas" aria-expanded="false"
                                            aria-controls="collapseNotas">
                                            Anotações Importantes:
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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/vinicunca-montanha"
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
                <h3 class="h2-happy">Galeria de Imagens</h3>
                <div class="photo-gallery" style="padding-bottom: 3em">
                    <div class="container">
                        <div class="row photos">
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/montana-de-colores-trekking.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/montana-de-colores-trekking.jpg') }}"
                                        alt="montaña de colores">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/vinicunca-7-colores.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/vinicunca-7-colores.jpg') }}" alt="vinicunca">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/trek-to-rainbow-mountain.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/trek-to-rainbow-mountain.webp') }}"
                                        alt="caminata montaña 7 colores">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/turista en-vinicunca.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/turista en-vinicunca.jpg') }}"
                                        alt="montaña vinicunca">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/fauna-llamas-vinicunca.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/fauna-llamas-vinicunca.jpg') }}"
                                        alt="montaña de colores">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 display2">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <div class="similares">

                            <a href="7-lagoas-tour">
                                <p>Ausangate 7 lagoas</p>
                            </a>
                            <a href="happy-city-tour">
                                <p>Happy City Tour Full day</p>
                            </a>
                            <a href="maras-moray-e-salineras">
                                <p>Maras, Moray e Salineras</p>
                            </a>

                            <a href="vale-sagrado-dos-incas">
                                <p>Vale Sagrado Tour Full Day</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Queswachaca Tour</p>
                            </a>

                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>
                            <a href="happy-experiencia-tour">
                                <p>Happy Experiencia Tour Exclusivo</p>
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
