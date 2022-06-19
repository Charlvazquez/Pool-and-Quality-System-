<?php

    $db4 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Laboratorio' ";
    $resultado = $conexion->prepare($db4);
    $resultado->execute();
    $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes as $respuestas)
    {
    $lab[] = $respuestas['respuestaRegistradas'];
    $resptotal1[] = $respuestas['TotalRespuestas'];
    }

    $db5 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Rayos X' ";
    $resultado = $conexion->prepare($db5);
    $resultado->execute();
    $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes as $respuestas)
    {
    $rayosX[] = $respuestas['respuestaRegistradas'];
    $resptotal2[] = $respuestas['TotalRespuestas'];
    }

    $db6 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Consulta' ";
    $resultado = $conexion->prepare($db6);
    $resultado->execute();
    $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes as $respuestas)
    {
    $consulta4[] = $respuestas['respuestaRegistradas'];
    $resptotal3[] = $respuestas['TotalRespuestas'];
    }

?>