@extends('layouts.app')

@section('content')
<section class="content">
@can('crop_create')
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Insertar un Cultivo</h3>
        </div>
        <form role="form" method="POST" action="{{ route('crops.store') }}" enctype="multipart/form-data">
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
              <label for="epoch">Epoca</label>
              <input type="text" name="name_epoch" class="form-control" placeholder="Ingrese una epoca" value="{{ old('name_epoch') }}">
              @error('name_epoch')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="namefamily">Familia del Cultivo</label>
              <input type="text" name="namefamily" class="form-control" placeholder="Ingrese nombre de la familia" value="{{ old('namefamily') }}">
              @error('namefamily')
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
              <label for="description">Descripción</label>
              <textarea type="textarea" name="description" class="form-control" placeholder="Ingrese una descripción">{{old('description')}}</textarea>
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="file">Imagen</label>
              <input type="file" name="image_crop" class="form-control" placeholder="Ingrese una imagen" value="{{ old('image_crop') }}">
              @error('image_crop')
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
@endcan
@endsection