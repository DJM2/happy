<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Book desde el inicio de la pagina web</title>
</head>

<body>
    <section>
        <div style="margin-top: 50px;"></div>
        <center>
            <img src="https://happyperutours.com/img/happy-peru-tours-logo.png" width="200px">
        </center>
        <div
            style="background: rgb(81, 81, 81); width: 50%; height: 1.5px; margin-top:12px;margin-bottom:8px; margin:auto">
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <p style="text-align: justify;">
                    Hola Happy Peru tours: <br>
                    Se acaba de recibir un nuevo mensaje desde la pagina de inicio de Hapy Peru Tours. Por favor,
                    responder en la mayor brevedad posibe.
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Detalles del formulario:</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: left">
                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Llegada:</th>
                            <td>{{ $da }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Salida:</th>
                            <td>{{ $do }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Adultos:</th>
                            <td>{{ $adults }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Niños:</th>
                            <td>{{ $childs }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Mensaje:</th>
                            <td>{{ $mensaje }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>Copyright © 2022 Happy Perú Tours Tours, Todos los derechos reservados | Made by <a
                        href="https://www.facebook.com/DjmWebMaster" rel="no-follow" target="_blank">DJM2</a></p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </section>

</body>

</html>
