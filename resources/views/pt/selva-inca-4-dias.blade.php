<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Selva Inca passeio de 4 días | Agência de viagens Perú</title>
    <meta name="description"
        content="A INCA JUNGLE é uma boa alternativa para chegar a Machu Picchu, dura 4 dias e 3 noites, é uma mistura de esportes de aventura.">
    <meta name="keywords"
        content="Cusco, passeio na selva inca, passeio na selva inca, selva inca 4 dias, passeio na selva inca 4 dias, chegar a machu picchu pela selva inca, passeios incas, caminhar pela selva inca, passeio a machu picchu, trekking para águas quentes">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Inca Jungle tour de 4 días | Travel Agency Perú" />
    <meta property="og:image"
        content="https://happyperutours.com/img/panoramic/inca-jungle-Machupicchu-tour-x-travel-peru.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/selva-inca-4-dias">
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
                    onclick="window.location.href='{{ route('inca-jungle-4-days') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('inca-jungle-4-dias') }}'">Español</button>
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
            <h1 class="text-center h1-tours">
                <?php $titulo = 'Selva Inca, excursão de 4 dias';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 450;
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
    <div class="inca-jungle"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Passeio na selva inca</o>
                <m>4 dias para Machu Picchu</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="vale-sagrado-e-trilha-inca">
                            <p>Vale Sagrado e trilha inca 3 días</p>
                        </a>
                        <a href="humantay-lagoa">
                            <p>Lagoa Humantay</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Caminhada Lares 4d/3n</p>
                        </a>

                        <a href="salkantay-5-dias">
                            <p>Salkantay Passeio 5 días</p>
                        </a>
                        <a href="waqrapukara-full-day">
                            <p>Waqrapukara full day</p>
                        </a>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao Passeio 4 días</p>
                        </a>
                        <a href="huchuy-qosqo-2-dias">
                            <p>Huchuy Qosqo a Machupicchu</p>
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
                                <td>US$ 450,00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Visão global:</h5>
                    <p class="p-tours">
                        O INKA JUNGLE é uma boa alternativa para chegar a Machu Picchu, dura 4 dias e 3 noites, é uma
                        mistura de esportes de aventura, com cultura e história, um dos melhores roteiros onde abundam a
                        flora e fauna da Selva Alta. Destinado a todos aqueles que desejam sair da clássica rotina de
                        passeios que levam a uma das 7 maravilhas do mundo “MACHUPICCHU”.
                    </p><br>
                    <h5 class="h5-tours"> Roteiro:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DIA 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Distância no ônibus</th>
                                <th scope="col">Distância de ciclismo</th>
                                <th scope="col">Alojamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>3 horas</td>
                                <td>64 km | 4 horas</td>
                                <td>Alojamento</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        O guia irá buscá-lo no seu hotel às 6h00 para ir ao Vale Sagrado dos Incas num ônibus turístico
                        privado, chegando na cidade de Ollantaytambo teremos café da manhã opcional, e depois
                        continuaremos por cerca de 1 hora até ABRA MÁLAGA (4350 m) ponto de partida da nossa aventura em
                        “bicicleta” de duas rodas. Após um tempo razoável de organização do grupo com as respectivas
                        bicicletas, instruções do guia e uso de implementos de proteção, iniciamos a descida por
                        aproximadamente 3 horas até o pequeno povoado de HUAMANMARCA, durante o passeio teremos algumas
                        paradas para as Fotografias de belas paisagens como o NEVADO DE LA VERÓNICA (5700 m) e a mudança
                        da vegetação da parte andina em direção à floresta tropical, chegando ao povoado de SANTA MARIA
                        (1250 m). Entre ás 12 Após o almoço continuaremos com esportes de aventura esta vez no Rio
                        Vilcanota fazendo o RAFTING opcional, com algumas corredeiras de categoria III, para esta
                        atividade temos todas as medidas de segurança como capacetes, coletes salva-vidas, quebra-ventos
                        e um guia especializado em caiaque. Depois retornaremos ao nosso alojamento para degustar um
                        delicioso almoço no lodge que será nosso pernoite.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                                <th scope="col">Hospedagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moderado</td>
                                <td>7 horas</td>
                                <td>22 km</td>
                                <td>Hostel</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Após degustar um consistente café da manhã começaremos nossa caminhada fresca às 6h00, durante
                        as primeiras horas caminharemos dentro das plantações de frutas como bananeiras, laranjeiras e
                        poderemos reconhecer as plantações de coca, então nós subirá ao local denominado COLA DE MONO,
                        propriedade privada de uma família local que nos ensinará seus costumes e tradições do
                        cotidiano, o guia explicará os produtos que as famílias da região produzem, como a produção de
                        café, milho , cacau, Yucca e outros.; Também podemos experimentar bebidas tradicionais.<br><br>
                        Continuamos nossa subida até nos conectarmos com a trilha Inca original recentemente restaurada,
                        esta estrada ligava a cidade de Machupicchu com o último refúgio Inca chamado VILCABAMBA, ao
                        longo da trilha Inca teremos uma vista do majestoso Canyon HUANCARCCASA e do SALKANTAY NEVADO,
                        então desceremos em direção ao povoado de QUELLOMAYO, onde desfrutaremos de um almoço e um
                        merecido descanso e depois continuaremos por aproximadamente 2 horas até chegarmos às famosas
                        fontes termais de COCALMAYO, após um tempo relaxado nas fontes termais pegaremos nosso
                        transporte privado até a localidade de SANTA TERESA, local de jantar e pernoite em pousada.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificuldade</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Distância</th>
                                <th scope="col">Hospedagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>3 horas</td>
                                <td>12 km</td>
                                <td>Hostel</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Neste dia estaremos nos aproximando de nosso objetivo MACHUPICCHU, iniciando nossa atividade
                        logo após o café da manhã, fazendo outra atividade opcional que é a tirolesa, após esta aventura
                        tomaremos um transporte para a cidade de HIDROELÉCTRICA onde vamos almoçar e depois
                        continuaremos com uma caminhada de 3 horas até a cidade de Aguas Calientes, onde jantaremos em
                        um restaurante e passaremos a noite em um confortável hostel.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 04:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Dificultad</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Distancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>3 horas</td>
                                <td>6 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Este dia será um desafio para nós tentarmos ser um dos primeiros grupos a visitar a cidadela de
                        Machupicchu, pois o despertar será bem cedo às 4:00 da manhã para podermos chegar a tempo na
                        estação de ônibus porque também haverá muitas pessoas com o mesmo objetivo, o primeiro ônibus
                        sairá às 5h30 com um passeio de 30 minutos estaremos fazendo nossa entrada na cidadela às 6h00,
                        o passeio guiado dura aproximadamente 3 horas conhecendo os lugares mais importantes e os
                        destaques de Machu Picchu depois disso terão um tempo racional livre para tirar fotos e
                        encher-se de energia que só este lugar maravilhoso pode oferecer, vocês também terão a opção de
                        poder dar um pequeno passeio até o INTIPUNKU ou Porta del Sol de onde podem tirar fotos
                        panorâmicas de Machu Picchu, recomenda-se descer ao povo de Aguas Calientes para almoçar pois há
                        mais opções, o trem de volta a Cusco sairá às 4:20 pm chegando à cidade de Cusco às 20h30 para o
                        hotel.
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
                                    &check; Traslado do hotel<br>
                                    &check; Transporte turístico Cusco- Abra Malaga<br>
                                    &check; Trem turístico Aguas Calientes - Ollantaytambo<br>
                                    &check; 1 bilhete de ônibus turístico Aguas Calientes - Machu Picchu<br>
                                    &check; Ingressos de entrada para Machu Picchu<br>
                                    &check; 3 cafés da manhã, 3 almoços, 3 jantares, 2 horas de chá (opção vegetariana)<br>
                                    &check; Lanches<br>
                                    &check; Guia profissional bilíngüe<br>
                                    &check; Alojamento 1 Lodge, 2 hostel<br>
                                    &check; Bicicletas de suspensão dianteira<br>
                                    &check; Implementos de proteção<br>
                                    &check; Atividades de aventura<br>
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
                                    &#10008; Primeiro café da manhã<br>
                                    &#10008; Último almoço<br>
                                    &#10008; Bebidas extras<br>
                                    &#10008; 2ª bilhete de ônibus turístico (Machupicchu- Aguas Calientes) opcional
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
                                    &#10034; Lanches (chocolates, doces, nozes etc.)<br>
                                    &#10034; Lanterna<br>
                                    &#10034; Câmera fotográfica<br>
                                    &#10034; Baterias extras<br>
                                    &#10034; Garrafa de água<br>
                                    &#10034; Capa de chuva<br>
                                    &#10034; Álcool em gel<br>
                                    &#10034; Cajados <br>
                                    &#10034; Roupa extra<br>
                                    &#10034; Chinelos <br>
                                    &#10034; Chapéu e Boné<br>
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
                                    &#10034; Saídas diárias.<br>
                                        &#10034; Os preços são por pessoa e expressos em dólares americanos (US $).<br>
                                        &#10034; Os preços não incluem impostos (18%). <br>
                                        &#10034; Assim que a reserva for aceite, o passageiro deve enviar por e-mail a
                                        cópia do seu passaporte ou carteira de identidade de forma obrigatória. <br>
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
                    <div class="fb-comments"
                        data-href="https://happyperutours.com/pt/selva-inca-4-dias"
                        data-width="
                        100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 450.00 <i
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
                            <a href="{{ asset('img/galeria/inca-jungle-4-days.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-jungle-4-days.jpg') }}"
                                    alt="Inca jungle 4 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inka-jungle-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inka-jungle-tour.jpg') }}"
                                    alt="caminata inca jungle por 4 dias">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/inca-jungle-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/inca-jungle-tour.jpg') }}"
                                    alt="tour a machu picchu caminata">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca a Machu Picchu 4 días</p>
                        </a>
                        <a href="vale-sagrado-e-trilha-inca">
                            <p>Vale Sagrado e trilha inca 3 días</p>
                        </a>
                        <a href="humantay-lagoa">
                            <p>Lagoa Humantay</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Caminhada Lares 4d/3n</p>
                        </a>

                        <a href="salkantay-5-dias">
                            <p>Salkantay Passeio 5 días</p>
                        </a>
                        <a href="waqrapukara-full-day">
                            <p>Waqrapukara full day</p>
                        </a>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao Passeio 4 días</p>
                        </a>
                        <a href="huchuy-qosqo-2-dias">
                            <p>Huchuy Qosqo a Machupicchu</p>
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
