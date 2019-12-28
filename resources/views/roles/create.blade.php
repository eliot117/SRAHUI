@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear un Rol</h3>
        </div>
        <form role="form" method="POST" action="{{ route('roles.store') }} ">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="name">Ingrese un rol</label>
              <input type="text" name="name" class="form-control" placeholder="Ingrese nombre" value="{{ old('name') }}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection