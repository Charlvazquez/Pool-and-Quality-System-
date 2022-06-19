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
            <li class="breadcrumb-item">Reporte de Pacientes</li>
             <li class="breadcrumb-item active">Buscar Paciente por Fecha de Egreso</li>
       </ol>
            <div class="row justify-content-center">
                <form method="POST" class="col-sm-5 mt-5 ">    
                    <h4 class="justify-content-center" for="FECHAE" style="font-family: 'Roboto', sans-serif;">Ingrese Fecha de egreso</h4>
                    <input type="date" class="form-control" name="fechaE" id="FECHAE" style="font-family: 'Mukta', sans-serif;" placeholder="FECHAE">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success mt-2" type="submit" style="font-family: 'Poppins', sans-serif;">Buscar</button>
                    </div>
                </form>
                <?php
                      require '../conexion/db.php';
                      if($_POST)
                      {
                          $id = $_POST['fechaE'];
                          $sql_repartidor = "SELECT * FROM paciente WHERE Fecha_egreso = :fechaE";
                          $stmt = $conexion->prepare($sql_repartidor);
                          $result = $stmt->execute(array(':fechaE' => $id));
                          $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);

                          if(count($rows))
                          {
                           ?> 
                           <?php
                                for ($i = 1; $i <= 13; $i++) {
                                
                            }
                           ?>
                                                <div class="row">
                                                <div class="col-md-12">
                                                  <div class="tile">
                                                    <div class="tile-body">
                                                      <div class="table-responsive">
                                                      <div><a class="btn btn-success btn-sm" href="../reportes/reportePacientes.php?fechaE=<?php echo $id;?>" target="blank"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  EXCEL</a></div>
                                                      <br />
                                                        <table class="table table-hover table-bordered" id="sampleTable">
                                                          <thead>
                                                            <tr>
                                                            <th scope="col" >Nombre Completo</th>
                                                            <th scope="col" >Telefono</th>
                                                            <th scope="col" >Email</th>
                                                            <th scope="col" >Fecha de Ingreso</th>
                                                            <th scope="col" >Fecha de Egreso</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php
                                                                  foreach ($rows as $row) {
                                                                    
                                                            ?>
                                                            <tr>
                                                              <td><?php print($row->Nombre)?></td>
                                                              <td><?php print($row->Telefono)?></td>
                                                              <td><?php print($row->Email)?></td>
                                                              <td><?php print($row->Fecha_ingreso)?></td>
                                                              <td><?php print($row->Fecha_egreso)?></td>
                                                            </tr>
                                                            <?php
                                                                  }
                                                            ?>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              
                            <?php
                            
                          }else{
                           echo '<script language="javascript">alert("¡Fecha no encontrada en los registros. No se encuentra registrado!");</script>';
                          }
                      }

                      

                ?>
      </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-center">
                   <a href="index.php" class="btn btn-danger " style="font-family: 'Poppins', sans-serif;">Regresar</a> 
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
  <!-- /.content-wrapper-->                                                                
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