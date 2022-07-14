<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Happy City Tour Cusco Dia Inteiro | Agência de viagens Perú</title>
    <meta name="description"
        content="Aliamos este circuito a um momento de partilha de momentos com a população local conhecendo as suas praças principais, o mercado tradicional da cidade e os pratos típicos.">
    <meta name="keywords"
        content="Cusco, tour exclusivo, tour cusco, tour Peru, Pucapucara, Tambomachay, Tour em Cusco, viagem a Cusco, tour exclusivo em cusoo, cusco dia inteiro, conhecendo cusco">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Happy City Tour Cusco Full Day | Agência de viagens Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/happy-city-tour">
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
                    onclick="window.location.href='{{ route('happy-city-tour-english') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('happy-city-tour-castellano') }}'">Español</button>
            </li>
        </ul>
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
				<?php $titulo='Happy City Tour dia enteiro'; echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio=60;  echo $precio; ?>.00
            </p>
            @if (session()->has('flash'))
                <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
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
    <div class="traditional"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Happy City Tour</o>
                <m>Dia Inteiro</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Passeios Semelhantes</h4>
                        <a href="city-tour-cusco">
                            <p>Cusco City Tour</p>
                        </a>
                        <a href="happy-experiencia-tour">
                            <p>Happy City Tour Exclusivo</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Vale Sagrado & MAchu Picchu</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Lares caminhada de 4d/3n</p>
                        </a>
                        <a href="perurail-vistadome">
                            <p>Passeio de trem Vistadome</p>
                        </a>
                        <a href="inca-rail-primeira-classe">
                            <p>Passeio de trem Primeira classe</p>
                        </a>
                        <a href="qeswachaca-tour">
                            <p>Tour Qeswachaca</p>
                        </a>
                        <a href="humantay-lagoa">
                            <p>Tour Lagoa Humantay</p>
                        </a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="p-tours">
                        A <strong>UNESCO</strong> declarou Cusco como Centro do Patrimônio Mundial em 1983, por
                        sua beleza e história com sítios arqueológicos incas, edifícios coloniais e vice-reinos, este
                        passeio será a melhor maneira de começar a conhecer Cusco; localizado no coração da Cordilheira
                        dos Andes, rico em Cultura e Tradições, durante seu percurso nos conecta com seu passado, também
                        considerado um museu vivo. A realização do city tour não envolve esforço físico e é altamente
                        recomendável uma boa aclimatação antes de iniciar uma caminhada. Combinamos este circuito com um
                        momento de compartilhar momentos com a população local conhecendo suas principais praças, o
                        famoso mercado tradicional da cidade e um almoço típico Peruano.
                    </p><br>
                    <h5 class="h5-tours"> Itinerário:</h5>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>9 horas</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Nosso passeio começa às 9 da manhã, começamos com um passeio pela cidade em direção à Catedral
                        de Cusco faremos uma visita de aproximadamente 40 minutos conhecendo os arredores e o interior,
                        depois iremos ao mercado mais famoso de Cusco chamado San Pedro durante Nossa caminhada
                        visitaremos algumas ruas bem conhecidas e típicas de Cusco que ainda mantêm nomes Quechua
                        originais, cruzaremos importantes praças como a Praça Cabildo onde atualmente se encontra o
                        município de Cusco, em um dos cantos que iremos poderemos apreciar a casa do ¨ Inca Garcilaso de
                        la Vega¨ considerado um dos melhores Cronistas que conta a história de nossos ancestrais, então
                        chegaremos à Praça San Francisco conhecida por seu Jardim Botânico único na cidade de Cusco, e o
                        guia explicará a importância deste jardim, à saída da Praça encontraremos o arco de Santa Clara,
                        que foi construído em 1835, em comemoração do con Peru - Federação Boliviana e depois seguiremos
                        rumo ao mercado de San Pedro, muito famoso e conhecido por ser um mercado completo que atende a
                        população local com necessidades básicas e turistas Nacionais e Estrangeiros com seu setor de
                        artesanato, nos arredores podemos ver como a população local desperta em suas atividades
                        diárias. O guia se encarregará de fazer um passeio pelas diferentes seções de produtos,
                        alimentos, frutas, flores e muito mais. Continuando com o passeio visitaremos um restaurante
                        típico chamado POLLERÍA onde iremos saborear um delicioso prato típico nacional chamado POLLO A
                        LA BRASA acompanhado da tradicional bebida chicha morada. Após um delicioso almoço iremos ao
                        QORICANCHA ou Templo do Sol, para fazer uma visita de aproximadamente 40 minutos, aqui
                        apreciaremos parte de alguns templos da época dos Incas e as fundaçoes de um dos templos mais
                        importantes como o Templo do Sol, hoje em día ocupado pelo Convento de Santo Domingo de Guzmán e
                        seu templo católico. Finalmente, pegaremos o ônibus turístico privado para visitar os Sítios
                        Arqueológicos de SACSAYHUAMAN e QENQO, conhecidos por sua beleza arquitetônica megalítica e sua
                        importância religiosa na época dos Incas, terminamos nosso passeio com uma bebida quente típica
                        chamada TÉ PITEADO na Praça das Armas.
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
                                    &check; Almoço<br>
                                    &check; Chá assobiado
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Não Inclui:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Bilhete turístico Cusco<br>
                                    &#10008; Bilhete de entrada para o Qoricancha<br>
                                    &#10008; Bilhete de entrada para a Catedral<br>
                                    &#10008; Bebidas extras <br>
                                    &#10008; Dicas
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        O que você precisa trazer
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Passaporte original<br>
                                    &#10034; Protetor solar <br>
                                    &#10034; Camera fotográfica <br>
                                    &#10034; Porta-bebidas <br>
                                    &#10034; Capa de Chuva <br>
                                    &#10034; Álcool em gel <br>
                                    &#10034; Chapéu <br>
                                    &#10034; Dinheiro extra <br>
                                    &#10034; Maleta de primeiros socorros ou medicamentos pessoais <br>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Anotações Importantes:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10034; Saídas diárias.<br>
                                    &#10034; Os preços são por pessoa e expressos em dólares americanos (US $).<br>
                                    &#10034; Os preços não incluem impostos (18%). <br>
                                    &#10034; Assim que a reserva for aceite, o passageiro deve enviar por e-mail a cópia
                                    do seu passaporte ou carteira de identidade de forma obrigatória. <br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/pt/happy-city-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        @include('layouts.book-portugues')
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <h3 class="h2-happy">Galería de Imagens</h3>
            <div class="photo-gallery" style="padding-bottom: 3em">
                <div class="container">
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-city-tour-cusco.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-city-tour-cusco.jpg') }}"
                                    alt="Happy city tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-plaza-de-armas.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-plaza-de-armas.jpg') }}" loading="lazy"
                                    alt="City tour en Cusco">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/pollo-a-la-brasa.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/pollo-a-la-brasa.jpg') }}"
                                    alt="Pollo a la brasa" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha-sincretismo.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-qoricancha-sincretismo.jpg') }}"
                                    alt="qoricancha city tour" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Passeios Semelhantes</h4>
                    <a href="city-tour-cusco">
                        <p>Cusco City Tour</p>
                    </a>
                    <a href="happy-experiencia-tour">
                        <p>Happy City Tour Exclusivo</p>
                    </a>
                    <a href="valle-sagrado-2-dias">
                        <p>Vale Sagrado & MAchu Picchu</p>
                    </a>
                    <a href="lares-trekking-4-dias">
                        <p>Lares caminhada de 4d/3n</p>
                    </a>
                    <a href="perurail-vistadome">
                        <p>Passeio de trem Vistadome</p>
                    </a>
                    <a href="inca-rail-primeira-classe">
                        <p>Passeio de trem Primeira classe</p>
                    </a>
                    <a href="qeswachaca-tour">
                        <p>Tour Qeswachaca</p>
                    </a>
                    <a href="humantay-lagoa">
                        <p>Tour Lagoa Humantay</p>
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
