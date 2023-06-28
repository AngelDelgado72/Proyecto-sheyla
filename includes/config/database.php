<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'Mk$021115', 'bienesraices_crud');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
}

?>