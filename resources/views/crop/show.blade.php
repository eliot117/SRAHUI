@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_show')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Cultivo</h3>
    </div>
    <div class="box-body">
      <p>Nombre:            {{ $crop->name }}</p>
      <p>Nombre Cientifico: {{ $crop->name_scientific }}</p>
      <p>Descripcion:       {{ $crop->description }}</p>
      <p><img src="{{ asset('image/crop/'.$crop->image_crop)}}" class="img-fluid" alt=""></p> 
    </div>
</div>
@endcan
</section>
@endsection