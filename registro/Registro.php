<?php
    require '../conexion/db.php';
    if($_POST)
    {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $fecha_ing = $_POST['fecha_ing'];
        $fecha_egreso = $_POST['fecha_egreso'];

 
        $sql_query = "INSERT INTO paciente (Nombre, Telefono, Email, Fecha_ingreso, Fecha_egreso) VALUES (?,?,?,?,?)";
        $sentencia_agregar = $conexion->prepare($sql_query);
        $sentencia_agregar->execute(array($nombre,$telefono,$email,$fecha_ing,$fecha_egreso));
        $sentencia_agregar = null;
        $conexion = null;
        echo'
        <script type="text/javascript"> 
            alert("Registro exitoso"); 
        </script> ';

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&family=Nunito+Sans:wght@300&family=Poppins:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro de pacientes</title>
</head>
<body style="background-color: #e6ebf1;">
    <section>    
    <!-- As a heading -->
    <nav class="navbar nav shadow" style="background-color: #d62c2c;">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1" style="font-family: 'Poppins', sans-serif;"><b>Sistema de Encuestas</b></span>
        </div>
    </nav>
    </section>
    <section class="container" style="background-color: #dce3eb; margin-top: 4rem;">
        <div class="row d-flex justify-content-center">
           <div class="col-sm-3">
               <hr>
               <h5 class="text-center" for="regdepto" style="font-family: 'Nunito Sans', sans-serif;"><b>Registro de paciente</b></h5>
                <form action="#" method="POST">
                    <div>
                            <label for="depto" class="form-label" style="font-family: 'Roboto', sans-serif;">Nombre Completo</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="oficio" class="form-label" style="font-family: 'Roboto', sans-serif;">Telefono</label>
                            <input type="number" name="telefono" id="curp" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="oficio" class="form-label" style="font-family: 'Roboto', sans-serif;">Correo electronico</label>
                            <input type="text" name="email" id="dire" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="fechanom" class="form-label" style="font-family: 'Roboto', sans-serif;">Fecha de Ingreso</label>
                            <input type="date" name="fecha_ing" id="fechain" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="fechanom" class="form-label" style="font-family: 'Roboto', sans-serif;">Fecha de Egreso</label>
                            <input type="date" name="fecha_egreso" id="fechain" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">


                          <div class="d-flex justify-content-center ">  
                            <button type="submit" class="btn btn-primary mt-3" style="font-family: 'Mukta', sans-serif;" >Enviar</button>
                          </div>    
                    </div>
                </form> 
            </div>
 
        </div>
        <hr>
         <div class="d-flex justify-content-center ">
            <a href="../Dashboard/index.php" class="btn btn-danger mb-3" style="font-family: 'Mukta', sans-serif;"> Regresar</a>
         </div>    
    </section>
</body>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-3">
        <!-- Facebook -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #3b5998;"
          href="#!"
          role="button"
          ><i class="fas fa-facebook-square"></i></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          >
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
      </a>
  
        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ac2bac;"
          href="#!"
          role="button"
          ><i class="fa fa-instagram" aria-hidden="true"></i></a>
  
        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <strong>Copyright © 2022 <a href="https://www.hospitalsantander.com.mx">Hospital de Especilidades Santander, S.A de C.v</a>.</strong>
   All rights reserved.
    </div>
    <!-- Copyright -->
  </footer>
</html>