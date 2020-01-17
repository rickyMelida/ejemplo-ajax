<?php

    if(isset($_POST['valor'])) {
        $valor = $_POST['valor'];
    }else {
        $valor = 'no vino';
    }

    $err = [
        'error' => $valor
    ];



    if($valor == 3) {
        require_once './datos_1.php';
        $res = json_encode($datos1);
    }else {
        if($valor == 6) {
            require_once './datos_2.php';
            $res = json_encode($datos1);
        }else {
            $res = json_encode($err);
        }
    }    

    echo $res;
?>