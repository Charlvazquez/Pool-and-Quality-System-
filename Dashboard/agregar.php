<?php
//Iniciar sesion del usuario primero
session_start();
	
  if(!isset($_SESSION['id'])){
    header("Location: ../registro/login.php");
  }
  $nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de encuestas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="icon" href="../media/icon.ico">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <?php require 'components/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require 'components/sidebar.php';
  ?>

<?php
    require '../conexion/db.php';
    if($_POST)
    {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $nombre = $_POST['nombre'];
        $tipo_usuario = $_POST['tipo_usuario'];
 
        $sql_query = "INSERT INTO usuarios (usuario, password, nombre, tipo_usuario) VALUES (?,?,?,?)";
        $sentencia_agregar = $conexion->prepare($sql_query);
        $sentencia_agregar->execute(array($usuario,$contraseña,$nombre,$tipo_usuario));
        $sentencia_agregar = null;
        $conexion = null;
        echo'
        <script type="text/javascript"> 
            alert("Registro exitoso"); 
        </script> ';

    }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
      <li class="breadcrumb-item">Agregar usuarios</li>
      <li class="breadcrumb-item active">Registre su usuario</li>
      </ol>
      <hr>
      <section class="container" style="background-color: #dce3eb; margin-top: 2rem;">
        <div class="row d-flex justify-content-center">
           <div class="col-sm-3">
               <form action="" class="row">
                   
               </form>
               <hr>
               <h5 class="text-center" for="regdepto" style="font-family: 'Nunito Sans', sans-serif;"><b>Registro de Usuario</b></h5>
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div>
                            <label for="depto" class="form-label" style="font-family: 'Roboto', sans-serif;">Usuario</label>
                            <input type="text" name="usuario" id="nombre" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="oficio" class="form-label" style="font-family: 'Roboto', sans-serif;">contraseña</label>
                            <input type="password" name="contraseña" id="curp" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="oficio" class="form-label" style="font-family: 'Roboto', sans-serif;">Nombre Completo</label>
                            <input type="text" name="nombre" id="dire" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">

                            <label for="fechanom" class="form-label" style="font-family: 'Roboto', sans-serif;">Seleccione el tipo de usuario:</label>
                            <input type="number" name="nombre" id="dire" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">
                            <!---<select class="form-select" name="tipo_usuario" aria-label="Default select example">
                                <option selected>Selecione una respuesta:</option>
                                <option value="1">Excelente</option>
                                <option value="2">Bueno</option>
                                <option value="3">Regular</option>
                                <option value="4">Malo</option>
                              </select>--->


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
  </div>
  <!-- /.content-wrapper -->
  <?php require 'components/footer.php';
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
