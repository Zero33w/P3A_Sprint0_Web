<?php
include("establecerConexionConServidor.php");//primero establecemos conexion con el servidor cosa de la que se encarga el archivo conexion
$sql= 'SELECT * FROM medida'; //a continuación recopilamos todos los datos existentes en la tabla medida y los guardamos en la variable result
$result= mysqli_query($conexion,$sql);
$medidas = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
