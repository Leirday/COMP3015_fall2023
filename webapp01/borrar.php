<?php
    include 'conexion.php';

    $sql = "DELETE FROM usuarios WHERE nombre like 'Eliel Y. Feliciano Canals'"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro eliminado con éxito"; 
    } else { 
        echo "Error al eliminar el registro: ";
        echo $conexion->error; 
    }

?>