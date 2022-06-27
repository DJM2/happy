<section class="parallax">
    <h3>Únete al boletín</h3>
    <p>Para inspiración e información sobre viajes</p>
    <div class="container">
        <form style="color: #fff" method="POST" action="{{ route('newsletter') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="text" class="form-control" name="name" placeholder="Nombre:">
                </div>
                <div class="form-group col-lg-2 col-sm-12 text-center">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="foot-ingles">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-center">Consultas</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li><a href="../../nosotros">Nosotros</a></li>
                    <li><a href="../../testimonios">Testimonios</a></li>
                    <li><a href="../../terminos">Terminos & Condiciones</a></li>
                    <li><a href="../../preguntas-frecuentes-peru">Preguntas Frecuentes</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Contacto</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li>info@happyperutours.com</li>
                    <li>+51 947 057 622</li>
                    <li>Av. Ccorimachachuay D-2 santiago </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Ponerse en Contacto</h3>
                <div class="separador-foot"></div>
                <div class="social-foot">
                    <a target="_blanc" href="https://www.facebook.com/happyperutours" rel="nofollow" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a target="_blanc" href="https://www.instagram.com/happyperutours/" rel="nofollow" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    <a target="_blanc" href="https://www.tripadvisor.com/Profile/happyperutours" rel="nofollow" class="p-2 pl-0"><span class="icon-tripadvisor"></span></a>
                    <a target="_blanc" href="https://www.pinterest.com/HappyPeruTours" rel="nofollow" class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                    <a target="_blank" href="https://twitter.com/HappyPeruTour1" rel="nofollow" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                </div>
            </div>
            <div class="col-lg-12">
                <h4 class="djm-foot">
                    Copyright 2022 © Todos los derechos reservados | Happy Peru tours | Hecho por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" rel="no-follow" target="_blanc">DJM2</a>
                </h4>
            </div>
        </div>
    </div>
</section>