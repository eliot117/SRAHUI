@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Instituto Tecnologico de Huimanguillo</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre Mí</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">Malibu, California</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       @include('datausers.create')
      </div>
</section>
@endsection