$(document).ready(function(){
    $('#recoge').on('click', usuarios);
    function usuarios() {
        $.ajax({
            url: 'https://reqres.in/api/users', //
            type:'post',
            url: 'datos.php',
            dataType: 'JSON',
            success: function(res) {
                console.log(res);
                var listaUsuarios = $('#usuarios');

                /*$.each(res, function() {
                    listaUsuarios.append(
                        '<div>'
                        +   '<p>'  + res.seccion + ' ' + res.nombre + '<p>'
                        + 
                        '<div>'
                    );
                }) */
                    
                
                $.each(res.data, function(index, elemento) {
                    listaUsuarios.append(
                        '<div>'
                        +   '<p>'  + elemento.first_name + ' ' + elemento.last_name + '<p>'
                        +   '<img src=' + elemento.avatar + '></img>'
                        + 
                        '<div>'
                    );
                });
            }, 
            error : function() {
                console.log('No se pudo obtener la informacion');
            }
        });    
    }
    
});

