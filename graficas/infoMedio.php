<?php
    require '../conexion/db.php';
    $db = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Empresa' ";
    $resultado = $conexion->prepare($db);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $empresa[] = $respuestas['respuestaRegistradas'];
    $medio[] = $respuestas['TotalRespuestas'];
    }

    $db2 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Aseguradora' ";
    $resultado = $conexion->prepare($db2);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $aseguradora[] = $respuestas['respuestaRegistradas'];
    $medio2[] = $respuestas['TotalRespuestas'];
    }

    $db3 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Visita' ";
    $resultado = $conexion->prepare($db3);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $visita[] = $respuestas['respuestaRegistradas'];
    $medio3[] = $respuestas['TotalRespuestas'];
    }

    $db4 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Ingreso Anterior' ";
    $resultado = $conexion->prepare($db4);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $ingresoA[] = $respuestas['respuestaRegistradas'];
    $medio4[] = $respuestas['TotalRespuestas'];
    }

    $db5 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Recomendacion' ";
    $resultado = $conexion->prepare($db5);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $recomendacion[] = $respuestas['respuestaRegistradas'];
    $medio5[] = $respuestas['TotalRespuestas'];
    }

    $db6 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Publicidad' ";
    $resultado = $conexion->prepare($db6);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $publicidad[] = $respuestas['respuestaRegistradas'];
    $medio6[] = $respuestas['TotalRespuestas'];
    }

    $db7 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE  Respuesta = 'Otro' ";
    $resultado = $conexion->prepare($db7);
    $resultado->execute();
    $pacientes2=$resultado->fetchAll(PDO::FETCH_ASSOC);
    foreach($pacientes2 as $respuestas)
    {
    $otro[] = $respuestas['respuestaRegistradas'];
    $medio7[] = $respuestas['TotalRespuestas'];
    }

?>