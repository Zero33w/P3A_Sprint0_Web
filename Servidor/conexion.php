<?php
$hostname='localhost';
$database='sprint0_bd';
$username='root';
$password='';

try {
    $conexion=mysqli_connect($hostname,$username,$password,$database);
}catch (Exception $ex) {
    echo $ex->getMessage();
}
?>