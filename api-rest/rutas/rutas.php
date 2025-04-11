<?php

    $arrayRutas = explode("/", $_SERVER["REQUEST_URI"]); //Detecta u obtiene la URL de la API REST
    
    echo "<pre>";
    print_r($arrayRutas); //Muestra la URL de la API REST
    echo "</pre>";

    $json = array(

        "Detalle"=>" no encontrado"

    );

    echo json_encode($json, true);

    if(count(array_filter($arrayRutas)))

?>