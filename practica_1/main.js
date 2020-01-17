let valor = $('#ultimo').html();
let nombres = document.getElementsByClassName('nombre');
let apellidos = document.getElementsByClassName('apellido');;
let ciudad = document.getElementsByClassName('ciudad');;

function prev () {
    $.ajax({
        url: 'datos.php',
        type: 'post',
        data: { valor },
        dataType: 'JSON',
        success: res =>{
            for(let info in res.datos1) {
                console.log(`${info} : ${res.datos1[info]}` );
                
            }
        },
        error: err => {
            console.log('No se pudo obtener los valores');
        }
    });
}

function next () {
    $.ajax({
        url: 'datos.php',
        type: 'POST',
        data: { valor } ,
        dataType: 'JSON',
        success: res => {
            console.log(res);
        },

        error: err => {
            console.log('No salio por algo');
        }
    });

}

function recorreClases() {
    for(let i=0; i < nombres.length;i++) {
        nombres[i].innerHTML = 'red_'+i;
    }
}

$('#next').on('click', recorreClases);
$('#prev').on('click', prev);
