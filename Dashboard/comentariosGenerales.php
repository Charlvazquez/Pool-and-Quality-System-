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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Comentarios recibidos en Encuesta</li>
              <li class="breadcrumb-item active">Comentarios de Paciente</li>
            </ol>
            <hr>
            <div class="row">
            <div class="col-md-4 col-xs-6">
              <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#creaReporte"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Exportar Reporte</button>
            </div>
            	<div class="table-responsive col-xl-12">
                    <table  class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                            <th>Nombre del paciente</th>
                              <th>Fecha de ingreso</th>
                              <th>Fecha de egreso</th>
                              <th>Medio contestacion</th>
                              <th>Fecha de contestacion</th>
                              <th>Comentario</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php               
                              require 'comentariosActions/comentarioGeneral.php';
                              foreach ($pacientes as $paciente) {
                              ?>
                            <tr>
                              <td><?php echo $paciente['Nombre']?> </td>
                              <td><?php echo $paciente['Fecha_ingreso']?> </td>
                              <td><?php echo $paciente['Fecha_egreso']?> </td>
                              <td><?php echo $paciente['Medio_constestacion']?> </td>
                              <td><?php echo $paciente['fecha_contestacion']?> </td>
                              <td><?php echo $paciente['Comentario']?> </td>
                            </tr>
                            <?php
                              }
                            ?>
                          </tbody>
                    </table>
                </div>
              
              </div>
            <div class="d-flex justify-content-center ">
            <a href="index.php" class="btn btn-danger mb-3" style="font-family: 'Mukta', sans-serif;"> Regresar</a>
    </div>
    
    <div class="modal fade" id="creaReporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleccionar fecha de corte</h5>
                </div>
                <div class="modal-body">
                	<form action="../reportes/reporteComentariosPaciente.php" method="post" target="_blank">
                		<div class="row">
	                    	<div class="col-xl-3">
                        		<div class="form-group">
                    	        	<div class="input-group-prepend">
                                    <input type="date" name="comentarioPa" id="COMENTARIOPA" class="form-control" style="width: 20rem; font-family: 'Mukta', sans-serif;">
                                  </div>
            	                </div>
        	                </div>
                            <div class="col-xl-3">
                            </div>
                            <div class="col-xl-6">
                        		<div class="form-group">
                    	        	<button type="submit" class="btn btn-block btn-success">Crear reporte</button>
            	                </div>
        	                </div>
    	                </div>
                	</div>
                </form>
            </div>
        </div>
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
