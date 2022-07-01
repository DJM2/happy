<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Camino Inca trek tour 2 dias | Travel Agency Perú</title>
    <meta name="description"
        content="A curta trilha Inca de 2 dias, é um passeio pelos últimos quilômetros da clássica trilha Inca de 4 dias, começa dentro da selva da floresta da Trilha Inca">
    <meta name="keywords"
        content="Cusco, trilha inca, trilha inca, trilha inca 2 dias, trilha inca 2 dias, trilha inca para machu picchu, tour machu picchu, trilha machu picchu, trilha para machu picchu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Camino Inca trek tour 2 dias | Travel Agency Perú" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/inca-trail.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/trilha-inca-2-dias">
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
                    onclick="window.location.href='{{ route('inca-trail-2-days') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('inca-trail-2-dias') }}'">Español</button>
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
                    <?php $titulo = 'Trilha Inca 2 dias';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Machupicchu &nbsp;&nbsp;
                    <i class="icon-dollar"></i> <?php $precio = 500;
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
        <div class="machu"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Trilha Inca Curta </o>
                    <m>de 2 dias</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">

                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="valle-sagrado-2-dias">
                                <p>Vale Sagrado passeio 2 días</p>
                            </a>
                            <a href="selva-inca-4-dias">
                                <p>Selva Inka 4 días</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="salkantay-5-dias">
                                <p>Salkantay Passeio 5 dias</p>
                            </a>
                            <a href="huchuy-qosqo-2-dias">
                                <p>Huchuy Qosqo e Machu Picchu</p>
                            </a>
                            <a href="vinicunca-montanha">
                                <p>Vinicunca: Montanha de Cores</p>
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
                                    <td>Difícil</td>
                                    <td>2 dias</td>
                                    <td>US$ 500,00 por adulto</td>
                                </tr>
                            </tbody>
                        </table>

                        <h5 class="h5-tours">Visão global:</h5>
                        <p class="p-tours">
                            A curta trilha Inca de 2 dias, é uma viagem pelos últimos quilômetros da trilha clássica
                            Inca de 4 dias, começa dentro da floresta, visitamos o sítio Arqueológico de Wiñaywayna
                            (para sempre jovem) 2.650 metros acima do nível do mar com uma impressionante chegada à
                            Porta del Sol ou INTI PUNKU de onde se tem uma vista maravilhosa de Machu Picchu, durante o
                            percurso poderá observar uma abundante fauna e flora que acompanham todo o caminho.
                            Finalmente, você terá a oportunidade de visitar Machu Picchu duas vezes, já que o segundo
                            dia será dedicado à exploração de toda a cidadela.
                        </p><br>
                        <h5 class="h5-tours"> Roteriro:</h5>
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
                                    <td>Difícil</td>
                                    <td>6 horas</td>
                                    <td>12 km / 3,2 milhas</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="p-tours">
                            A saída do hotel será às 5h30 pegando o ônibus turístico e nos dirigimos para a estação de
                            Ollantaytambo onde pegaremos o trem que nos levará ao km 104 ou CHACHABAMBA, ponto de
                            partida de nossa caminhada chegando a este ponto às 8h55 aprox. Depois de fazer o respectivo
                            controle de entrada à Rede Viária Inca, iniciamos a caminhada visitando o primeiro sítio
                            arqueológico de CHACHABAMBA (2100m), subiremos a WIÑAYWAYNA (2650 m) por um tempo de 3
                            horas, já no local que visitaremos o sítio arqueológico de mesmo nome, teremos hora do
                            almoço, continuaremos por um caminho plano até a Porta del Sol ou INTI PUNKU, de lá teremos
                            uma agradável vista de Machu Picchu, começamos a descer vendo o pôr do sol na cidadela.
                            Continuamos nossa aventura até o hotel em Aguas Calientes, onde jantaremos e pernoitaremos.
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fácil</td>
                                    <td>3 horas</td>
                                    <td>4 km </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            A subida à cidadela de Machu Picchu será muito cedo, tentaremos pegar o primeiro ônibus às
                            5h30 para chegar à cidadela e poder desfrutar dos primeiros raios de sol em lugares
                            importantes de Machu Picchu . A visita guiada dura 3 horas, depois voces terão tempo livre
                            para curtir a fotografia desta maravilha.<br><br>
                            O trem de retorno a Cusco será programado pela tarde com a chegada ao hotel de Cusco por
                            volta das 20h30.
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
                                        &check; Traslado do hotel até Machupicchu.<br>
                                        &check; Guia profissional bilíngüe Espanhol-Portugues.<br>
                                        &check; Transporte turístico Cusco-Ollantaytambo e vice-versa<br>
                                        &check; Bilhete de trem Ollantaytambo - km 104.<br>
                                        &check; Bilhete de trem de volta Machupicchu – Ollantaytambo.<br>
                                        &check; Bilhete de Ingresso para a trilha Inca e Machu Picchu<br>
                                        &check; Lancheira ou lanche (opção vegetariana)
                                        &check; 2 bilhetes de ônibus Machu Picchu - Aguas Calientes e vice-versa<br>
                                        &check; Jantar em restaurante turístico<br>
                                        &check; Hostel em Aguas Calientes<br>
                                        &check; Maleta de primeiros socorros e oxigênio
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
                                        &#10008; Primeiro café da manhã<br>
                                        &#10008; Último almoço<br>
                                        &#10008; Terceira passagem de ônibus, segundo dia de descida (opcional)<br>
                                        &#10008; Cajados
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            O que você precisa trazer?:
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &#10034; Passaporte original <br>
                                        &#10034; Protetor solar<br>
                                        &#10034; Repelente de mosquitos<br>
                                        &#10034; Lanches (chocolates, doces, nozes etc.)<br>
                                        &#10034; Câmera fotográfica<br>
                                        &#10034; Garrafa de agua <br>
                                        &#10034; Capa de chuva<br>
                                        &#10034; Uma muda de roupa extra<br>
                                        &#10034; Álcool em gel<br>
                                        &#10034; Cajados <br>
                                        &#10034; Chinelos<br>
                                        &#10034; Chapéu<br>
                                        &#10034; Dinheiro extra<br>
                                        &#10034; Medicamentos pessoais
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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/trilha-inca-2-dias"
                            data-width="100%" data-numposts="5"></div>
                        <!-- ShareThis END -->

                    </div>
                    <div class="col-lg-3">
                        <div class="similares">
                            <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 500.00 <i
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
                                        alt="Caminata Lares tour">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/camino-inca-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/camino-inca-tour.jpg') }}"
                                        alt="lares tour 4 days">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/inca-trail-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail-tour.jpg') }}"
                                        alt="tour a lares">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/inca-trail.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/inca-trail.jpg') }}">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/turistas-camino-inca.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/turistas-camino-inca.jpg') }}">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/short-inca-trail.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/short-inca-trail.jpg') }}">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 display2">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <div class="similares">
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="valle-sagrado-2-dias">
                                <p>Vale Sagrado passeio 2 días</p>
                            </a>
                            <a href="selva-inca-4-dias">
                                <p>Selva Inka 4 días</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machu Picchu 4 dias</p>
                            </a>
                            <a href="salkantay-5-dias">
                                <p>Salkantay Passeio 5 dias</p>
                            </a>
                            <a href="huchuy-qosqo-2-dias">
                                <p>Huchuy Qosqo e Machu Picchu</p>
                            </a>
                            <a href="vinicunca-montanha">
                                <p>Vinicunca: Montanha de Cores</p>
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
