@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_show')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Cultivos</h3>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nombre Cientifico</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Actualizado</th>
              @can('crop_edit')
              <th>Editar</th>  
              @endcan
              @can('crop_delete')
              <th>Eliminar</th>  
              @endcan
            </tr>
            </thead>
            <tbody>
              @foreach ($crop as $cro)
               <tr>
                  <td>{{ $cro->id }}</td>
                  <td>
                   <a href="{{ route('crop.show', $cro->id) }}">
                      {{ $cro->name_scientific }}</a>
                  </td>
                  <td>{{ $cro->name }}</td>
                  <td>{{ $cro->description }}</td>
                  <td>{{ $cro->updated_at }}</td>
                  @can('crop_edit')
                  <td><a class="btn btn-primary" href="{{ route('crop.edit', $cro->id) }}">Editar</a></td>
                  @endcan
                  @can('crop_delete')
                  <td>
                    <form method="POST" action="{{ route('crop.destroy', $cro->id)}}">
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
@endcan
</section>
@endsection