<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Trilha Inca para Machu Picchu, excursão de 4 dias</title>
    <meta name="description"
        content="A Trilha Inca de 4 dias para Machu Picchu considerada uma das mais belas da América, onde você pode desfrutar de experiências inesquecíveis, vistas impressionantes.">
    <meta name="keywords"
        content="Cusco, trilha inca, trilha inca, trilha inca 4 dias, trilha inca 4 dias, trilha inca para machu picchu, tour machu picchu, trilha machu picchu, trilha para machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trilha Inca para Machu Picchu, excursão de 4 dias" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/inca-trail.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/trilha-inca-4-dias">
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
                    onclick="window.location.href='{{ route('inca-trail-4-days') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('inca-trail-4-dias') }}'">Español</button>
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
                <?php $titulo = 'Trilha Inca 4 dias';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 650;
                echo $precio; ?>.00
            </p>
            @if (session()->has('flash'))
                <div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
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
    <div class="machu"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Trilha Inca para Machu</o>
                <m>Picchu 4 dias</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="tour-happy-experience">
                            <p>Happy Experience Tour</p>
                        </a>
                        <a href="hiram-binghan-tour-en-tren">
                            <p>Hiram Binghan tour en tren</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle a Machu Picchu</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Caminata Salkantay 5 dias</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado de los Incas</p>
                        </a>
                        <a href="inca-rail-primera-clase">
                            <p>Tour en tren Primera Clase</p>
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
                                <td>Moderado</td>
                                <td>4 dias</td>
                                <td>US$ 650,00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="h5-tours">Visão global:</h5>
                    <p class="p-tours">
                        A trilha Inca 4 dias até Machupicchu é considerada uma das mais belas da América, onde você pode
                        desfrutar de experiências inesquecíveis, vistas deslumbrantes da cordilheira de Cusco, de nossa
                        famosa montanha nevada Verónica, estando no topo de uma montanha com mais de 4200 metros (13779
                        pés)vamos continuar o cainho através de uma selva coberta por variada flora e fauna, encontrando
                        importantes sítios arqueológicos incas de diferentes funções, especialmente religiosas. Esta
                        trilha inca também é chamada de estrada sagrada para a cidadela inca de Machu Picchu.
                    </p><br>
                    <h5 class="h5-tours"> Roteiro:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DIA 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>7 horas</td>
                                <td>12 km</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="p-tours">
                        Saímos da cidade de Cusco bem cedo às 5:00 da manhã, antes de chegar ao ponto de partida de
                        nossa caminhada no km 82 ou PISCACUCHO faremos uma parada no povoado de Ollantaytambo para o
                        café da manhã, km 82 também é o lugar onde encontraremos o resto da equipe que nos acompanhará
                        durante a caminhada, depois de tudo organizado iniciaremos a nossa aventura passando por um
                        posto de controle onde apresentaremos todos os documentos obrigatórios para utilizar a rede de
                        trilhas Inca.<br><br>

                        Após de 3 horas e meia de caminhada chegaremos ao setor TARAYOC, onde almoçaremos. Em seguida,
                        continuaremos subindo ao nosso acampamento chamado YUNCA CHIMPA (3150 m) de onde teremos uma
                        vista da montanha nevada VERÔNICA.
                    </p><br><br>
                    <p class="p-tours text-center">
                        <fuerte>DIA 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Difícil</td>
                                <td>9 horas</td>
                                <td>15 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        O despertar será com um tradicional chá de coca às 5h00, após o café da manhã por volta das 6h30
                        saímos do acampamento para continuar a subida ao ponto mais alto do nosso percurso "ABRA DE
                        WARMIWAÑUSCA" 4200 m. De lá desceremos imediatamente para o local do almoço chamado PACAYMAYO,
                        uma bela ravina por onde corre o rio do mesmo nome, após a degustação do almoço subiremos ãos
                        3900 m. a “Abra de RUNKURAKAY” onde no meio da montanha se encontra o sítio arqueológico de
                        RUNKURAKAY, a passagem com o mesmo nome é conhecida como o lugar de oferendas onde os viajantes
                        têm a oportunidade de se conectar com as montanhas fazendo uma oferenda em conjunto com seu
                        guía, de folhas de coca, pedras,doces e muita fé.<br><br>
                        Após uma hora de descida chegaremos a outro sítio arqueológico SAYACMARCA após a visita
                        continuaremos ao nosso segundo acampamento chamado CHAQUICOCHA (3650 m) chegando aproximadamente
                        às 17h00.
                    </p><br><br>
                    <p class="p-tours text-center">
                        <fuerte>DIA 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>5 horas</td>
                                <td>10 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Considerado o dia mais bonito de todo o percurso, iniciaremos a caminhada às 7h00, neste dia
                        teremos a oportunidade de caminhar pela selva da mata por ísso a beleza deste día,pois
                        observaremos uma variedade de pássaros, mamíferos, insetos, borboletas, se tivermos sorte,
                        poderemos até encontrar o famoso urso de óculos representante de nossa trilha Inca. Também
                        podemos desfrutar de uma variedade de flora, incluindo as mais belas orquídeas e sítios
                        arqueológicos como PHUYUPATAMARCA (3950 m), para o almoço chegaremos a WIÑAYWAYNA (2650 m) que
                        também será o último acampamento, após o almoço faremos uma visita ao sítio arqueológico de
                        wiñaywayna e teremos o resto da tarde livre para recarregar as baterias para o nosso último dia
                        de caminhada.
                    </p><br><br>
                    <p class="p-tours text-center">
                        <fuerte>DIA 04:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>2 horas</td>
                                <td>5 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        O despertar será bem cedo às 3:30 da manhã, após o café da manhã e com as lanternas começaremos
                        a caminhada pelo último trecho da trilha Inca, uma hora depois chegaremos ao INTIPUNKU ou “PORTA
                        DO SOL” de onde teremos uma vista impressionante de MACHUPICCHU (2400 m) e dos primeiros raios
                        solares. Finalmente, desceremos por uma hora até a mesma cidadela e iremos ao posto de controle
                        para nos organizar, deixar nossas mochilas, usar os banheiros e reentrar em Machu Picchu para a
                        visita guiada.<br><br>
                        À tarde, o retorno será de trem para Ollantaytambo, em seguida, ônibus para a cidade de Cusco
                        chegando ao hotel por volta dàs 20h30.
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
                                    &check; Transporte do hotel até o quilômetro 82<br>
                                    &check; Transporte Ollantaytambo - Cusco<br>
                                    &check; Bilhetes de entrada para a Trilha Inca e Machu Picchu<br>
                                    &check; Passagem de ônibus turístico para descer até Aguas Calientes<br>
                                    &check; 4 cafés da manhã, 3 almoços, 3 jantares, 3 horas de chá (opção
                                    vegetariana)<br>
                                    &check; 4 desayunos, 3 almuerzos, 3 cenas, 3 horas de té (opción vegetariana)<br>
                                    &check; Lanches<br>
                                    &check; Guia profissional bilíngüe Espanhol-Portugues.<br>
                                    &check; Cozinheiro profissional<br>
                                    &check; Equipamento de acampamento (barraca e colchão)<br>
                                    &check; Porteiro (7 quilos por pessoa)<br>
                                    &check; Porteiro (para todos os equipamentos de acampamento e cozinha)<br>
                                    &check; Maleta de primeiros socorros<br>
                                    &check; Oxigênio<br>
                                    &check; Álcool e desinfetantes em gel fazem parte do protocolo de biossegurança
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Não inclui:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Primeiro café da manhã <br>
                                    &#10008; Último almoço<br>
                                    &#10008; Bebidas extras<br>
                                    &#10008; Saco de dormir <br>
                                    &#10008; Pontas
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
                                    &#10034; Passaporte original<br>
                                    &#10034; Saco de dormir<br>
                                    &#10034; Protetor solar<br>
                                    &#10034; Repelente de mosquitos<br>
                                    &#10034; Lanches (chocolates, doces, nozes etc.)<br>
                                    &#10034; Lanterna<br>
                                    &#10034; Câmera fotográfica<br>
                                    &#10034; Baterias extras<br>
                                    &#10034; Garrafa de agua<br>
                                    &#10034; Capa de chuva<br>
                                    &#10034; Álcool em gel<br>
                                    &#10034; Cajados<br>
                                    &#10034; Roupa extra<br>
                                    &#10034; Chinelos <br>
                                    &#10034; Chapéu e Boné<br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/pt/trilha-inca-4-dias"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 650.00 <i
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
                            <a href="{{ asset('img/galeria/camino-inca.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/camino-inca.jpg') }}"
                                    alt="lares trek tour" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/camino-inca-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/camino-inca-tour.jpg') }}"
                                    alt="lares tour 4 days" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-trail-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail-tour.jpg') }}"
                                    alt="tour a lares" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-trail.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/turistas-camino-inca.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/turistas-camino-inca.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/camino-inca-machu-picchu.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/camino-inca-machu-picchu.jpg') }}" loading="lazy">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Passeios semelhantes</h4>
                    <div class="similares">
                        <a href="tour-happy-experience">
                            <p>Happy Experience Tour</p>
                        </a>
                        <a href="hiram-binghan-tour-en-tren">
                            <p>Hiram Binghan tour en tren</p>
                        </a>
                        <a href="inca-jungle-4-dias-tour">
                            <p>Inka jungle a Machu Picchu</p>
                        </a>
                        <a href="caminata-lares-4-dias">
                            <p>Caminata Lares 4d/3n</p>
                        </a>
                        <a href="choquequirao-tour-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="tour-salkantay-5-dias">
                            <p>Caminata Salkantay 5 dias</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Valle Sagrado de los Incas</p>
                        </a>
                        <a href="inca-rail-primera-clase">
                            <p>Tour en tren Primera Clase</p>
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
