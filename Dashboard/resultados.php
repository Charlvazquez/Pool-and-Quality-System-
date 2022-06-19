<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: ../registro/login.php");
	}
	
	$nombre = $_SESSION['nombre'];
  $tipo_usuario = $_SESSION['tipo_usuario'];
		
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


  <!-- Navbar-->
  <?php require 'components/navbar.php';?>

  <!-- Main Sidebar Container -->
  <?php require 'components/sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!---seccion 1---->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Medio con el conocio el Hospital Santander</h3>
          </div><!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <a href="../contadores_media/opinionesEmpresa.php" class="info-box-icon bg-info elevation-1"><i class="fas fa-industry"></i></a>
              <div class="info-box-content">
                <span class="info-box-text">Por Empresa</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Empresa'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
               
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <a href="../contadores_media/opinionesAseguradora.php" class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Aseguradora</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Aseguradora'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <a href="../contadores_media/opinionesVisita.php" class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Visita</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Visita'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <a href="../contadores_media/opinionesIngresoAnterior.php" class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Ingreso Anterior</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Ingreso Anterior'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <a href="../contadores_media/opinionesRecomendacion.php" class="info-box-icon bg-info elevation-1"><i class="fas fa-comment"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Recomendacion</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Recomendacion'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="../contadores_media/opinionesPubliciadad.php" class="info-box-icon bg-danger elevation-1"><i class="fas fa-bullhorn"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Publicidad</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Publicidad'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="../contadores_media/opinionesOtro.php" class="info-box-icon bg-primary elevation-1"><i class="fas fa-user"></i></a>

              <div class="info-box-content">
                <span class="info-box-text">Otro</span>
                <span class="info-box-number">
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Otro'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      <!---seccion 2--->
      <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Conteo de Opiniones recibidas en encuesta</h3>
          </div><!-- /.col -->
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <h3 id="consultas">
                    <!---filtro de resultados por respuestas--->
                  <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Excelente'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                  </h3>
                <p>Opiniones Excelentes</p>
              </div>
              <div class="icon">
              <i class="ionicons ion-android-happy"></i>
              </div>
              <a href="../contadores/opinionesExcelentes.php" class="small-box-footer">Consultar Respuestas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Buena'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>

                <p>Opiniones Buenas</p>
              </div>
              <div class="icon">
              <i class="ionicons ion-android-happy"></i>
              </div>
              <a href="../contadores/opinionesBuenas.php" class="small-box-footer">Consultar Respuestas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Regular'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>
                <p>Respuestas Regulares</p>
                
              </div>
              <div class="icon">
              <i class="ionicons ion-android-sad"></i>
              </div>
              <a href="../contadores/opinionesRegulares.php" class="small-box-footer">Consultar Respuestas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Malo'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>
                <p>Respuestas Malas</p>
                
              </div>
              <div class="icon">
              <!---<i class="ionicons ion-sad"></i>--->
              <i class="ionicons ion-android-sad"></i>
              </div>
              <a href="../contadores/opinionesMalas.php" class="small-box-footer">Consultar Respuestas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Muy Malo'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>
                <p>Respuestas Muy Malas</p>
                
              </div>
              <div class="icon">
              <i class="ionicons ion-sad"></i>
              </div>
              <a href="../contadores/opinionesMMalas.php" class="small-box-footer">Consultar Respuestas <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
      </div>
        <!-- fff/.row -->
      </div>
      <!--seccion 3-->
      <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Motivos de visita en Consulta Externa</h4>
          </div><!-- /.col -->
      </div>
      <div class="row">
          <div class="col-lg-4 col-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <h3 id="consultas">
                    <!---filtro de resultados por respuestas--->
                  <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Laboratorio'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                  </h3>
                <p>Laboratorio</p>
              </div>
              <div class="icon">
              <i class="ionicons ion-medkit"></i>
              </div>
              <a href="../contadores/opinionesLaboratorio.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Rayos X'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>

                <p>Rayos X</p>
              </div>
              <div class="icon">
              <i class="ionicons ion-medkit"></i>
              </div>
              <a href="../contadores/opinionesRayosX.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                <?php 
                  require '../conexion/db.php';
                  $db = "SELECT COUNT(Respuesta) AS CUENTA FROM respuestas WHERE Respuesta = 'Consulta'";
                  $resultado = $conexion->prepare($db);
                  $resultado->execute();
                  $pacientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($pacientes as $f) { ?>
                    <?php echo $f['CUENTA'] ?>
                  <?php } ?>
                </h3>
                <p>Consulta</p>
                
              </div>
              <div class="icon">
              <i class="ionicons ion-heart"></i>
              </div>
              <a href="../contadores/opinionesConsulta.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
          <!-- ./col -->
          <!-- .ffddgdg -->
        </div>
        <!-- /.row -->
      </div>
        </div>
        <!-- /.row -->
      </div>   
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php require 'components/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#notifications").on("click", function() {
        $.ajax({
          url: "../reportes/readNotifications.php",
          success: function(res) {
            console.log(res);
          }
        });
      });
    });
</script>
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
