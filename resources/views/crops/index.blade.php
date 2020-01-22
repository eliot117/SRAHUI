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
              <th>Epoca</th>
              <th>Familia</th>
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
              @foreach ($crops as $crop)
               <tr>
                  <td>{{ $crop->id }}</td>
                  <td>
                   <a href="{{ route('crops.show', $crop->id) }}">
                      {{ $crop->name_scientific }}</a>
                  </td>
                  <td>{{ $crop->name }}</td>
                  <td>{{ $crop->epoch ? $crop->epoch->name_epoch : 'Sin epoca'}}</td>
                  <td>{{ $crop->family ? $crop->family->namefamily: 'Sin dato' }}</td>
                  <td>{{ $crop->updated_at }}</td>
                  @can('crop_edit')
                  <td><a class="btn btn-primary" href="{{ route('crops.edit', $crop->id) }}">Editar</a></td>
                  @endcan
                  @can('crop_delete')
                  <td>
                    <form method="POST" action="{{ route('crops.destroy', $crop->id)}}">
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