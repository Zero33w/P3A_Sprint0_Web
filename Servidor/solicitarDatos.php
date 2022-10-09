<?php
include("conexion.php");
$sql= 'SELECT * FROM medida';
$result= mysqli_query($conexion,$sql);
$medidas = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
