<?php 
    $host_db ="127.0.0.1:3306";
    $user_name ="root";
    $user_pass="Olakase4";
    $db_name ="elecciones";

    $conexion = new mysqli($host_db,$user_name,$user_pass,$db_name);

    if ($conexion->connect_error){
        echo "No jala";
    }else{
        echo "Tenemos permisos";
    }

?>