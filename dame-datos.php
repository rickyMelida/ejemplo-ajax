<?php

    $resultado = "";
    $nombre = addslashes(htmlspecialchars($_POST['nombre']));

    $array = array("Antonio", "Pedro", "Aberto");

    for ($i=0; $i < count($array); $i++) { 
        if($nombre == $array[$i]){
            $resultado = "<p>El nombre ha sido encontrado</p>";
        }
    }

    if($resultado == "") {
        echo "<p>El $nombre no ha sido encontrado<p>";
    }else {
        echo $resultado;
    }

?>