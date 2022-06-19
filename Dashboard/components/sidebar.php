<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../media/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
          
          <?php  
          echo $nombre;
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
        <?php switch($_SESSION['tipo_usuario']) {
				case 1:
          /*$tipo_usuario = $_SESSION['tipo_usuario']; 
          if($tipo_usuario == 1) { */?>
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
                  <a href="resultados.php" class="nav-link">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="grafica.php" class="nav-link">
                    <i class="fas fa-chart-pie"></i>
                    <p>Graficas</p>
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
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-comment"></i>
                <p>
                  Comentarios
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="comentariosGenerales.php" class="nav-link">
                  <i class="fas fa-comment"></i>
                    <p>Comentarios de Pacientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="comentarios.php" class="nav-link">
                  <i class="fas fa-comment"></i>
                    <p>Comentarios por Categoria</p>
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
                  <a href="reportesFI.php" class="nav-link">
                  <i class="fas fa-download"></i>
                    <p>Reportes de Fecha de ingreso</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="reportes.php" class="nav-link">
                  <i class="fas fa-download"></i>
                    <p>Reportes de Fecha de egreso</p>
                  </a>
                </li>
              </ul>
            </li>
        <?php break;
				case 3:/*}*/ ?> 
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-envelope"></i>
              <p>
                Registro
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="agregarPacientes.php" class="nav-link">
                <i class="fas fa-envelope"></i>
                  <p>Registro de Pacientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-envelope"></i>
              <p>
                Envio de encuesta
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="envioCorreo.php" class="nav-link">
                <i class="fas fa-envelope"></i>
                  <p>Enviar encuesta a pacientes</p>
                </a>
              </li>
            </ul>
          </li>
          <?php break;
			} ?>  
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