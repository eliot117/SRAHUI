@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar un Rol</h3>
        </div>
        <form role="form" method="POST" action="{{ route('roles.update', $roles->id ) }} ">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="name">Renombrar un rol</label>
              <input type="text" name="name" class="form-control" placeholder="Ingrese nombre" value="{{ $roles->name }}">
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
</section>
@endsection