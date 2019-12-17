@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Insertar un Cultivo</h3>
      </div>
      <form role="form" method="POST" action="{{ route('crops.store') }} ">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="scientific">Nombre Cientifico</label>
            <input type="text" name="name_scientific" class="form-control" placeholder="Ingrese nombre cientifico" value="{{ old('name_scientific') }}">
            @error('name_scientific')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Ingrese un nombre" value="{{ old('name') }}">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea type="textarea" name="description" class="form-control" placeholder="Ingrese una descripción">{{old('description')}}</textarea>
            @error('description')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="file">Nombre</label>
            <input type="file" name="imagen" class="form-control" placeholder="Ingrese una imagen" value="{{ old('imagen') }}">
            @error('imagen')
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
@endsection