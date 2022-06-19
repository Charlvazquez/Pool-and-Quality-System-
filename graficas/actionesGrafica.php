<?php 
    require '../conexion/db.php';
    $db = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE Respuesta = 'Buena' ";
    $resultados = $conexion->prepare($db);
    $resultados->execute();
    $pacientes1=$resultados->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes1 as $respuestas)
    {
    $buenas[] = $respuestas['respuestaRegistradas'];
    $cantidad[] = $respuestas['TotalRespuestas'];
    }

    $db1 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE Respuesta = 'Excelente' ";
    $resultados = $conexion->prepare($db1);
    $resultados->execute();
    $pacientes1=$resultados->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes1 as $respuestas)
    {
    $excelentes[] = $respuestas['respuestaRegistradas'];
    $cantidad1[] = $respuestas['TotalRespuestas'];
    }

    $db3 = "SELECT Respuesta as respuestaRegistradas,
    Respuesta,COUNT(*) AS TotalRespuestas  from respuestas
    WHERE Respuesta = 'Regular' ";
    $resultados = $conexion->prepare($db3);
    $resultados->execute();
    $pacientes1=$resultados->fetchAll(PDO::FETCH_ASSOC);

    foreach($pacientes1 as $respuestas)
    {
    $regularss[] = $respuestas['respuestaRegistradas'];
    $cantidad2[] = $respuestas['TotalRespuestas'];
    }

  
?>

                