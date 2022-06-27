<div class="banner-blog">
    <h4 class="text-center">Reservar</h4>
    <form style="color: #fff">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email" class="input-form">Email:</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Requerido*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="email" class="input-form">Nombre:</label>
                <input type="text" class="form-control" id="name" placeholder="Requerido*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="email" class="input-form">Fecha de llegada:</label>
                <input type="date" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleFormControlSelect1">Seleccionar Tour:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>City Tour Cusco</option>
                    <option>Happy City Tour</option>
                    <option>Caminata Lares 4 días</option>
                    <option>Huchuy Q'osqo a Machu Picchu</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="input-form">Adultos:</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="Adultos">
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="input-form">Niños:</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="Niños">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="input-form">Mensaje:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 40px"
                placeholder="Escriba acá su mensaje:"></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="boton-happy">Enviar</button>
        </div>

    </form>
</div>
