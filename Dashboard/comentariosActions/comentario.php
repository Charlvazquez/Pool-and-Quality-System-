<?php
    require '../conexion/db.php';
    $consulta = "SELECT  Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso, En.Medio_constestacion,Ca.nombre_categoria,
    En.fecha_contestacion, Co.comentario FROM comentarios_categoria Co 
    INNER JOIN categoria Ca ON Co.id_categoria =  Ca.id_categoria
    INNER JOIN encuesta En ON Co.id_encuesta = En.id_encuesta
    INNER JOIN paciente Pa ON En.id_paciente = Pa.id_paciente";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>