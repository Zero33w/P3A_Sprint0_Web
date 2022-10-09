<?php include("template/cabecera.php"); ?>

<?php
include("Servidor/solicitarDatos.php");
?>

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
        <?php foreach ($result as $med){ ?>
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


<?php include("template/pie.php"); ?>

