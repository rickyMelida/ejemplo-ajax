<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <title>Peticion ajax</title>

    <script>
        $(function() {
            $("#btn-enviar").click(function() {
                var url = "dame-datos.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        $("#resultado").html(data);
                    }
                });

                return false;
            });
        });
    </script>
</head>
<body>
    <form method="post" id="formulario">
        Introduce un nombre <br>
        <input type="text" name="nombre">
        <input type="button" value="Enviar" id="btn-enviar">
    </form>

    <div id="resultado">
    
    </div>
</body>
</html>