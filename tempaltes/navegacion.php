  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']?></p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE ADMINISTRACIÓN</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Panel de Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin-area.php"><i class="fa fa-circle-o"></i>Panel de Control</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Horarios</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listar-horario.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            <li><a href="crear-horario.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-heartbeat" aria-hidden="true"></i>
            <span>Rutinas</span>
          </a>
          <ul class="treeview-menu">
          <li><a href="listar-rutinaincom.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Rutinas sin dias completos</a></li>
            <li><a href="listar-rutina.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Rutinas</a></li>
            <li><a href="registrar-rutina.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-users" aria-hidden="true"></i>
            <span>Instructores</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listar-instructor.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            <li><a href="crear-instructor.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar Instructor</a></li>
            <li><a href="add-insyrut.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar Instructor a Rutina</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-users" aria-hidden="true"></i>
            <span>Clientes</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listar-cliente.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            <li><a href="crear-cliente.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar Cliente</a></li>
            <li><a href="admin-area.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar Cliente a Rutina</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Admin</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin-area.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>Agregar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
            <span>Membresias</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="membresias.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <span>VentasCliente-Membresia</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ventas-planes-totales.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver Todos</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <span>Calculos para cliente</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="consultar-cliente.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Ver</a></li>
            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->