@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <!--<h3 class="box-title">Datos de los cultivos</h3>-->
          <a class="btn btn-warning">Detener</a>
          <a class="btn btn-success">Regar</a>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Sensor de Temperatura</th>
              <th>Sensor de Humedad</th>
              <th>Sensor de Suelo</th>
              <th>Creado</th>
              <th>Actualizado</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($sensors as $sensor)
               <tr>
                  <td>{{ $sensor->id }}</td>
                  <td>{{ $sensor->temperature}} °</td>
                  <td>{{ $sensor->humidity}}    %</td>
                  <td>{{ $sensor->ground }}     %</td>
                  <td>{{ $sensor->created_at }}</td>
                  <td>{{ $sensor->updated_at }}</td>
               </tr>
              @endforeach
            </tbody>
          </table>
          
        </div>
      </div>
  </div>
</div>
</section>
</section>
@endsection