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
                <h1 class="my-0 site-logo"><a href="{{ route('inicio') }}"><img
                            src="{{ asset('img/happy-peru-tours-logo.png') }}" class="logo"></a></h1>
            </div>
            <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                    <div class="container">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                class="site-menu-toggle js-menu-toggle text-white"><span
                                    class="icon-menu h3"></span></a></div>
                        <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                            <li class="has-children">
                                <a href="{{ route('inicio') }}" class="nav-link"
                                    @if (request()->is('es/tradicional')) id="active" @endif>tradicional</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ route('city-tour-castellano') }}" class="nav-link">Cusco City
                                            tour</a></li>
                                    <li><a href="{{ route('happy-tour-experiencia') }}" class="nav-link">Happy
                                            Experience tour</a></li>
                                    <li><a href="{{ route('happy-city-tour-castellano') }}" class="nav-link">Happy
                                            city
                                            tour Full Day</a></li>
                                    <li><a href="{{ route('valle-sagrado-2-dias') }}" class="nav-link">Valle Sagrado &
                                            Machu Picchu</a></li>
                                    <li><a href="{{ route('valle-sagrado-de-los-incas') }}" class="nav-link">Valle
                                            Sagrado de los incas</a></li>
                                    <li><a href="{{ route('maras-moray-salineras') }}" class="nav-link">Maras/Moray &
                                            Salineras</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="{{ route('aventuras') }}" class="nav-link"
                                    @if (request()->is('en/adventure')) id="active" @endif>Aventura</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ route('inca-trail-2-dias') }}" class="nav-link">Camino Inca corto
                                            2
                                            días</a></li>
                                    <li><a href="{{ route('huchuy-qosqo-a-machu-picchu') }}" class="nav-link">Huchuy
                                            Qosqo & Machu Picchu 2 días</a></li>
                                    <li><a href="{{ route('inca-trail-4-dias') }}" class="nav-link">Camino Inca 4
                                            días</a></li>
                                    <li><a href="{{ route('inca-jungle-4-dias') }}" class="nav-link">Inca jungle 4
                                            días</a></li>
                                    <li><a href="{{ route('caminata-a-lares-4-dias') }}" class="nav-link">Caminata
                                            Lares 4 días</a></li>
                                    <li><a href="{{ route('valle-sagrado-3-dias') }}" class="nav-link">Valle Sagrado
                                            &
                                            Camino Inca 3 días</a></li>
                                    <li><a href="{{ route('salkantay-4-dias-tour') }}" class="nav-link">Salkantay 4
                                            días</a>
                                    </li>
                                    <li><a href="{{ route('salkantay-5-dias-tour') }}" class="nav-link">Salkantay 5
                                            días</a>
                                    </li>
                                    <li><a href="{{ route('tour-choquequirao-4-dias') }}"
                                            class="nav-link">Choquequirao
                                            4 días</a></li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="{{ route('alternativos-castellano') }}" class="nav-link"
                                    @if (request()->is('en/alternative')) id="active" @endif>Alternativos</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ route('7-lagunas-tour') }}" class="nav-link">7 Lagunas</a></li>
                                    <li><a href="#" class="nav-link">Huchuy Qosqo</a></li>
                                    <li><a href="{{ route('laguna-humantay') }}" class="nav-link">Laguna
                                            Humantay</a>
                                    </li>
                                    <li><a href="{{ route('qeswachaca') }}" class="nav-link">Queswachaca</a></li>
                                    <li><a href="{{ route('vinicunca-tour') }}" class="nav-link">Montaña de
                                            colores</a></li>
                                    <li><a href="{{ route('waqrapukara-tour') }}" class="nav-link">Waqra Pucara
                                            full
                                            day</a></li>
                                    <li><a href="{{ route('inca-trail-360°') }}" class="nav-link">Inca Rail 360°
                                            tour
                                            en tren</a></li>
                                    <li><a href="{{ route('inca-rail-primera-clase') }}" class="nav-link">Inca Rail
                                            first class tour en tren</a>
                                    </li>
                                    <li><a href="{{ route('inca-rail-voyager-tour') }}" class="nav-link">Inca Rail
                                            Voyager
                                            tour en tren</a></li>
                                    <li><a href="{{ route('perurail-expedition-tour') }}" class="nav-link">Peru
                                            Rail
                                            expedition tour en tren</a>
                                    </li>
                                    <li><a href="{{ route('hiram-bingham') }}" class="nav-link">Peru Rail Hiram
                                            Bingham tour en tren</a></li>
                                    <li><a href="{{ route('perurail-valle-sagrado') }}" class="nav-link">Peru Rail
                                            Valle Sagrado tour en tren</a></li>
                                    <li><a href="{{ route('perurail-vistadome-tour') }}" class="nav-link">Peru Rail
                                            vistadome tour en tren</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="{{ route('alrededor-de-peru') }}" class="nav-link"
                                    @if (request()->is('tours by train')) id="active" @endif>Tours Perú</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="{{ route('lima-paracas-3-dias') }}" class="nav-link">Lima, Paracas
                                            3 días</a></li>
                                    <!----- <li class="has-children">
                                    <a href="#">More Links</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li> -->
                                </ul>
                            </li>
                            <li @if (request()->is('blog-castellano')) class="active" @endif><a
                                    href="{{ route('blog-castellano') }}" class="nav-link">Blog</a>
                            </li>
