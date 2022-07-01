<!doctype html>
<html lang="en">

<head>
    @include('layouts.links')
    <title> Happy City Tour Exclusivo Cusco | Travel Agency Perú</title>
    <meta name="description"
        content="Exclusivo city tour de dia inteiro em Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay">
    <meta name="keywords" content="Cusco, tour exclusivo, tour cusco, tour, Pucapucara, Tambomachay, Tours Exclusivos">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Exclusive Happy City Tour Cusco | Travel Agency Perú" />
    <meta name="description"
        content="It is a good alternative to get to Machupicchu, although the Lares valley is very extensive, this means that there are different routes in Cusco, Perú." />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/pt/happy-experiencia-tour">
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
                    onclick="window.location.href='{{ route('happy-experience-tour') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('happy-tour-experiencia') }}'">Español</button>
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
                <?php
                $titulo = 'Happy City Tour';
                echo $titulo;
                ?>
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i> 60.00
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
                <o>Exclusivo </o>
                <m>Happy City Tour</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">

                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="trilha-inca-2-dias">
                            <p> Trilha Inca 2 dias</p>
                        </a>
                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca 4 dias</p>
                        </a>
                        <a href="selva-inca-4-dias">
                            <p>Selva Inka à Machu Picchu</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Lares Caminhada 4d/3n</p>
                        </a>
                        <a href="paseio-choquequirao-4-dias">
                            <p>Choquequirao 4 dias</p>
                        </a>
                        <a href="maras-moray-e-salineras">
                            <p>Maras, Moray e Salineras</p>
                        </a>
                        <a href="salkantay-5-dias">
                            <p>Tour Salkantay 5 dias</p>
                        </a>
                        <a href="city-tour-cusco">
                            <p>Cusco City tour</p>
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
                                <td>Fácil</td>
                                <td>8 horas</td>
                                <td>$60.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        Depois de chegar em Cusco, pode não servir 100% para você, então você precisará se aclimatar e a
                        melhor maneira é passar um tempo em Cusco sem fazer muito esforço e este passeio será uma boa
                        opção para conhecer o jeito de vida da população local em Cusco, o passeio pelo mercado, as
                        aulas de culinária e o show de pisco sour são interessantes porque nos oferecem coisas
                        diferentes em comparação com outros passeios. Isso é mais para ficar em contato com a população
                        local; por exemplo, usando o serviço de transporte local e como eles comercializam produtos
                        orgânicos, vegetais, frutas e outros durante todo o dia. Não se surpreenda se no caminho você
                        ouvir as vendedoras dizerem, por exemplo, "Papito lindo" "tesouro" ou para as meninas "mamita
                        linda" "Chaska ñawi" são algumas das expressões afetuosas de Cusco que usam para vender seus
                        produtos. “Se você não se sente 100% bonito ou bonita, não se preocupe, nos mercados de Cusco,
                        os comerciantes farão você se sentir bonito e feliz.
                    </p><br>
                    <h5 class="h5-tours"> ROTEIRO:</h5>

                    <p class="p-tours">
                        O Guia irá buscá-lo no hotel às 9h00 e depois irá ao ponto de ônibus público mais próximo,
                        pegaremos o ônibus para um dos mercados mais famosos de Cusco VINOCANCHON o tempo de viagem será
                        de 30 minutos, durante o percurso, o guia se encarrega de explicar curiosidades sobre o uso do
                        transporte público, nomes dos bairros ou outras paradas até chegarmos ao nosso destino. Assim
                        que chegarmos ao mercado nos preparamos para ter experiências únicas e muitas surpresas que
                        encontraremos em nossa jornada. <br> Lembre-se que todos estes produtos básicos que encontramos são
                        orgânicos produzidos nas montanhas e vales de Cusco, o passeio será feito através das diferentes
                        seções de produtos devidamente classificados; O mais interessante que veremos é a seção de
                        comidas típicas; por exemplo: o caldo de cabeça de borrego ou vão admirar a quantidade de porção
                        que servem no prato. Continuando com o passeio visitaremos os tradicionais CHICHERÍAS ou bares
                        andinos onde degustaremos a tradicional cerveja de milho mais conhecida como CHICHA, saberemos
                        como prepará-la e fermentá-la. <br>Depois embarcaremos em nossa van de turismo que nos levará ao
                        povoado de HUASAO "capital do curanderismo andino no Peru ¨xamã " onde Mama GENARA nos espera
                        para dar aulas de culinária, prepararemos uma rica sopa de quinua, creme de batatas amarelas,
                        acompanhando nosso almoço andino com um milho com queijo e sua inevitável bebida refrescante
                        CHICHA MORADA que não contém álcool. <br>Teremos a oportunidade de ver a criação de
                        porquinhos-da-índia e talvez poder alimentá-los. Por fim vem o mais esperado THE PISCO SOUR SHOW
                        (bebida nacional do Peru), conheceremos seus ingredientes e aprenderemos a preparar; Depois de
                        um brinde a este dia de experiências inesquecíveis, retornaremos a Cusco chegando ao hotel
                        aproximadamente às 17 horas.
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
                                    &check; Recolho no hotel<br>
                                    &check; Guia profissional<br>
                                    &check; Bilhetes de transporte público<br>
                                    &check; Transporte turístico<br>
                                    &check;Degustação de CHICHA<br>
                                    &check; Almoço andino<br>
                                    &check; Pisco Sour
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Não inclui::
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Compras de mercado<br>
                                    &#10008; Gorjetas 
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
                                    &#10034; Protetor solar<br>
                                    &#10034; Câmera fotográfica<br>
                                    &#10034; Garrafa de agua<br>
                                    &#10034; Capa de chuva<br>
                                    &#10034; Álcool em gel<br>
                                    &#10034; Chapéu<br>
                                    &#10034; Dinheiro extra<br>
                                    &#10034; Maleta de primeiros socorros ou medicamentos pessoais
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
                    <div class="fb-comments" data-href="https://happyperutours.com/pt/happy-experiencia-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 60.00 <i
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
                            <a href="{{ asset('img/galeria/happy-cusco-exclusive.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-cusco-exclusive.jpg') }}"
                                    alt="lares trek tour">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-cusco-experience.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-cusco-experience.jpg') }}"
                                    alt="lares tour 4 days">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-cusco-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-cusco-tour.jpg') }}"
                                    alt="tour a lares">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/happy-experience.jpg') }}"
                                    alt="tour en lares">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience-cusco.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/happy-experience-cusco.jpg') }}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/happy-experience-tour.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/happy-experience-tour.jpg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display2">
                    <h4 class="text-center">Similar Tours</h4>
                    <div class="similares">
                        <a href="trilha-inca-2-dias">
                            <p> Trilha Inca 2 dias</p>
                        </a>
                        <a href="trilha-inca-4-dias">
                            <p>Trilha Inca 4 dias</p>
                        </a>
                        <a href="selva-inca-4-dias">
                            <p>Selva Inka à Machu Picchu</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Lares Caminhada 4d/3n</p>
                        </a>
                        <a href="paseio-choquequirao-4-dias">
                            <p>Choquequirao 4 dias</p>
                        </a>
                        <a href="maras-moray-e-salineras">
                            <p>Maras, Moray e Salineras</p>
                        </a>
                        <a href="salkantay-5-dias">
                            <p>Tour Salkantay 5 dias</p>
                        </a>
                        <a href="city-tour-cusco">
                            <p>Cusco City tour</p>
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
