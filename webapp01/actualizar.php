<?php

    include 'conexion.php';

    $sql = "UPDATE usuarios SET nombre='Eliel Y. Feliciano Canals', email = 'efeliciano@arecibointer.edu' WHERE nombre like 'Eliel Feliciano'"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>