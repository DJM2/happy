<!doctype html>
<html lang="es">

<head>
    @include('layouts.links')
    <title>Cusco, clasico City tour | Travel Agency Perú</title>
    <meta name="description"
        content="Aliamos este circuito a um momento de partilha de momentos com a população local conhecendo as suas praças principais, o mercado tradicional da cidade e os pratos típicos.">
    <meta name="keywords"
        content="Cusco, tour exclusivo, tour cusco, tour Peru, Pucapucara, Tambomachay, Tour em Cusco, viagem a Cusco, tour exclusivo em cusoo, cusco dia inteiro, conhecendo cusco">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cusco, clasico City tour | Travel Agency Perú" />
    <meta name="description" content="Full day city tour en Cusco, Sacsayhuaman, Koricancha, Pucapucara, Tambomachay" />
    <meta property="og:image" content="https://happyperutours.com/img/cusco-view.jpg" />
    <link rel="canonical" href="https://happyperutours.com/es/cusco-city-tour">
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
                    onclick="window.location.href='{{ route('city-tour-english') }}'">English</button></li>
            <li><button class="btn-lang"
                    onclick="window.location.href='{{ route('city-tour-castellano') }}'">Español</button></li>
        </ul>
    </li>
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
				<?php $titulo='Cusco City Tour'; echo $titulo; ?>
                
            </h1>
            <p class="p-titulo">
                <i class="icon-map-marker"></i> Cusco &nbsp;&nbsp;
                <i class="icon-dollar"></i> 50.00
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
                <o>Cusco</o>
                <m>City Tour Full day</m>
            </h2>
            <div class="separador-naranja"></div>
            <div class="separador-azul"></div>
            <div class="row">
                <div class="col-lg-3 display">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="happy-city-tour">
                            <p>Happy City Tour full day</p>
                        </a>
                        <a href="huchuy-qosqo-4-dias">
                            <p>Huchuy Qosqo & Machu picchu</p>
                        </a>
                        <a href="selva-inca-4-dias">
                            <p>Selva Inca 4 dias</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Lares caminhada 4d/3n</p>
                        </a>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao 4D/3N</p>
                        </a>
                        <a href="humantay-lagoa">
                            <p>Tour Lagoa Humantay</p>
                        </a>
                        <a href="valle-sagrado-2-dias">
                            <p>Vale Sagrado 2 dias</p>
                        </a>
                        <a href="salkantay-4-dias">
                            <p>Tour Salkantay 4 dias</p>
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
                                <td>4 horas</td>
                                <td>$50.00 por adulto</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-tours">
                        A UNESCO declarou Cusco como Centro do Patrimônio mundial em 1983, por sua beleza e história com
                        sítios arqueológicos incas, edifícios coloniais e vice-reinos, este passeio será a melhor
                        maneira de começar a conhecer Cusco; localizado no coração da Cordilheira dos Andes, rico em
                        cultura e tradições, durante seu percurso nos conecta com seu passado, também considerado um
                        museu vivo. A realização do city tour não envolve esforço físico e é altamente recomendável uma
                        boa aclimatação antes de iniciar uma caminhada.
                    <p>
                    <h5> ROTEIRO:</h5>
                    <p class="p-tours">
                        Pegaremos vocé do hotel às 13h, iniciamos o passeio no templo de QORICANCHA ou Templo do Sol,
                        esse era o mais importante na época dos Incas, visitaremos o local aproximadamente 40 minutos
                        visitando cada templo como : o Templo do Sol, das Estrelas, da Lua e do Relâmpago, receberá
                        informações sobre a importância e funções que tiveram no passado. Continuaremos o passeio em
                        direção ao Complexo Arqueológico de SACSAYHUAMAN, com uma visita de 45 minutos; considerado um
                        dos maiores e mais importantes sítios arqueológicos de Cusco; local onde atualmente se realiza o
                        Festival dedicado ao Padre SOL chamado INTI RAYMI todos os 24 de Junho, depois visitaremos mais
                        três sítios arqueológicos que são QENQO, PUKAPUKARA e TAMBOMACHAY, todos com uma visita de não
                        menos de 40 minutos, todos eles com o mesma importância e funções puramente religiosas para os
                        Incas. Finalmente retornaremos à cidade para visitar a Catedral de Cusco construída nos séculos
                        XVI e XVII, no local que, durante o Império Inca, foi ocupado tanto pelo Suntur Wasi quanto pelo
                        Kiswar Kancha ou Palácio do Inca Viracocha.terminamos o passeio às 18h.
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
                                    &check; Guia turístico profissional bilíngüe
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn collapsed btn-acordion btn-link" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        No Inclui:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    &#10008; Bilhete turístico Cusco <br>
                                    &#10008; Bilhete de entrada para o Qoricancha <br>
                                    &#10008; Bilhete de entrada para a Catedral<br>
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
                                    &#10034; Câmera fotográfica <br>
                                    &#10034; Garrafa de agua <br>
                                    &#10034; Capa de Chuva <br>
                                    &#10034; Álcool em gel <br>
                                    &#10034; Chapéu <br>
                                    &#10034; Dinheiro extra <br>
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
                    <div class="fb-comments" data-href="https://happyperutours.com/es/cusco-city-tour"
                        data-width="100%" data-numposts="5"></div>
                    <!-- ShareThis END -->

                </div>
                <div class="col-lg-3">
                    <div class="similares">
                        <h4 class="price"><span>Desde:</span><i class="icon-dollar"></i> 50.00 <i
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
                            <a href="{{ asset('img/galeria/city-tour-qoricancha.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-qoricancha.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-plaza-de-armas.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-plaza-de-armas.jpg') }}" loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-sacsayhuaman.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-sacsayhuaman.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-qoricancha-sincretismo.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-qoricancha-sincretismo.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay.jpg') }}" data-lightbox="photos">
                                <img class="img-fluid" src="{{ asset('img/thumbnail/city-tour-tambomachay.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 item">
                            <a href="{{ asset('img/galeria/city-tour-tambomachay-fuente.jpg') }}"
                                data-lightbox="photos">
                                <img class="img-fluid"
                                    src="{{ asset('img/thumbnail/city-tour-tambomachay-fuente.jpg') }}"
                                    loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 display2">
                    <div class="similares">
                        <h4 class="text-center">Passeios semelhantes</h4>
                        <a href="happy-city-tour">
                            <p>Happy City Tour full day</p>
                        </a>
                        <a href="huchuy-qosqo-4-dias">
                            <p>Huchuy Qosqo & Machu Picchu</p>
                        </a>
                        <a href="selva-inca-4-dias">
                            <p>Inka jungle 4 días</p>
                        </a>
                        <a href="lares-trekking-4-dias">
                            <p>Caminhada Lares 4 días</p>
                        </a>
                        <a href="passeio-choquequirao-4-dias">
                            <p>Choquequirao 4D/3N</p>
                            <a href="humantay-lagoa">
                                <p>Tour Lagoa Humantay</p>
                            </a>
                            <a href="valle-sagrado-2-dias">
                                <p>Vale Sagrado 2 días</p>
                            </a>
                            <a href="salkantay-4-dias">
                                <p>Tour Salkantay 4 días</p>
                            </a>
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
