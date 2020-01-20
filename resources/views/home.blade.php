@extends('layouts.app')

@section('content')
<section class="content">
<div class="row">
  <div class="col-md-12">
    <div class="box box-widget widget-user">
      <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">{{ Auth::user()->firstname }}</h3>
          <h5 class="widget-user-desc">{{ Auth::user()->email }}</h5>
      </div>
      <div class="widget-user-image">
          <img src="{{ asset('avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="No disponible">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-6 border-right">
            <div class="description-block">
              <h5 class="description-header">Miembro desde</h5>
              <span class="description-text">{{ Auth::user()->created_at }}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="description-block">
              <h5 class="description-header">Ultima actualización</h5>
              <span class="description-text">{{ Auth::user()->updated_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">¿Qué son los cultivos?</h3>
  </div>
  <div class="box-body">
    <strong><i class="fa fa-file-text-o margin-r-5"></i> Nota Informativa</strong>

    <p>Las raíces del cultivo comenzaron en las áreas de Turquía actual y el Medio Oriente 
      hace aproximadamente 10,000 años. Dos de los cultivos más tempranos son conocidos 
      como Catal Hüyük y Jericho. Catal Hüyük tenía 1000 havitantes entonces, en el 6000 A.C., 
      estas personas tomaban hierbas salvajes, usaban las semillas para comida y almacenándola 
      tenian para sembrar durante los próximos años. Estas semillas son los cereales y hacen 
      un porcentaje grande del alimento mundial.</p>

    <hr>

    <p>El cultivo cambió poco hasta aproximadamente 1700. Una revolución de agricultura tine lugar, 
      que resultó en un gran aumento de la producción de cultivos. Este aumento de cultivos vino 
      sobremanera en gran parte por la destrucción final de instituciones medievales y la aprobación 
      general de nuevas técnica de cultivo. Algunos de estos cambios tuvieron lugar por la aprobación 
      de cultivos del "Nuevo mundo" como maíz y papas que aumentó considerablemente las cosechas.</p>
  </div>
  <!-- /.box-body -->
</div>
</section>
@endsection