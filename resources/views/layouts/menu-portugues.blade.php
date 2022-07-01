<!-- .site-mobile-menu -->
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex mr-auto">
                        <a href="mailto:reservas@happyperutours.com" class="d-flex align-items-center mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">reservas@happyperutours.com</span>
                        </a>
                        <a href="https://bit.ly/3CRGLAE" target="_blanck" class="d-flex align-items-center mr-auto">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block"> +51 947 057 622</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="mr-auto">
                        <a target="_blanc" rel="no-follow" href="https://www.facebook.com/happyperutours"
                            class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.instagram.com/happyperutours"
                            class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.tripadvisor.com/Profile/happyperutours"
                            class="p-2 pl-0"><span class="icon-tripadvisor"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.pinterest.com/HappyPeruTours"
                            class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.twitter.com/HappyPeruTour1"
                            class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <a href="{{ route('comecar') }}">
                        <img src="{{ asset('img/happy-peru-tours-logo.png') }}" class="logo">
                    </a>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li class="has-children">
                                    <a href="{{ route('tradicional-portugues') }}" class="nav-link"
                                        @if (request()->is('py/traditional')) id="active" @endif>Tradicional</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="{{ route('city-tour-portugues') }}" class="nav-link">Cusco City
                                                tour</a></li>
                                        <li><a href="{{ route('happy-experiencia-tour') }}" class="nav-link">Happy
                                                Experience
                                                tour</a></li>
                                        <li><a href="{{ route('happy-city-tour') }}" class="nav-link">Happy city
                                                tour Full
                                                Day</a></li>
                                        <li><a href="{{ route('valle-sagrado-2-dias-portugues') }}"
                                                class="nav-link">Vale Sagrado & Machu
                                                Picchu</a></li>
                                        <li><a href="{{ route('vale-sagrado-dos-incas') }}" class="nav-link">Vale
                                                Sagrado dos Incas</a></li>
                                        <li><a href="{{ route('maras-moray-e-salineras') }}" class="nav-link">Maras,
                                                Moray e Salineras</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('aventura-portugues') }}" class="nav-link"
                                        @if (request()->is('en/adventure')) id="active" @endif>Aventura</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="{{ route('passeio-choquequirao-4-dias') }}"
                                                class="nav-link">Choquequirao 4
                                                dias</a></li>
                                        <li><a href="{{ route('huchuy-qosqo-2-dias-portugues') }}" class="nav-link">Huchuy
                                                Qosqo &
                                                Machu Picchu</a></li>
                                        <li><a href="{{ route('trilha-inca-4-dias') }}" class="nav-link">Trilha Inca
                                                4
                                                dias</a></li>
                                        <li><a href="{{ route('selva-inca-4-dias') }}" class="nav-link">Selva Inca 4
                                                dias</a>
                                        </li>
                                        <li><a href="{{ route('lares-trekking-4-dias') }}" class="nav-link">Lares
                                                Treking 4 dias</a>
                                        </li>
                                        <li><a href="{{ route('vale-sagrado-e-trilha-inca') }}" class="nav-link">Vale
                                                Sagrado e Trilha Inca</a>
                                        </li>
                                        <li><a href="{{ route('salkantay-4-dias') }}" class="nav-link">Salkantay 4
                                                dias</a></li>
                                        <li><a href="{{ route('salkantay-5-dias') }}" class="nav-link">Salkantay 5
                                                dias</a></li>
                                        <li><a href="{{ route('trilha-inca-2-dias') }}" class="nav-link">Curta Trilha
                                                Inca 2 dias</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('alternativas-portugues') }}" class="nav-link"
                                        @if (request()->is('alternatives')) id="active" @endif>Alternativas</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="{{ route('7-lagoas-tour') }}" class="nav-link">7 Lagoas</a>
                                        </li>
                                        <li><a href="{{ route('huchuy-qosqo-portugues') }}" class="nav-link">Huchuy Qosqo</a></li>
                                        <li><a href="{{ route('humantay-lagoa') }}" class="nav-link">Lagoa
                                                Humantay</a>
                                        </li>
                                        <li><a href="{{ route('qeswachaca-portugues') }}"
                                                class="nav-link">Queswachaca</a></li>
                                        <li><a href="{{ route('vinicunca-montanha') }}" class="nav-link">Montanha
                                                de 7 Cores</a>
                                        </li>
                                        <li><a href="{{ route('waqrapukara-full-day') }}" class="nav-link">Waqra
                                                Pucara full
                                                day</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="{{ route('tren-portugues') }}" class="nav-link"
                                        @if (request()->is('tours by train')) id="active" @endif>Passeios de Trem</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="{{ route('inca-rail-360°') }}" class="nav-link">Inca Rail 360°
                                                tour de trem</a></li>
                                        <li><a href="{{ route('inca-rail-primeira-classe') }}"
                                                class="nav-link">Inca Rail Primeira Classe
                                                tour de trem</a>
                                        </li>
                                        <li><a href="{{ route('inca-rail-voyager') }}" class="nav-link">Inca Rail
                                                Voyager
                                                tour de trem</a></li>
                                        <li><a href="{{ route('perurail-expedition') }}" class="nav-link">Peru Rail
                                                expedition tour de trem</a>
                                        </li>
                                        <li><a href="{{ route('perurail-hiram-bingham') }}" class="nav-link">Peru
                                                Rail Hiram
                                                Bingham tour de trem</a></li>
                                        <li><a href="{{ route('perurail-vale-sagrado') }}" class="nav-link">Peru Rail Vale
                                                Sagrado
                                                tour de trem</a></li>
                                        <li><a href="{{ route('perurail-vistadome') }}" class="nav-link">Peru Rail Vistadome
                                                tour de trem</a>
                                        </li>
                                    </ul>
                                </li>
                                <li @if (request()->is('blog')) class="active" @endif>
                                    <a href="{{ route('blog-portugues') }}" class="nav-link">Blog</a>
                                </li>
