<?php
$sql= "SELECT * FROM medida WHERE idMedicion = '0'"; //recopilamos aquellas lineas de la tabla medida con idMedida equivalente a 0, que es la id reservada para el test automático del metodo GET
$res= mysqli_query($conexion,$sql);

foreach ($res as $med) {
    if ($med['idMedicion'] == 0) {} else{echo "La idMedicion es erronea, el GET no se ha realizado correctamente "; echo "<script>console.log('La idMedicion es erronea, el GET no se ha realizado correctamente'); </script>";} ?><br/><?php
    if ($med['idSensor'] == 1234) {} else{echo "La idSensor es erronea, el GET no se ha realizado correctamente ";echo "<script>console.log('La idSensor es erronea, el GET no se ha realizado correctamente'); </script>";}?><br/><?php
    if ($med['valorMedicion'] == 1234){} else{echo "El valorMedicion es erroneo, el GET no se ha realizado correctamente ";echo "<script>console.log('El valorMedicion es erroneo, el GET no se ha realizado correctamente'); </script>";}?><br/><?php
    if ($med['momentoMedicion'] == "2022-01-05 12:12:12"){} else{echo "El momentoMedicion es erroneo, el GET no se ha realizado correctamente";echo "<script>console.log('El momentoMedicion es erroneo, el GET no se ha realizado correctamente'); </script>";}
}
?>
