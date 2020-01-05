<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
          <!--<img src="{{ asset('profile/'.Auth::User()->image_profile)}}" class="img-circle" alt="">-->
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
          <a href="{{ route('users.index') }}">
            <i class="fa fa-male"></i>
            <span>Usuarios</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            @role('administrator')
            <li><a href="{{ route('users.create') }}"><i class="glyphicon glyphicon-edit"></i>Crear Usuarios</a></li>
            @endrole
            <li><a href="{{ route('users.index') }}"><i class="fa fa-list-alt"></i>Lista de Usuarios</a></li>
          </ul>
        </li>
        @role('administrator')
        <li class="treeview">
          <a href="{{ route('roles.index') }}">
            <i class="fa fa-lock"></i> <span>Roles</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-lock"></i>Roles</a></li>
            <li><a href=""><i class="fa fa-unlock-alt"></i>Permisos</a></li>
          </ul>
        </li>
        @endrole
        <li class="treeview">
          <a href="{{ route('crop.index') }}">
            <i class="fa fa-archive"></i> <span>Cultivos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          @role('administrator')
          <li><a href="{{ route('crop.create') }}"><i class="glyphicon glyphicon-edit"></i> Inserte cultivo</a></li>
          @endrole
          <li><a href="{{ route('crop.index') }}"><i class="fa fa-list-alt"></i>Lista de Cultivos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Riego Datos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Sensor de Humedad</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Sensor de Lluvia</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Senssor de Tierra</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>