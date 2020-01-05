@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Permisos Disponibles</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Guard Name</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($permissions as $permiso)
               <tr>
                  <td>{{ $permiso->id }}</td>
                  <td>
                   <a href="{{ route('permissions.show', $permiso->id) }}">
                      {{ $permiso->name }}</a>
                  </td>
                  <td>{{ $permiso->guard_name }}</td>
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
</section>
@endsection