@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Roles</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-success" href="{{ route('roles.create') }}" style="">Crear Rol</a><br><br>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Guard Name</th>
              <th>Creado</th>
              <th>Actualizado</th>
              <th>Editar</th>
              <th>Eliminar</th>
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
                  <td><a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Editar</a></td>
                  <td>
                    <form method="POST" action="{{ route('roles.destroy', $role->id)}}">
                      @csrf
                      {!! method_field('PUT') !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                  </td>
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