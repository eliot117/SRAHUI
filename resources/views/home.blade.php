@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Bienvenido al sistema {{ Auth::user()->name }}</h3>
        </div>
            
        </div>
    </div>
</div>
</section>
@endsection