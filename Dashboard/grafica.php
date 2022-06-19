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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php require '../Dashboard/components/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require '../Dashboard/components/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <ol class="breadcrumb">
            <li class="breadcrumb-item">Graficas de resultados</li>
             <li class="breadcrumb-item active">Resultados de respuesta de pacientes</li>
       </ol>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                  <h3 class="card-title">Principales motivos de Visita:</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <?php 
                      require '../graficas/actionesGrafica.php';
                      require '../graficas/infoMedio.php';
                      require '../graficas/motivosVisita.php';       
                ?>
              </div> 
             <div class="card-body">
                <canvas id="motivos" style="min-height: 350px; height: 350px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body donutChart -->
            </div>
            <!-- /.card -->
          </div>
         
          <div class="col-md-6">
             <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Resultados de encuesta</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="myChart" style="min-height: 350px; height: 350px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

          <div class="col-md-12 justify-content-center ">
            <!-- LINE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                  <h3 class="card-title">Principales medios por los que conocio el Hospital de Especialidades Santander:</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
              <div class="card-body">
                <canvas id="medio" style="min-height: 350px; height: 350px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body LineChart-->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require '../Dashboard/components/footer.php';
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../Dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../Dashboard/plugins/chart.js/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- AdminLTE App -->
<script src="../Dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Dashboard/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode([$buenas,$excelentes,$regularss]) ?>;
  const labels2 = <?php echo json_encode([$lab,$rayosX,$consulta4]) ?>;
  const labels3 = <?php echo json_encode([$empresa,$aseguradora,$visita,$ingresoA,$recomendacion,$publicidad,$otro]) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Listado de Respuestas en Encuesta',
      data: <?php echo json_encode([$cantidad, $cantidad1,$cantidad2]) ?>,
      backgroundColor: [
        '#2596be',
        '#45e41a',
        '#B9060a'
        
      ]
    }]
  };

  const data2 = {
    labels: labels2,
    datasets: [{
      label: 'Listado de Respuestas en Encuesta',
      data: <?php echo json_encode([$resptotal1,$resptotal2,$resptotal3]) ?>,
      backgroundColor: [
        '#Ff2100',
        '#f56954',
        '#00a65a',
        '#f39c12',
        '#00c0ef',
        '#3c8dbc',
        '#d2d6de',
        '#D8ff00',
        '#47ff00',
        '#00ffea',
        '#6100ff',
        '#A500ff'

      ]
    }]
  };

  const data3 = {
    labels: labels3,
    datasets: [{
      label: 'Medios por los que los pacientes conocieron el Hospital de Especialidades Santander',
      data: <?php echo json_encode([$medio,$medio2,$medio3,$medio4,$medio5,$medio6,$medio7]) ?>,
      backgroundColor: [
        '#Ff2100',
        '#f56954',
        '#00a65a',
        '#f39c12',
        '#00c0ef',
        '#3c8dbc',
        '#d2d6de',
        '#D8ff00',
        '#47ff00',
        '#00ffea',
        '#6100ff',
        '#A500ff'

      ]
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  const config2 = {
    type: 'doughnut',
    data: data2,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  const config3 = {
    type: 'bar',
    data: data3,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart2 = new Chart(
    document.getElementById('medio'),
    config3
  );

  var myChart3 = new Chart(
    document.getElementById('motivos'),
    config2
  );

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>
</html>
