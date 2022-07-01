<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Trilha Salkantay 5 dias | Agência de viagens Peru</title>
    <meta name="description"
        content="A caminhada esconde magníficas paisagens naturais e nos convida a descobrir as maravilhas das regiões do Peru. Começando na região Quechua onde...">
    <meta name="keywords"
        content="Cusco, Tour salkantay, Salkantay trek, salkantay trek tour, tour a salkantay, salkantay 5 dias tour, 5 dias trek salkantay">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trilha Salkantay 5 dias | Agência de viagens Peru" />
    <meta property="og:image" content="https://happyperutours.com/img/thumbnail/salkantay-trek.jpgg" />
    <link rel="canonical" href="https://happyperutours.com/pt/trilha-inca-2-dias">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
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
                    onclick="window.location.href='{{ route('salkantay-5-days') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('salkantay-5-dias-español') }}'">Español</button>
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
                    <?php $titulo = 'Trilha Salkantay 5 dias';
                    echo $titulo; ?>
                </h1>
                <p class="p-titulo">
                    <i class="icon-map-marker"></i> Cusco - Salkantay - Machupicchu&nbsp;&nbsp;
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
        <div class="lares"></div>
        <section>
            <div class="container">
                <h2 class="h2-happy">
                    <o>Trilha Salkantay</o>
                    <m> por 5 dias</m>
                </h2>
                <div class="separador-naranja"></div>
                <div class="separador-azul"></div>
                <div class="row">
                    <div class="col-lg-3 display">

                        <div class="similares">
                            <h4 class="text-center">Passeios semelhantes</h4>
                            <a href="valle-sagrado-2-dias">
                                <p>Valle Sagrado 2 días</p>
                            </a>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>

                            <a href="7-lagoas-tour">
                                <p>Ausangate 7 lagoas</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>

                            <a href="inca-rail-360°">
                                <p>Inca Rail 360° Passeio de trem</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Qeswachaca Tour</p>
                            </a>
                            <a href="passeio-choquequirao-4-dias">
                                <p>Choquequirao 4D/3N</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machupicchu 4 días</p>
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
                                    <td>5 dias</td>
                                    <td>US$ 500,00 por adulto</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="h5-tours">Visão global:</h5>
                        <p class="p-tours">
                            Considerada uma das melhores trilhas do mundo, é a maneira mais incrível de chegar a
                            MACHUPICCHU; Esta rota de caminhada atravessa uma das montanhas nevadas mais importantes da
                            cidade de Cusco que é SALKANTAY (6270 m.), a caminhada esconde magníficas paisagens naturais
                            e nos convida a descobrir as maravilhas das regiões do Peru. Começando na região Quechua
                            3000 m. então acampe em 3.900 m. Região de Puna, até atingir o ponto mais alto de SALKANTAY
                            4650 m. e finalmente conhecer nossa sobrancelha de selva ou selva alta 1900 m. Durante o
                            trajeto pode-se apreciar uma grande variedade de flora e fauna. Um dia antes de atingir
                            nossa meta, que é MACHU PICCHU, poderemos subir a uma das últimas construções incas
                            LLACTAPATA de onde podemos avistar a grande cidadela de MACHUPICCHU com uma vista
                            impressionante do vale.
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
                                    <td>6 horas</td>
                                    <td>12 km</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            O guia irá buscá-lo em seu hotel às 4:30 da manhã, pegaremos o ônibus turístico privado para
                            o povo de Mollepata por cerca de 2 horas e 30 minutos, neste local teremos café da manhã
                            opcional e depois continuaremos de ônibus por aproximadamente 1 hora até CHALLACANCHA, ponto
                            de partida de nossa caminhada e ponto de encontro com o resto da equipe do nosso grupo,
                            teremos tempo suficiente para organizar nossas mochilas, coisas pessoais, equipamentos de
                            camping, equipamento de cozinha e os cavalos, esse será o nosso meio de transporte durante
                            os primeiros 3 dias. <br><br>
                            Poucos minutos depois de iniciar a caminhada chegaremos a um antigo
                            canal Inca através do qual continuaremos a viagem, deste lugar também teremos uma vista
                            impressionante da HUMANTAY nevada, após três horas de caminhada chegaremos a SORAYPAMPA
                            (3900 m) onde teremos o primeiro almoço e primeiro acampamento, após o almoço faremos uma
                            curta caminhada para ver a bela lagoa Humantay, famosa na região de Cusco. Voltaremos apenas
                            para a hora do chá e depois o jantar fornecido pelo equipe de cozinha; À noite é
                            recomendável reservar alguns minutos para observar as estrelas, pois estamos em um local
                            alto, limpo, sem poluição e é fácil ver as constelações.
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
                                    <td>Difícil</td>
                                    <td>9 horas</td>
                                    <td>18 km</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            Muito cedo o seu guia irá acordá-lo com um chá quente de coca, este dia será repleto de
                            surpresas por todas as paisagens que você encontrará pelo caminho, após o café da manhã
                            iremos para o ponto mais alto do passeio. levará aproximadamente 4 horas, a parte mais alta
                            ou também chamada de SALKANTAY PASS é elevada a 4650 metros acima do nível do mar deste
                            ponto, poderemos apreciar o majestoso pico nevado SALKANTAY 6280 m. <br><br>
                            Para chegar ao topo, a caminhada de ascensão será um pouco difícil mas NÃO impossível se o
                            fizermos a passos
                            lentos, uma vez no topo o guia explicará o local e depois iniciará a descida pelo vale
                            apreciando sempre os belos panoramas que a natureza nos oferece. , depois de aproximadamente
                            1 hora chegaremos ao local do almoço HUAYRACMACHAY, uma vez que o descanso estiver terminado
                            e tivermos desfrutado de um delicioso almoço continuaremos a descida pelo vale por um tempo
                            de 3 horas mas nesta parte a paisagem mudará, teremos flora e fauna exuberantes, esse
                            microclima da parte alta dos Andes é conhecido como uma floresta nublada semelhante à selva,
                            por isso preparamos câmeras porque começaremos a ver animais em seu habitat natural, flores
                            e orquídeas, este dia terminará aproximadamente às 17h30 no segundo acampamento CHAULLAY
                            (2800 m.)
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Moderado</td>
                                    <td>9 horas</td>
                                    <td>18 km</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            Este dia também é interessante porque à medida que descemos o tempo muda de frio para mais
                            úmido, a paisagem torna-se mais verde e o guia vai mostrar-te tudo ao longo do percurso. O
                            café da manhã será bem cedo pois tentaremos ser os primeiros de todos os grupos a deixar o
                            acampamento e assim ter a oportunidade de ver os animais, curtir a tranquilidade do passeio
                            e ter tempo para algumas atividades como fazer o tour do café ou visitar as águas termais de
                            Santa Teresa, a jornada neste dia será gradativa com algumas pequenas subidas e estradas
                            planas por aproximadamente 5 horas, depois chegaremos ao nosso último acampamento chamado LA
                            PLAYA, chegando entre 1 ou 2 da tarde, lá o guia lhe dará opções para algumas atividades
                            extras. O jantar será cedo porque o dia seguinte ainda será longo.
                        </p>
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
                                    <td>Moderado</td>
                                    <td>9 horas</td>
                                    <td>18 km</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            O despertar será com um chá quente, pela manhã teremos tempo suficiente para prepararmos
                            todos os nossos equipamentos e após do café da manhã iniciaremos a nossa caminhada durante
                            quase 3 horas até chegarmos ao sítio arqueológico de LLACTAPATA aproveitando a manhã fresca
                            antes de o sol chegar, o sítio arqueológico é um lindo lugar que fica dentro da vegetação
                            com um clima quente e úmido, um lugar privilegiado porque de lá você poderá apreciar não só
                            a montanha de Machupicchu e Waynapicchu, senão também a Cidadela inca de Machu Picchu, linda
                            vista que ficará para ser lembrada, então continuaremos nossa aventura descendo em direção
                            ao vale AOBAMBA onde almoçaremos, também este lugar é espetacular por ter cachoeiras e água
                            doce para tomar banho, após o almoço caminharemos por volta de 40 minutos até a localidade
                            de HIDROELÉCTRICA, de onde caminharemos ao longo da linha ferrovíaria por 3 horas até
                            chegarmos à cidade de<strong> AGUAS CALIENTES</strong>, aqui um jantar nos espera em um
                            confortável
                            restaurante e a última noite em um hostel.
                        </p>
                        <p class="p-tours text-center">
                            <fuerte>DIA 05:</fuerte>
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
                                    <td>6 km</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="p-tours">
                            Este dia será um desafio para tentar ser um dos primeiros grupos a visitar a cidadela de
                            Machupicchu, pois o despertar será bem cedo às 4h para podermos chegar a tempo na estação de
                            ônibus porque também haverá muitas pessoas com o mesmo objetivo, o primeiro ônibus sairá às
                            5h30 com um passeio de 30 minutos, estaremos fazendo nossa entrada na cidadela às 6h00, o
                            passeio guiado dura aproximadamente 3 horas conhecendo os lugares mais importantes e os
                            destaques de Machu Picchu, depois disso terão um tempo racional livre para tirar fotos e
                            encher-se de energia que só este lugar maravilhoso pode oferecer, voces também terão a opção
                            de poder dar um pequeno passeio até o INTIPUNKU ou Porta del Sol de onde podem tirar fotos
                            panorâmicas de Machu Picchu, recomenda-se descer a AGUAS CALIENTES para almoçar pois há mais
                            opções, o trem de volta a Cusco sairá às 4:20 pm chegando à cidade de Cusco às 20h30 para o
                            hotel.
                        </p>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0 text-center">
                                        <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Inclui:
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        &check; Traslado do hotel até o ponto de inicio da trilha.<br>
                                        &check; Transporte turístico Cusco- Challacancha<br>
                                        &check; Trem turístico Machu Picchu- Ollantaytambo.<br>
                                        &check; Transporte turístico Ollantaytambo - Cusco<br>
                                        &check; Bilhete de ônibus Aguas Calientes - Machu Picchu<br>
                                        &check; Bilhetes de entrada para Mollepata, rota Salkantay e Machupicchu<br>
                                        &check; 4 cafés da manhã, 4 almoços, 4 jantares, 3 horas de chá (opção
                                        vegetariana) <br>
                                        &check; Lanches<br>
                                        &check; Guia profissional bilíngüe <br>
                                        &check; Cozinheiro profissional<br>
                                        &check; Equipamento de acampamento (barraca e colchão)<br>
                                        &check; Arrieiro ou cavaleiro <br>
                                        &check; Cavalo (7 quilos por pessoa) <br>
                                        &check; Cavalo (para todos os equipamentos de acampamento e cozinha).<br>
                                        &check; Maleta de primeiros socorros.<br>
                                        &check; Oxigênio.<br>
                                        &check; Álcool e desinfetantes em gel fazem parte do protocolo de biossegurança
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
                                        &#10008; Bebidas extras<br>
                                        &#10008; 2ª passagem de ônibus turístico (Machupicchu- Aguas Calientes) opcional.<br>
                                        &#10008; Saco de dormir<br>
                                        &#10008; Custo de atividades extras
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
                                        &#10034; Saco de dormir<br>
                                        &#10034; Protetor  solar<br>
                                        &#10034; Repelente de mosquitos<br>
                                        &#10034; Lanches (chocolates, doces, nozes etc.)<br>
                                        &#10034; Lanterna<br>
                                        &#10034; Câmera fotográfica <br>
                                        &#10034; Baterias extras <br>
                                        &#10034; Garrafa de água<br>
                                        &#10034; Capa de chuva<br>
                                        &#10034; Álcool em gel<br>
                                        &#10034; Cajados <br>
                                        &#10034; Roupa extra <br>
                                        &#10034; Chapéu e Boné<br>
                                        &#10034; Dinheiro extra<br>
                                        &#10034; Medicamentos pessoais<br>
                                        &#10034; Chinelos 

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
                        <div class="fb-comments" data-href="https://happyperutours.com/pt/salkantay-5-dias"
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
                                <a href="{{ asset('img/galeria/salkantay-tour.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-tour.jpg') }}"
                                        alt="Tour de Salkantay">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/salkantay-adventure.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/salkantay-adventure.jpg') }}"
                                        alt="Salkantay tour">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/salkantay-tour-trek.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/salkantay-tour-trek.jpg') }}"
                                        alt="Salkantay 5 dias">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/salkantay-trek.jpg') }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('img/thumbnail/salkantay-trek.jpg') }}"
                                        alt="salkantay a machu picchu">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4 item">
                                <a href="{{ asset('img/galeria/salkantay-start-trek.jpg') }}"
                                    data-lightbox="photos">
                                    <img class="img-fluid"
                                        src="{{ asset('img/thumbnail/salkantay-start-trek.jpg') }}"
                                        alt="machu picchu por salkantay">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!----Similar responsive--------->
                <div class="row">
                    <div class="col-lg-12 display2">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <div class="similares">
                            <a href="valle-sagrado-2-dias">
                                <p>Valle Sagrado 2 días</p>
                            </a>
                            <a href="city-tour-cusco">
                                <p>Cusco City Tour</p>
                            </a>

                            <a href="7-lagoas-tour">
                                <p>Ausangate 7 lagoas</p>
                            </a>
                            <a href="lares-trekking-4-dias">
                                <p>Caminhada Lares 4d/3n</p>
                            </a>

                            <a href="inca-rail-360°">
                                <p>Inca Rail 360° Passeio de trem</p>
                            </a>
                            <a href="qeswachaca-tour">
                                <p>Qeswachaca Tour</p>
                            </a>
                            <a href="passeio-choquequirao-4-dias">
                                <p>Choquequirao 4D/3N</p>
                            </a>
                            <a href="trilha-inca-4-dias">
                                <p>Trilha Inca a Machupicchu 4 días</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.foot-portugues')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</body>

</html>
