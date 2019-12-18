<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Panel Administrativo</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-male"></i>
            <span>Usuarios</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Lista de Usuarios</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Crear Usuarios</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Roles</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Permisos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ route('crops.index') }}">
            <i class="fa fa-edit"></i> <span>Cultivos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li><a href="{{ route('crops.create') }}"><i class="fa fa-circle-o"></i> Inserte cultivo</a></li>
          <li><a href="{{ route('crops.index') }}"><i class="fa fa-circle-o"></i>Lista de Cultivos</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>