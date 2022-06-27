<div class="fondo-book">
    <h4 class="text-center">Reservar</h4>
    <form style="color: #fff" method="POST" action="{{ route('book1') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email" class="input-form">Email:</label>
                <input type="email" class="form-control" name="email" id="name" placeholder="Requerido*" autofocus required>
            </div>
            <div class="form-group col-md-12">
                <label for="name" class="input-form">Nombre:</label>
                <input type="text" class="form-control" name="name" placeholder="Requerido*" autofocus required>
            </div>
            <div class="form-group col-md-12">
                <label for="da" class="input-form">Fecha de llegada:</label>
                <input type="date" class="form-control" name="da">
            </div>
            <div class="form-group col-md-12">
                <label for="tour">Seleccionar Tour:</label>
                <select class="form-control" name="tour">
                    <option value="City Tour Cusco">City Tour Cusco</option>
                    <option value="Happy City Tour">Happy City Tour</option>
                    <option value="Lares trek 4 days">Lares trek 4 días</option>
                    <option value="Huchuy Q'osqo to Machu Picchu">Huchuy Q'osqo a Machu Picchu</option>
                    <option value="Ausangate 7 lakes tour">Ausangate 7 lagunas</option>
                    <option value="Choquequirao 4 days">Choquequirao 4 días</option>
                    <option value="Happy Experience tour">Happy Experience tour</option>
                    <option value="Hiram Bingham Luxury train">Hiram Bingham tren de lujo</option>
                    <option value="Humantay Lake">Lago Humantay</option>
                    <option value="Inca Jungle 4 days">Inca Jungle 4 días</option>
                    <option value="Inca Rail first class train">Inca Rail first class train</option>
                    <option value="Inca Rail Voyager train">Inca Rail Voyager train</option>
                    <option value="Inca Rail 360° train tour">Inca Rail 360° train tour</option>
                    <option value="Inca Trail 2 days">Inca Trail 2 days</option>
                    <option value="Inca Trail 4 days">Inca Trail 4 days</option>
                    <option value="Maras, Moray & Salineras tour">Maras, Moray & Salineras tour</option>
                    <option value="PeruRail train Expeditions">PeruRail train Expeditions</option>
                    <option value="PeruRail Sacred Valley in train">PeruRail Sacred Valley in train</option>
                    <option value="PeruRail train Vistadome">PeruRail train Vistadome</option>
                    <option value="Q'eswachaca tour">Q'eswachaca tour</option>
                    <option value="Sacred Valley Full day">Sacred Valley Full day</option>
                    <option value="Sacred Valley 2 days">Sacred Valley 2 days</option>
                    <option value="Sacred Valley 3 days">Sacred Valley 3 days</option>
                    <option value="Salkantay trek 4 days">Salkantay trek 4 days</option>
                    <option value="Salkantay trek 5 days">Salkantay trek 5 days</option>
                    <option value="Waqrapukara Full Day">Waqrapukara Full Day</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="adultos" class="input-form">Adultos:</label>
                <input type="number" class="form-control" name="adultos" placeholder="Adultos">
            </div>
            <div class="form-group col-md-6">
                <label for="childs" class="input-form">Niños:</label>
                <input type="number" class="form-control" name="childs" placeholder="Niños">
            </div>
        </div>

        <div class="form-group">
            <label for="mensaje" class="input-form">Mensaje:</label>
            <textarea class="form-control" name="mensaje" rows="3" style="height: 40px"
                placeholder="Escriba acá su mensaje:" autofocus required></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="boton-happy">Enviar</button>
        </div>

    </form>
</div>
