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
  <nav class="main-header navbar navbar-expand navbar-red navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <div class="input-group-append">
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../media/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
      <?php 
        echo $_SESSION['username'] 
        ?>
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user"></i>
              <p>
                Pacientes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pacientesAgregados.php" class="nav-link">
                <i class="fas fa-users"></i>
                  <p>Pacientes Registrados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="envioCorreo.php" class="nav-link">
                <i class="fas fa-envelope"></i>
                  <p>Enviar encuesta a pacientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-folder"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reportes.php" class="nav-link">
                <i class="fas fa-download"></i>
                  <p>Descargar Reporte</p>
                </a>
              </li>
              <!---
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>--->
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-door-open"></i>
              <p>
                Cerrar Sesion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../registro/cerrar_sesion.php" class="nav-link">
                <i class="fas fa-door-open"></i>
                  <p>Salir</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Listado de opiniones Excelentes de Pacientes</li>
                <li class="breadcrumb-item active">Listado Pacientes<</li>
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
                           INNER JOIN categoria Ca ON Re.id_categoria = Ca.id_categoria WHERE Respuesta = 'Consulta'  ";
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
  <footer class="bg-dark text-center text-white">
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      <strong>Copyright © 2022 <a href="https://www.hospitalsantander.com.mx">Hospital de Especilidades Santander, S.A de C.v</a>.</strong>
   All rights reserved.
    </div>
    <!-- Copyright -->
  </footer>

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