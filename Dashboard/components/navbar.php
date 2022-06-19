<!----
<nav class="main-header navbar navbar-expand navbar-red navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      
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
-------> 
<nav class="main-header navbar navbar-expand navbar-red navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      
    <li class="nav-item dropdown">
          <a class="nav-link"  data-toggle="dropdown" href="#">
          <?php 
               require '../registro/coon.php';
               $sql = "SELECT Re.Respuesta,Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso FROM respuestas Re 
                INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente  WHERE  status=0 ";
                $res =$mysqli->query($sql);
                $contar = mysqli_num_rows($res) 
              ?>
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"><?php echo mysqli_num_rows($res); ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?php echo mysqli_num_rows($res); ?> Notificaciones</span>
            <div class="dropdown-divider"></div>
            <?php
              $consulta = "SELECT Re.Respuesta,Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso FROM respuestas Re 
              INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente  WHERE Respuesta='Regular' AND status = 0";
              $regulares =$mysqli->query($consulta);
              $contar1 = mysqli_num_rows($regulares);
              if(mysqli_num_rows($regulares)>0){
            ?>
             <?php
              $consultas = "SELECT Re.Respuesta,Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso FROM respuestas Re 
              INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente  WHERE Respuesta='Malo' AND status = 0";
              $malas =$mysqli->query($consultas);
              $contar2 = mysqli_num_rows($malas);

              $consultasMM = "SELECT Re.Respuesta,Pa.Nombre, Pa.Fecha_ingreso,Pa.Fecha_egreso FROM respuestas Re 
              INNER JOIN paciente Pa ON Re.id_paciente = Pa.id_paciente  WHERE Respuesta='Muy Malo' AND status = 0";
              $Mmalas =$mysqli->query($consultasMM);
              $contar3 = mysqli_num_rows($Mmalas);
            ?>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i><?php echo mysqli_num_rows($regulares); ?> nuevas opiniones Regulares
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i><?php echo mysqli_num_rows($malas); ?> nuevas opiniones Malas
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i><?php echo mysqli_num_rows($Mmalas); ?> nuevas opiniones Muy Malas
            </a>
            <div class="dropdown-divider"></div>
          <a href= "../contadores/NotifyOptions.php" id="notifications" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
            <?php      
                  }else{
                  echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><i class="fas fa-user-tie"></i>No hay notificaciones</a>';
                  }
              
              ?> 
          </div>
    </li>
    </ul>
  </nav>
