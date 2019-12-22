@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Informarción Roles</h3>
    </div>
    <div class="box-body">
      <p>Id:          {{ $roles->id         }}</p>
      <p>Nombre:      {{ $roles->name       }}</p>
      <p>Creado:      {{ $roles->created_at }}</p>
      <p>Actualizado: {{ $roles->updated_at }} </p>
    </div>
    <!-- /.box-body -->
</div>
@endsection