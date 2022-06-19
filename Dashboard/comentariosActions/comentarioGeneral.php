<?php
    require '../conexion/db.php';
    $consulta = "SELECT  Pa.Nombre, Pa.Fecha_ingreso, Pa.Fecha_egreso, En.Medio_constestacion,
    En.fecha_contestacion, En.Comentario FROM encuesta En INNER JOIN paciente Pa ON En.id_paciente = Pa.id_paciente";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>