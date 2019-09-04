@extends('layouts.gema')

@section('title')
    GEMA | Principal
@endsection

@section('link')

@endsection

@section('usuario')
    active
@endsection
@section('roles_index')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administración de roles
        <small>Sección para administrar los roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-user"></i> Usuarios</a></li>
        {{-- <li><a href="#">General</a></li> --}}
        <li class="active">Roles</li>
      </ol>
    </section>

    <div class="modal fade" id="modalnew">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nuevo rol</h4>
          </div>
          <form id="formnewrol">
            <div class="modal-body">
              <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                  <div class="form-group">
                      <label for="name">Nombre de rol</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" value="">
                  </div>
                  <div class="box-header with-border">
                  </div>
                </div> 
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="SaveUser">Save changes</button>
            </div>
          </form>  

        </div>
      </div>
    </div>

    <div class="modal fade" id="modalsee">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detalle de rol</h4>
          </div>
          <div class="modal-body">

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos de rol</h3>
                </div>
                <div class="box-body">
                  <table class="table">
                    <tr>
                      <th><i>Nombre de rol</i></th>
                      <th id="nombre_rol"></th>
                    </tr>
                    <tr>
                      <th><i>Guard_name</i></th>
                      <th id="guard_name"></th>
                    </tr> 
                  </table>

                <div class="box-header with-border">
                </div>
                  
                </div> 
                <div class="box-header with-border">
                  <h3 class="box-title">Permisos</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                      <ul id="haspermissions"></ul>
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div>
        @can('roles.create')
        <button type="button" id="btnModalNew" class="btn btn-primary" data-toggle="modal" data-target="#modalnew">Nuevo</button>
        @endcan
      </div>
      <div class="box-header with-border">
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Roles </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody id="tableroles">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')
  <script src="{{asset('js/roles.js')}}"></script>

@endsection