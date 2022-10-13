<?php include("template/cabecera.php"); ?> <!-- Esto es una buena practica ya que si en varias páginas de una misma web vas a tener el mismo encabezado y pie de este modo puedes mantenerlo entre ellas sin repetir todo el código -->

<?php
include("Servidor/obtenerTodasLasMedidas.php");//esta sección del código recoge los datos de la tabla de la base de datos medida y los guarda en un array llamado result
?>

<!-- cuerpo de la web donde se encuentra aquello que será visible -->
<h1 class="titulo1">Sensor de ozono</h1>
<div class="seccion">
    <h2>Medidas</h2>
</div>

<div>
    <table class="content-table">
        <thead>
        <tr>
            <th>ID medida</th>
            <th>ID sensor</th>
            <th>Valor medida</th>
            <th>Fecha y hora</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($result as $med){ ?><!-- aqui llenamos con los datos de result las filas de la tabla -->
        <tr>
            <td><?php echo$med['idMedicion'] ?></td>
            <td><?php echo$med['idSensor'] ?></td>
            <td><?php echo$med['valorMedicion'] ?></td>
            <td><?php echo$med['momentoMedicion'] ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include("Servidor/pruebaAutomaticaGet.php"); ?>
<?php include("template/pie.php"); ?>

