<?php
require '../conexion/db.php';
$db = "SELECT Re.id_paciente,Pa.Nombre,Pa.Fecha_ingreso,Pa.Fecha_egreso, Ca.nombre_categoria, Re.Respuesta FROM respuestas Re 
INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente
        INNER JOIN categoria Ca ON Re.id_categoria = Ca.id_categoria WHERE Respuesta = 'Ingreso Anterior'  ";
$resultado = $conexion->prepare($db);
$resultado->execute();
$pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>                   