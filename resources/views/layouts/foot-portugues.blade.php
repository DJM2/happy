<section class="parallax">
    <h3>Junte-se ao boletim</h3>
    <p>Para inspiração e insights de viagem</p>
    <div class="container">
        <form style="color: #fff" method="POST" action="{{ route('newsletter') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="text" class="form-control" name="name" placeholder="Nome:">
                </div>
                <div class="form-group col-lg-2 col-sm-12 text-center">
                    <button type="submit">Mandar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="foot-ingles">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-center">Consulta</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li><a href="../../about-us">Sobre nós</a></li>
                    <li><a href="../../testimonials">Depoimentos</a></li>
                    <li><a href="../../terms-and-conditions">Termos e Condições</a></li>
                    <li><a href="../../faqs">Perguntas Frequentes</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Contato</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li>info@happyperutours.com</li>
                    <li>+51 947 057 622</li>
                    <li>Av. Ccorimachachuay D-2 santiago </li>
                </ul> 
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Entrar em contato</h3>
                <div class="separador-foot"></div>
                <div class="social-foot">
                    <a href="https://www.facebook.com/happyperutours" rel="nofollow" class="p-2 pl-0" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="https://www.instagram.com/happyperutours/" rel="nofollow" class="p-2 pl-0" target="_blank"><span class="icon-instagram"></span></a>
                    <a href="https://www.tripadvisor.com/Profile/happyperutours" rel="nofollow" class="p-2 pl-0" target="_blank"><span class="icon-tripadvisor"></span></a>
                    <a href="https://www.pinterest.com/HappyPeruTours" rel="nofollow" class="p-2 pl-0" target="_blank"><span class="icon-pinterest"></span></a>
                    <a href="https://www.twitter.com/HappyPeruTour1" rel="nofollow" class="p-2 pl-0" target="_blank"><span class="icon-twitter"></span></a>
                </div>
            </div>
            <div class="col-lg-12">
                <h4 class="djm-foot">
                    Copyright 2022 © Todos os direitos reservados | Happy Peru tours | Feito por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" rel="no-follow" target="_blanc">DJM2</a>
                </h4>
            </div>
        </div>
    </div>
</section>