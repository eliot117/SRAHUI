@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Perfil Rellenar</h3>
            </div>
            <form role="form" method="POST" action="{{ route('profiles.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre Completo</label>
                  <input type="text" name="name" class="form-control" placeholder="Ingrese nombre" value="{{ old('name') }}">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="lastname">Apellidos</label>
                  <input type="lastname" name="lastname" class="form-control" placeholder="Ingrese Apellidos" value="{{ old('lastname') }}">
                  @error('lastname')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="address" name="address" class="form-control" placeholder="Ingrese una dirección" value="{{ old('address') }}">
                    @error('address')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="file">Imagen</label>
                    <input type="file" name="image_profile" class="form-control" placeholder="Ingrese una imagen" value="{{ old('image_profile') }}">
                    @error('image_profile')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
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