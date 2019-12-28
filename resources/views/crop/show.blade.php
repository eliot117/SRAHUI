@extends('layouts.app')

@section('content')
<section class="content">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Cultivo</h3>
    </div>
    <div class="box-body">
      <p>Nombre:            {{ $crop->name }}</p>
      <p>Nombre Cientifico: {{ $crop->name_scientific }}</p>
      <p>Descripcion:       {{ $crop->description }}</p>
      <p>imagen: {{ $crop->image_crop}}</p> 
    </div>
    <!-- /.box-body -->
</div>
</section>
@endsection