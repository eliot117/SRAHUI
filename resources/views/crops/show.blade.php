@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_show')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Cultivo</h3>
    </div>
    <div class="box-body">
      <p>Nombre:            {{ $crops->name }}</p>
      <p>Nombre Cientifico: {{ $crops->name_scientific }}</p>
      <p>Descripcion:       {{ $crops->description }}</p>
      <p><img src="{{ asset('image/crop/'.$crops->image_crop)}}" class="img-fluid" alt=""></p> 
    </div>
</div>
@endcan
</section>
@endsection