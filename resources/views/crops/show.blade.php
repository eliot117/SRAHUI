@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Cultivo</h3>
    </div>
    <div class="box-body">
      <p>Nombre:            {{ $crops->name }}</p>
      <p>Nombre Cientifico: {{ $crops->name_scientific }}</p>
      <p>Descripcion:       {{ $crops->description }}</p>
      <p>imagen: {{ $crops->imagen}}</p> 
    </div>
    <!-- /.box-body -->
</div>
@endsection