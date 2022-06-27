<section class="parallax">
    <h3>Join the newsletter</h3>
    <p>For travel inspiration and insights</p>
    <div class="container">
        <form style="color: #fff" method="POST" action="{{ route('newsletter') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group col-lg-5 col-sm-12">
                    <input type="text" class="form-control" name="name" placeholder="Name:">
                </div>
                <div class="form-group col-lg-2 col-sm-12 text-center">
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="foot-ingles">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-center">Query</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li><a href="../about-us">About Us</a></li>
                    <li><a href="">Testimonials</a></li>
                    <li><a href="">Terms and Conditions</a></li>
                    <li><a href="">Faqs</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Contact</h3>
                <div class="separador-foot"></div>
                <ul>
                    <li>info@happyperutours.com</li>
                    <li>+51 947 057 622</li>
                    <li>Av. Ccorimachachuay D-2 santiago </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center">Get in Touch</h3>
                <div class="separador-foot"></div>
                <div class="social-foot">
                    <a target="_blanc" href="https://www.facebook.com/happyperutours" rel="nofollow" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a target="_blanc" href="https://www.instagram.com/happyperutours/" rel="nofollow" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    <a target="_blanc" href="https://www.tripadvisor.com/Profile/happyperutours" rel="nofollow" class="p-2 pl-0"><span class="icon-tripadvisor"></span></a>
                    <a target="_blanc" href="https://www.pinterest.com/HappyPeruTours" rel="nofollow" class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                    <a target="_blanc" href="https://www.pinterest.com/HappyPeruTours" rel="nofollow" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                </div>
            </div>
            <div class="col-lg-12">
                <h4 class="djm-foot">
                    Copyright 2022 © Todos los derechos reservados | Happy Peru tours | Made by <a href="https://www.facebook.com/DjmWebMaster" class="djm2" rel="no-follow" target="_blanc">DJM2</a>
                </h4>
            </div>
        </div>
    </div>
</section>