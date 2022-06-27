<div class="fondo-book">
    <h4 class="text-center">Agende agora!</h4>
    <form style="color: #fff" method="POST" action="{{ route('book2') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email" class="input-form">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Requeridos*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="name" class="input-form">Nome:</label>
                <input type="text" class="form-control" name="name" placeholder="Requeridos*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="da" class="input-form">Data de chegada:</label>
                <input type="date" class="form-control" name="da">
            </div>
            <div class="form-group col-md-12">
                <label for="tour">Selecionar passeio:</label>
                {{-- <input type="text" readonly class="form-control" name="tour" value="{{$titulo}}"> --}}
                <select class="form-control" name="tour">
                    <option value="City Tour Cusco" selected>Happy City Tour</option>
                    <option value="Happy City Tour">Happy City Tour</option>
                    <option value="Lares trek 4 days">Lares trek 4 days</option>
                    <option value="Huchuy Q'osqo to Machu Picchu">Huchuy Q'osqo to Machu Picchu</option>
                    <option value="Ausangate 7 lakes tour">Ausangate 7 lakes tour</option>
                    <option value="Choquequirao 4 days">Choquequirao 4 days</option>
                    <option value="Happy Experience tour">Happy Experience tour</option>
                    <option value="Hiram Bingham Luxury train">Hiram Bingham Luxury train</option>
                    <option value="Humantay Lake">Humantay Lake</option>
                    <option value="Inca Jungle 4 days">Inca Jungle 4 days</option>
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
                <label for="adultos" class="input-form">Adult@ts:</label>
                <input type="number" class="form-control" name="adultos"
                    placeholder="Número">
            </div>
            <div class="form-group col-md-6">
                <label for="childs" class="input-form">Crianças:</label>
                <input type="number" class="form-control" name="childs"
                    placeholder="Número">
            </div>
        </div>

        <div class="form-group">
            <label for="mensaje" class="input-form">Mensagem:</label>
            <textarea class="form-control" name="mensaje" rows="3" style="height: 40px"
                placeholder="Escreva sua mensagem aqui..." required></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="boton-happy">Mandar</button>
        </div>

    </form>
</div>