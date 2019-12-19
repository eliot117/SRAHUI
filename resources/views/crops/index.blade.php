@extends('layouts.app')

@section('content')
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de Cultivos</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre Cientifico</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($crops as $crop)
                 <tr>
                    <td>{{ $crop->id }}</td>
                    <td>
                     <a href="{{ route('crops.show', $crop->id) }}">
                        {{ $crop->name_scientific }}</a>
                    </td>
                    <td>{{ $crop->name }}</td>
                    <td>{{ $crop->description }}</td>
                    <td>{{ $crop->imagen }}</td>
                    <td><a class="btn btn-primary" href="{{ route('crops.edit', $crop->id) }}">Editar</a></td>
                    <td>
                      <form method="POST" action="{{ route('crops.destroy', $crop->id)}}">
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
@endsection