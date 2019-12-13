<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bienvenido {{ Auth::user()->name }} al
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cultivos</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <section class="col-lg connectedSortable">
          @yield('content')
        </section>
      </div>
    </section>
  </div>
<!-- /.content-wrapper -->