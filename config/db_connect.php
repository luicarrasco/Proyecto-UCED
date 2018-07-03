<?php
function connect() {
    $host = 'localhost';
    $port = 3306;
    $user = 'root';
    $pass = '';
    $dbname = 'uced';
  
    $conexion = mysqli_connect($host, $user, $pass, $dbname, $port);

    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_errno());
    } else {
        return $conexion;
    }
}
?>

