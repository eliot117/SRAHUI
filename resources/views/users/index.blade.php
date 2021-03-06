@extends('layouts.app')

@section('content')
<section class="content">
@can('user_show')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Usuarios</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Nombre</th>
              <th>Creado</th>
              <th>Actualizado</th>
              @can('user_delete')
              <th>Eliminar</th>
              @endcan
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
               <tr>
                  <td>{{ $user->id }}</td>
                  <td>
                   <a href="{{ route('users.show', $user->id) }}">
                      {{ $user->name }}</a>
                  </td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->firstname }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  @can('user_delete', Permission::class)
                  <td>
                    <form method="POST" action="{{ route('users.destroy', $user->id)}}">
                      @csrf
                      {!! method_field('PUT') !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                  </td>
                  @endcan
               </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
</section>
@endcan
@endsection