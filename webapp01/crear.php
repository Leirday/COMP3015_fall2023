<?php

    include 'conexion.php';

    $sql = "INSERT INTO usuarios (nombre, email, clave) VALUES ('Eliel Feliciano', 'efeliciano@arecibointer.edu', 'sillygoofymood')"; 
    if($conexion->query($sql) === TRUE) { 
        echo "Nuevo récord fue creado con éxito"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error; 
    }

?>