@extends('layouts.app')

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Informarción Permisos</h3>
        </div>
        <div class="box-body">
          <p>Id:          {{ $permissions->id         }}</p>
          <p>Nombre:      {{ $permissions->name       }}</p>
          <p>Creado:      {{ $permissions->created_at }}</p>
          <p>Actualizado: {{ $permissions->updated_at }} </p>
        </div>
    </div>
</section>    
@endsection