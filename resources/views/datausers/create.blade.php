<div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#activity" data-toggle="tab">Guardar Datos Usuarios</a></li>
      </ul>
      <div class="tab-content">
        <div class="active tab-pane" id="datos">
            <form class="form-horizontal" method="POST" action="{{ route('datausers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="name" name="name" class="form-control" id="name" placeholder="Ingrese Nombre">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-10">
                    <input type="name" name="lastname" class="form-control" id="name" placeholder="Ingrese Apellidos">
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Dirección</label>

                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="inputName" placeholder="Ingrese Dirección">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Imagen de Perfil</label>
                <div class="col-sm-10">
                    <input type="file" name="image_profile" class="form-control" id="file" placeholder="archivo">
                    @error('image_profile')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
                </div>
                </div>
            </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
</div>