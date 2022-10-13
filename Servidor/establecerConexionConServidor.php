<?php
//este segmento de código permite que se establezca conexión con la base de datos y el servidor
$hostname='localhost';
$database='sprint0_bd';
$username='root';
$password='';
//aquí se comprueba si se establece conexión correctamente o no
try {
    $conexion=mysqli_connect($hostname,$username,$password,$database);
}catch (Exception $ex) {
    echo $ex->getMessage();
}
?>