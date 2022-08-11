<div class="fondo-book">
    <h4 class="text-center">Solicitar informação</h4>
    <form style="color: #fff" method="POST" action="{{ route('book2') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email" class="input-form">Email:</label>
                <input type="email" class="form-control" name="email"
                    placeholder="Required*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="name" class="input-form">Name:</label>
                <input type="text" class="form-control" name="name"
                    placeholder="Required*" required>
            </div>
            <div class="form-group col-md-12">
                <label for="da" class="input-form">Date Arrive:</label>
                <input type="date" min="2022-07-18" class="form-control" name="da">
            </div>
            <div class="form-group col-md-12">
                <label for="tour">Tour:</label>
                <input type="text" class="form-control" name="tour">
            </div>
            <div class="form-group col-md-6">
                <label for="adultos" class="input-form">Adults:</label>
                <input type="number" class="form-control" name="adultos" placeholder="Adults">
            </div>
            <div class="form-group col-md-6">
                <label for="childs" class="input-form">Children:</label>
                <input type="number" class="form-control" name="childs"
                    placeholder="Children">
            </div>
        </div>

        <div class="form-group">
            <label for="mensaje" class="input-form">Message:</label>
            <textarea class="form-control" name="mensaje" rows="3" style="height: 40px" placeholder="Message:" required></textarea>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="boton-happy">Send</button>
        </div>

    </form>
</div>