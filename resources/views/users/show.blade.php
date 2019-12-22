@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Informarción Usuario</h3>
    </div>
    <div class="box-body">
      <p>Nombre:            {{ $users->name }}</p>
      <p>Correo Electronico: {{ $users->email }}</p>
    </div>
    <!-- /.box-body -->
</div>
@endsection