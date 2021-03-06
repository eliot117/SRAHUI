@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Roles Disponibles</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Guard Name</th>
              <th>Creado</th>
              <th>Actualizado</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
               <tr>
                  <td>{{ $role->id }}</td>
                  <td>
                   <a href="{{ route('roles.show', $role->id) }}">
                      {{ $role->name }}</a>
                  </td>
                  <td>{{ $role->guard_name }}</td>
                  <td>{{ $role->created_at }}</td>
                  <td>{{ $role->updated_at }}</td>
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