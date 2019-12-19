@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Nuevo Usuario</h3>
        </div>
        <form role="form" method="POST" action="{{ route('users.update', $users->id) }} ">
          @csrf
          {!! method_field('PUT') !!}
          <div class="box-body">
            <div class="form-group">
              <label for="name">Nombre Completo</label>
              <input type="text" name="name" class="form-control" placeholder="Ingrese nombre" value="{{ $users->name }}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Correo Electronico</label>
              <input type="email" name="email" class="form-control" placeholder="Ingrese un correo" value="{{ $users->email }}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
                <label id="password">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingrese Contraseña" value="{{ $users->password }}">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Confirme Contraseña</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme Contraseña" value="{{ $users->password }}">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection