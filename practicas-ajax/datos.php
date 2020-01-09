<?php

    $con = new mysqli('localhost', 'root', '', 'productos');

    $sql = "SELECT * from products";

    $query = mysqli_query($con, $sql);

    $r = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $datos = 
    [
        'Nombre' => 'Ricardo',
        "Apellido" => 'Melida',
        'Edad' => '27',
        'Cuidad' => 'Asuncion'
    ];


    $res = json_encode($r);

    echo $res;

?>