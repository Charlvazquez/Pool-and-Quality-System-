<?php 
 require '../conexion/db.php';
setlocale(LC_TIME, 'esm');
$query = 'SELECT  Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso, En.Medio_constestacion,Ca.nombre_categoria,
En.fecha_contestacion, Co.comentario FROM comentarios_categoria Co 
INNER JOIN categoria Ca ON Co.id_categoria =  Ca.id_categoria
INNER JOIN encuesta En ON Co.id_encuesta = En.id_encuesta
INNER JOIN paciente Pa ON En.id_paciente = Pa.id_paciente WHERE nombre_categoria = "'.$_POST['categoriaPa'].'" ';
$stmt = $conexion->prepare($query);
$result = $stmt->execute(array());
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
$filename ='Reporte_ComentariosCategoria.xls';
header('Content-type: application/ms-excel; charset=UTF-16LE');
header('Content-Disposition: attachment; filename='.$filename); ?>
<table border="1">
	<tr>
    <th>Nombre del paciente</th>
    <th>Fecha de ingreso</th>
    <th>Fecha de egreso</th>
    <th>Medio contestacion</th>
    <th>Categoria</th>
    <th>Fecha de contestacion</th>
    <th>Comentario</th>
    </tr>
    <?php foreach($rows as $row) { ?>
    	<tr>
        <td><?php print($row->Nombre)?></td>
        <td><?php print($row->Fecha_ingreso)?></td>
        <td><?php print($row->Fecha_egreso)?></td>
        <td><?php print($row->Medio_constestacion)?></td>
        <td><?php print($row->nombre_categoria)?></td>
        <td><?php print($row->fecha_contestacion)?></td>
        <td><?php print($row->comentario)?></td>
        </tr>
    <?php } ?>
</table>