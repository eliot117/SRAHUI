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
              <label for="description_family">Descripción de la Familia</label>
              <textarea type="textarea" name="description_family" class="form-control" placeholder="Ingrese una descripción del cultivo">{{ old('description_family') }}</textarea>
              @error('description_family')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="name_pest">Tipo de Plaga</label>
              <input type="text" name="name_pest" class="form-control" placeholder="Ingrese plaga" value="{{ old('name_pest') }}">
              @error('name_pest')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description_pest">Descripción de la Plaga</label>
              <textarea type="textarea" name="description_pest" class="form-control" placeholder="Describa la plaga">{{ old('description_pest') }}</textarea>
              @error('description_pest')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="type_plant">Tipo de Planta</label>
              <input type="text" name="type_plant" class="form-control" placeholder="Ingrese planta" value="{{ old('type_plant') }}">
              @error('type_plant')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description_plant">Breve Descripción</label>
              <textarea type="textarea" name="description_plant" class="form-control" placeholder="Describa">{{ old('description_plant') }}</textarea>
              @error('description_plant')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="description">Descripción del cultivo</label>
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
            <a class="btn btn-warning" href="{{ route('crops.index')}}">Regresar</a>
            <button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endcan
@endsection