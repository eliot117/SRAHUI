@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_show')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Cultivo</h3>
    </div>
    <div class="box-body">
      <p>Nombre:              {{ $crops->name }}</p>
      <p>Nombre Cientifico:   {{ $crops->name_scientific }}</p>
      <p>Epoca Cultivo:       {{ $crops->epoch  ? $crops->epoch->name_epoch          : 'Sin epoca'}}</p>
      <p>Familia Culitvo:     {{ $crops->family ? $crops->family->namefamily         : 'Sin dato' }}</p>
      <p>Descripción Familia: {{ $crops->family ? $crops->family->description_family : 'Sin descripción'}}</p>
      <p>Descripcion:       {{ $crops->description }}</p>
      <img src="{{ asset('crop/'.$crops->image_crop)}}" class="img-fluid" alt="">
    </div>
</div>
@endcan
</section>
@endsection