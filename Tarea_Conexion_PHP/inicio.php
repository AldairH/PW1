<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tareaConexiones</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
</body>
</html>
<?php 
    include "conexcion.php";

    $consulta_sql= "SELECT * FROM candidatos LIMIT 5";
    $resultado= $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);

    echo "<table>";
        echo "<tr>";
            echo "<th>Id_Candidato</th>";
            echo "<th>Nombre</th>";
            echo "<th>Apellido Paterno</th>";
            echo "<th>Apellido Materno</th>";
            echo "<th>Fecha de Nacimiento</th>";
            echo "<th>Email</th>";
        echo "</tr>";

    if( $count>0 ){
        while( $row = mysqli_fetch_assoc($resultado) ){
            echo "<tr>";
                echo "<td>".$row['id_candidato'];
                echo "<td>".$row['nombre'];
                echo "<td>".$row['ap_paterno'];
                echo "<td>".$row['ap_materno'];
                echo "<td>".$row['fecha_nacimiento'];
                echo "<td>".$row['email'];
            echo "</tr>";
        }

    }

?>