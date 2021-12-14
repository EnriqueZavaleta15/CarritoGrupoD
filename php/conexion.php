

<?php
    $servidor="localhost";   // El Servidor
    $nombreBd = "carrito"; // Nombre de Base de Datos
    $usuario = "root"; // Nombre del Usuario
    $pass = "";    // Contraseña
                      
    $conexion=new mysqli($servidor,$usuario,$pass,$nombreBd);
    if ($conexion->connect_error) {
        die ("No se pudo conectar");
    }
?>