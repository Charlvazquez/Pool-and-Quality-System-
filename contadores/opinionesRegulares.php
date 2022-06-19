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
  <link rel="stylesheet" href="../Dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../Dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../Dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../Dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../Dashboard/plugins/summernote/summernote-bs4.min.css">
  <link rel="icon" href="../media/icon.ico">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php require '../Dashboard/components/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require '../Dashboard/components/sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Listado de opiniones Regulares de Pacientes</li>
                <li class="breadcrumb-item active">Listado Pacientes</li>
            </ol>
            <hr>
            <div class="row">
            	<div class="table-responsive col-xl-12">
                    <table  class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                            <th>Codigo</th>
                            <th>Nombre Completo</th>    
                            <th>Fecha de Ingreso</th>
                            <th>Fecha de Egreso</th>
                            <th>Pregunta</th>
                            <th>Categoria</th>
                            <th>Respuesta</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        require '../conexion/db.php';
                        $db = "SELECT Re.id_paciente,Pa.Nombre,Pa.Fecha_ingreso,Pa.Fecha_egreso,Pre.pregunta, Ca.nombre_categoria, Re.Respuesta FROM respuestas Re 
                        INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente
                        INNER JOIN preguntas Pre ON Re.id_pregunta = Pre.id_pregunta
                                INNER JOIN categoria Ca ON Re.id_categoria = Ca.id_categoria WHERE Respuesta = 'Regular'";
                        $resultado = $conexion->prepare($db);
                        $resultado->execute();
                        $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);

                      foreach ($pacientes as $paciente) {
                    ?>
                <tr>
                <td><?php echo $paciente['id_paciente']?> </td>
                  <td><?php echo $paciente['Nombre']?> </td>
                  <td><?php echo $paciente['Fecha_ingreso']?> </td>
                  <td><?php echo $paciente['Fecha_egreso']?> </td>
                  <td><?php echo $paciente['pregunta']?> </td>
                  <td><?php echo $paciente['nombre_categoria']?> </td>
                  <td><?php echo $paciente['Respuesta']?> </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center ">
            <a href="../Dashboard/index.php" class="btn btn-danger mb-3" style="font-family: 'Mukta', sans-serif;"> Regresar</a>
         </div>
        </div>
   <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </div>
  <!-- /.content-wrapper -->
  <?php require '../Dashboard/components/footer.php';?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../Dashboard/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../Dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../Dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../Dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../Dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src=".../Dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src=".../Dashboard/plugins/moment/moment.min.js"></script>
<script src=".../Dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../Dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../Dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../Dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../Dashboard/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Dashboard/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../Dashboard/dist/js/pages/dashboard.js"></script>
</body>
</html>