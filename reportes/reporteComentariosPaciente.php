<?php 
 require '../conexion/db.php';
setlocale(LC_TIME, 'esm');
$query = 'SELECT  Pa.Nombre, Pa.Fecha_ingreso, Pa.Fecha_egreso, En.Medio_constestacion,
En.fecha_contestacion, En.Comentario FROM encuesta En INNER JOIN paciente Pa ON En.id_paciente = Pa.id_paciente WHERE fecha_contestacion = "'.$_POST['comentarioPa'].'" ';
$stmt = $conexion->prepare($query);
$result = $stmt->execute(array());
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
$filename ='Reporte_ComentariosPacientes.xls';
header('Content-type: application/ms-excel; charset=UTF-16LE');
header('Content-Disposition: attachment; filename='.$filename); ?>
<table border="1">
	<tr>
    <th>Nombre del paciente</th>
    <th>Fecha de ingreso</th>
    <th>Fecha de egreso</th>
    <th>Medio contestacion</th>
    <th>Fecha de contestacion</th>
    <th>Comentario</th>
    </tr>
    <?php foreach($rows as $row) { ?>
    	<tr>
        <td><?php print($row->Nombre)?></td>
        <td><?php print($row->Fecha_ingreso)?></td>
        <td><?php print($row->Fecha_egreso)?></td>
        <td><?php print($row->Medio_constestacion)?></td>
        <td><?php print($row->fecha_contestacion)?></td>
        <td><?php print($row->Comentario)?></td>
        </tr>
    <?php } ?>
</table>