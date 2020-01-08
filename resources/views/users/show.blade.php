@extends('layouts.app')

@section('content')
<section class="content">
@can('user_show')
<div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Informarción Usuario</h3>
      </div>
      <div class="box-body">
        <p>Nombre:             {{ $users->name }}</p>
        <p>Correo Electronico: {{ $users->email }}</p>
      </div>
</div>
@endcan
</section>
@endsection