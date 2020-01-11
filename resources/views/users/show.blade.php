@extends('layouts.app')

@section('content')
<section class="content">
@can('user_show')
<div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Informarción Usuario</h3>
      </div>
      <div class="box-body">
        <p>Nombre Usuario:        {{ $users->name       }}</p>
        <p>Correo Electronico:    {{ $users->email      }}</p>
        <p>Nombre:                {{ $users->firstname  }}</p>
        <p>Apellidos:             {{ $users->lastname   }}</p>
      </div>
</div>
@endcan
</section>
@endsection