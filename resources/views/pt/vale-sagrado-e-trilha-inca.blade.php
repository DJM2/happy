<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Vale Sagrado dos Incas e Trilha Inca a Machu Picchu</title>
    <meta name="description"
        content="O passeio ao Vale Sagrado dos Incas, que dura 3 dias, o levará aos lugares mais clássicos; PISAQ, MERCADO TRADICIONAL, Ollantaytambo, Maras, Moray">
    <meta name="keywords"
        content="Cusco, Vale Sagrado, Vale Sagrado dos Incas, Vale Sagrado, passeio no vale sagrado, passeio no vale sagrado de 3 dias, viagem ao vale sagrado, que é o vale sagrado">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Valle Sagrado de los Incas y Camino Inca a Machu Picchu" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/sacred-valley-3-days-tour.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/vale-sagrado-e-trilha-inca">
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
                    onclick="window.location.href='{{ route('sacred-valley-3-days') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('valle-sagrado-3-dias') }}'">Español</button>
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
                <?php $titulo = 'Vale Sagrado e Trilha Inca';
                echo $titulo; ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco - Vale Sagrado - Machu picchu &nbsp;&nbsp;
                <i class="icon-dollar"></i> <?php $precio = 570; echo $precio; ?>.00
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
    <div class="inca-jungle"></div>
    <section>
        <div class="container">
            <h2 class="h2-happy">
                <o>Passeio Vale Sagrado e</o>
                <m>Trilha Inca 3 dias</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao passeio 4 días</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Vale Sagrado 2 dias</p>
                        </a>

                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca a Machu Picchu 4 dias</p>
                        </a>
                        <a href="7-lagoas-tour">
                            <p>Ausangate 7 lagoas</p>
                        </a>
                        <a href="salkantay-5-dias">
                            <p>Salkantay passeio 5 días</p>
                        </a>

                        <a href="vale-sagrado-dos-incas">
                            <p>Vale Sagrado Full Day</p>
                        </a>
                        <a href="trilha-inca-2-dias">
                            <p>Trilha Inca 2 dias</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Caminhada Lares 4d/3n</p>
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
                                <td>3 dias</td>
                                <td>$570.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="h5-tours">Visão Global:</h5>
                    <p class="p-tours">
                        O Tour ao Vale Sagrado dos Incas que dura o dia todo levará você aos lugares mais clássicos;
                        Sítio arqueológico de PISAQ, MERCADO TRADICIONAL E OLLANTAYTAMBO. O Vale Sagrado, batizado por
                        ser o principal fornecedor de alimentos para o império inca, fica às margens do rio Urubamba. Os
                        incas construíram centros Arqueológicos, ao longo de suas margens, que reproduziam as
                        constelações que eles conheciam do céu andino, o que contribui ainda mais para a beleza deste
                        encantador vale. Conectando-se imediatamente com a trilha Inca que começa no km 104, onde
                        desfrutaremos de uma natureza única conectada à cultura ao percorrer a grande trilha Inca que
                        leva a Machu Picchu e a grande oportunidade de visitar a cidadela em dois turnos da tarde e da
                        manhã.
                    </p><br>
                    <h5 class="h5-tours"> ROTEIRO:</h5>
                    <p class="p-tours text-center">
                        <fuerte>DIA 01:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Nível de dificuldade</th>
                                <th scope="col">Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>1 día</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Começamos nossa excursão ao Vale Sagrado dos Incas por volta das 08:00 h. Com a retirada nos
                        pontos permitidos no centro histórico da cidade, nos dirigimos ao sítio arqueológico de PISAQ,
                        localizado a 32 km (20 milhas) da cidade de Cusco, a 2.972 m. Local que possui o melhor sistema
                        de andenería alcançado pelos Incas em todos os Andes, construções arquitetônicas de pedra e
                        importantes templos da cultura Inca. Poderemos visitar o "MERCADO INDIANO" a feira de
                        artesanato, entre a qual se destacam belos artesanatos têxteis e cerâmicos com reproduções de
                        peças arqueológicas incas. Em seguida iremos para a cidade de Urubamba, que está localizada
                        dentro do circuito Vale Sagrado, degustaremos um delicioso almoço buffet com uma gastronomia
                        variada de pratos locais e internacionais. <br><br>
                        Continuaremos nosso tour em direção à cidade de OLLANTAYTAMBO, localizada a 97 km (60 milhas) de
                        Cusco, a 2.846 metros acima do nível do mar. Esta cidade tem a complexidade e a beleza das
                        construções incas e da cidade contemporânea. No topo do complexo arqueológico destacam-se
                        edifícios de importância religiosa e astronômica, além de uma vista panorâmica de Ollantaytambo
                        denominada POVO INCA VIVO. Teremos jantar incluído antes de irmos descansar.

                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 02:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Nível de dificuldade:</th>
                                <th scope="col">Duração:</th>
                                <th scope="col">Distância:</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Difícil</td>
                                <td>6 horas</td>
                                <td>12 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Neste dia depois do café da manhã bem cedo pegaremos o trem que nos levará ao km 104 ou ao
                        início de nossa trilha Inca chegando neste ponto às 8h55 aproximadamente. <br>Depois de fazer o
                        respectivo controle de entrada à rede viária inca, iniciamos a caminhada visitando o primeiro
                        sítio arqueológico de CHACHABAMBA (2100m.) subiremos a WIÑAYWAYNA (2650 m.) por um tempo de 3
                        horas, já no local visitaremos o sítio arqueológico de mesmo nome e teremos hora do almoço,
                        continuaremos por um caminho plano até a Porta do Sol ou INTI PUNKU, de lá teremos uma agradável
                        vista de Machu Picchu, começamos a descer vendo o pôr do sol na cidadela. <br>Continuamos nossa
                        aventura até o hotel em Aguas Calientes, onde jantaremos e pernoitaremos.
                    </p>
                    <p class="p-tours text-center">
                        <fuerte>DIA 03:</fuerte>
                    </p>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Nível de dificuldade:</th>
                                <th scope="col">Duração:</th>
                                <th scope="col">Distância:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fácil</td>
                                <td>3 horas</td>
                                <td>4 km</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        A subida à cidadela de Machu Picchu será muito cedo, tentaremos pegar o primeiro ônibus às 5h30
                        para chegar à cidadela e poder desfrutar dos primeiros raios de sol em lugares importantes de
                        Machu Picchu . A visita guiada dura 3 horas, depois vocês terão tempo livre para curtir a
                        fotografia desta maravilha. O trem de retorno a Cusco será programado para a tarde com a chegada
                        ao hotel de Cusco às 20h30 aproximadamente.
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
                                    &check; Traslado do hotel <br>
                                    &check; Guia de turismo profissional<br>
                                    &check; Transporte turístico no vale sagrado<br>
                                    &check; Transporte turístico Ollantaytambo - Cusco<br>
                                    &check; Bilhete de trem Ollantaytambo - km 104<br>
                                    &check; Bilhete de trem de volta para Ollantaytambo<br>
                                    &check; Ingressos para a trilha Inca e Machu Picchu<br>
                                    &check; Almoço no vale sagrado<br>
                                    &check; Lanche para caminhada 2º dia<br>
                                    &check; Jantar em Ollantaytambo 1ª noite<br>
                                    &check; Jantar em Aguas Calientes 2ª noite<br>
                                    &check; 2 bilhetes de ônibus Machu Picchu - Aguas Calientes e vice-versa<br>
                                    &check; Hostel em Ollantaytambo<br>
                                    &check; Hostel em aguas calientes<br>
                                    &check; Maleta de Primeiros socorros e balão de oxigênio
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
                                    &#10008; Bilhete de entrada para os sítios arqueológicos no vale sagrado BTG. <br>
                                    &#10008; Terceira passagem de ônibus, terceiro dia de descida opcional.<br>
                                    &#10008; Cajados <br>
                                    &#10008; Dicas
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
                                    &#10034; Repelente de mosquitos<br>
                                    &#10034; Lanches (chocolates, doces, nozes etc.) <br>
                                    &#10034; Câmera fotográfica <br>
                                    &#10034; Garrafa de água <br>
                                    &#10034; Capa de Chuva <br>
                                    &#10034; Roupa extra <br>
                                    &#10034; Álcool em gel <br>
                                    &#10034; Cajados <br>
                                    &#10034; Chinelos <br>
                                    &#10034; Chapéu e Boné <br>
                                    &#10034; Dinheiro extra <br>
                                    &#10034; Mleta de primeiros socorros ou medicamentos pessoais <br>

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
                    <div class="fb-comments" data-href="https://happyperutours.com/pt/vale-sagrado-e-trilha-inca"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 570.00 <i
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
                            <a href="{{ asset('img/galeria/sacred-valley-3-days-tour.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/sacred-valley-3-days-tour.jpg') }}"
                                    alt="Valle Sagrado 3 días" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/short-inca-trail-to-machu-picchu.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/short-inca-trail-to-machu-picchu.jpg') }}"
                                    alt="camino inca corto a Machu Picchu">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/short-inca-trail.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/short-inca-trail.jpg') }}"
                                    alt="Corto camino Inca" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/sacred-valley-3-days.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/sacred-valley-3-days.jpg') }}"
                                    alt="Valle sagrado de los incas">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/sacred-valley-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/sacred-valley-tour.jpg') }}"
                                    alt="Tour al Valle sagrado">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/machu-picchu-sacred-valley.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/machu-picchu-sacred-valley.jpg') }}"
                                    alt="Machu Picchu Valle sagrado">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao passeio 4 días</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Vale Sagrado 2 dias</p>
                        </a>

                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca a Machu Picchu 4 dias</p>
                        </a>
                        <a href="7-lagoas-tour">
                            <p>Ausangate 7 lagoas</p>
                        </a>
                        <a href="salkantay-5-dias">
                            <p>Salkantay passeio 5 días</p>
                        </a>

                        <a href="vale-sagrado-dos-incas">
                            <p>Vale Sagrado Full Day</p>
                        </a>
                        <a href="trilha-inca-2-dias">
                            <p>Trilha Inca 2 dias</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Caminhada Lares 4d/3n</p>
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
