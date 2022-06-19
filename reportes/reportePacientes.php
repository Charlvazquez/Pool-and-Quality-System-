<?php 
 require '../conexion/db.php';
setlocale(LC_TIME, 'esm');
$id = $_GET['fechaE'];
$query_pendientes = "SELECT * FROM paciente WHERE Fecha_egreso = '$id'";
$stmt = $conexion->prepare($query_pendientes);
$result = $stmt->execute(array());
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
$filename ='Reporte_Pacientes_FechaEgreso.xls';
header('Content-type: application/ms-excel; charset=UTF-16LE');
header('Content-Disposition: attachment; filename='.$filename); ?>
<table border="1">
	<tr>
    <th scope="col" >Nombre Completo</th>
    <th scope="col" >Telefono</th>
    <th scope="col" >Email</th>
    <th scope="col" >Fecha de Ingreso</th>
    <th scope="col" >Fecha de Egreso</th>
    </tr>
    <?php foreach($rows as $row) { ?>
    	<tr>
        <td><?php print($row->Nombre)?></td>
        <td><?php print($row->Telefono)?></td>
        <td><?php print($row->Email)?></td>
        <td><?php print($row->Fecha_ingreso)?></td>
        <td><?php print($row->Fecha_egreso)?></td>
        </tr>
    <?php } ?>
</table>