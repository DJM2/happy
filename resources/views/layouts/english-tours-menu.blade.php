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
                        <a target="_blanc" rel="no-follow" href="https://www.facebook.com/happyperutours" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.instagram.com/happyperutours/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.tripadvisor.com/Profile/happyperutours" class="p-2 pl-0"><span class="icon-tripadvisor"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.pinterest.com/HappyPeruTours" class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                        <a target="_blanc" rel="no-follow" href="https://www.twitter.com/HappyPeruTour1" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                        <a href="/">
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
                                    <a href="traditional" class="nav-link"
                                        @if (request()->is('en/traditional')) id="active" @endif>traditional</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="cusco-city-tour" class="nav-link">Cusco City tour</a></li>
                                        <li><a href="happy-experience-tour" class="nav-link">Happy Experience tour</a></li>
                                        <li><a href="happy-city-tour-full-day" class="nav-link">Happy city tour Full Day</a></li>
                                        <li><a href="sacred-valley-2-days" class="nav-link">Sacred Valley & Machu Picchu</a></li>
                                        <li><a href="sacred-valley-full-day" class="nav-link">Sacred Valley</a></li>
                                        <li><a href="maras-moray-salineras-tour" class="nav-link">Salt mines & Maras/Moray</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="adventure" class="nav-link"
                                        @if (request()->is('en/adventure')) id="active" @endif>Adventure tours</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="choquequirao-4-days-tour" class="nav-link">Choquequirao 4 days</a></li>
                                        <li><a href="huchuy-qosqo-to-machu-picchu" class="nav-link">Huchuy Qosqo & Machu Picchu 2
                                                days</a></li>
                                        <li><a href="inca-trail-4-days" class="nav-link">Inca Trail 4 days</a></li>
                                        <li><a href="inca-jungle-4-days-tour" class="nav-link">Inca jungle 4 days</a></li>
                                        <li><a href="lares-trek-4-days" class="nav-link">Lares Trek 4 days</a></li>
                                        <li><a href="sacred-valley-3-days-tour" class="nav-link">Sacred Valley & Inca trail</a>
                                        </li>
                                        <li><a href="salkantay-trek-4-days-tour" class="nav-link">Salkantay 4 days</a></li>
                                        <li><a href="salkantay-trek-tour-5-days" class="nav-link">Salkantay 5 days</a></li>
                                        <li><a href="inca-trail-2-days" class="nav-link">Short Inca trail 2 days</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="../alternatives" class="nav-link"
                                        @if (request()->is('../alternatives')) id="active" @endif>alternative tours</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="ausangate-7-lakes-tour" class="nav-link">7 Lagoons</a></li>
                                        <li><a href="huchuy-qosqo-to-machu-picchu" class="nav-link">Huchuy Qosqo</a></li>
                                        <li><a href="humantay-lake-tour" class="nav-link">Humantay Lagoon</a></li>
                                        <li><a href="qeswachaca-tour" class="nav-link">Queswachaca</a></li>
                                        <li><a href="rainbow-mountain-tour" class="nav-link">Rainbow Mountain</a></li>
                                        <li><a href="waqrapukara-full-day-tour" class="nav-link">Waqra Pucara full day</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="tours-in-train" class="nav-link"
                                        @if (request()->is('en/tours-in-train')) id="active" @endif>tours by train</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="inca-trail-360°-train-tour" class="nav-link">Inca Rail 360° train tour</a></li>
                                        <li><a href="inca-rail-first-class" class="nav-link">Inca Rail first class train tour</a>
                                        </li>
                                        <li><a href="inca-rail-voyager-train" class="nav-link">Inca Rail Voyager train tour</a></li>
                                        <li><a href="peru-rail-expedition-train" class="nav-link">Peru Rail expedition train tour</a>
                                        </li>
                                        <li><a href="hiram-binghan-train-tour" class="nav-link">Peru Rail Hiram Bingham train
                                                tour</a></li>
                                        <li><a href="perurail-sacred-valley-tour" class="nav-link">Peru Rail Sacred Valley train
                                                tour</a></li>
                                        <li><a href="perurail-vistadome-train" class="nav-link">Peru Rail vistadome train tour</a>
                                        </li>
                                    </ul>
                                </li>
                                <li @if (request()->is('blog')) class="active" @endif><a href="../blog-peru"
                                        class="nav-link">Blog</a></li>
