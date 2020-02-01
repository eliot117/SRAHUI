@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_show')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $crops->name }}</h3>
    </div>
    <div class="box-body">
      <p class="col-sm-4">
        <b>Nombre:</b> {{ $crops->name }}
      </p>
      <p class="col-sm-4">
        <b>Nombre Cientifico:</b>  {{ $crops->name_scientific }}
      </p>
      <p class="col-sm-4">
        <b>Epoca Cultivo:</b>  {{ $crops->epoch  ? $crops->epoch->name_epoch          : 'Sin epoca'}}
      </p>
      <p class="col-sm-4">
        <b>Familia Culitvo:</b>  {{ $crops->family ? $crops->family->namefamily         : 'Sin dato' }}
      </p>
      <p class="col-sm-8">
        <b>Descripción Familia:</b>   {{ $crops->family ? $crops->family->description_family : 'Sin descripción'}}
      </p>
      <p class="col-sm-4">
        <b>Nombre Plaga:</b>  {{ $crops->pest   ? $crops->pest->name_pest            : 'Sin plaga' }}
      </p>
      <p class="col-sm-8">
        <b>Descripción de la plaga:</b> {{ $crops->pest   ? $crops->pest->description_pest     : 'Sin descripción'}}
      </p>
      <p class="col-sm-4">
        <b>Tipo de Planta:</b> {{ $crops->plant  ? $crops->plant->type_plant          : 'Sin tipo'}}
      </p>
      <p class="col-sm-8">
        <b>Breve Descripción:</b>  {{ $crops->plant  ? $crops->plant->description_plant   : 'Sin descripción'}}
      </p>
      <p class="col-sm-12">
        <b>Descripción Cultivo:</b> {{ $crops->description }}
      </p>
      <div align="center">
        <img src="{{ asset('crop/'.$crops->image_crop)}}" class="img-fluid"  alt=""><br><br>
      </div>
      <a class="btn bg-olive" href="{{ route('crops.index') }}">Regresar</a>
    </div>
</div>
@endcan
</section>
@endsection