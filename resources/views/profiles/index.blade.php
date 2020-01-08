@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Perfil de Usuario</h3>
            </div>
            <div class="box-body">
                <a href="{{ route('profiles.create') }}" class="btn btn-success">Crear Datos</a><br><br>
                <a href="" class="btn btn-success">Ver Datos</a>
            </div>
          </div>
      </div>
    </div>
</section>
@endsection