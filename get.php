<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>ajax - get</title>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Ajax por el metodo get</h1>
    <script>
      $.ajax({
        url: 'dame-datoas.php',
        type: 'GET'
      }).done(function(res) {
        console.log('salio correctamente');

      }).fail(function(err) {
        console.log('salio con error');

      }).always(function() {
        console.log('sale');
      });
    </script>

  </body>
</html>
