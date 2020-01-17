<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 1 - Ajax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <div class="container">
        <h1>Primera practica para ajax</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td class="nombre">Mark</td>
                <td class="apellido">Otto</td>
                <td class="ciudad">@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td class="nombre">Jacob</td>
                <td class="apellido">Thornton</td>
                <td class="ciudad">@fat</td>
                </tr>
                <tr>
                <th scope="row" id="ultimo">3</th>
                <td class="nombre">Larry</td>
                <td class="apellido">the Bird</td>
                <td class="ciudad">@twitter</td>
                </tr>
            </tbody>
        </table>
        <div class="m">
            <button id="prev">Prev</button>
            <button id="next">Next</button>
        </div>
    </div>

    
    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>