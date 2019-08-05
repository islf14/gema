@extends('layouts.gema')

@section('title')
    GEMA | Principal
@endsection

@section('usuario')
    active
@endsection
@section('usuario_index')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar usuario
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
        <li><a href="#">General</a></li>
        <li class="active">Equipo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Datos de usuario</h3>
              </div>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Nombres</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombres" value="{{ $user->name}}">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Apellidos</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Apellidos" value="{{ $user->lastname}}">
                  </div>
                  <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control" id="dni" placeholder="DNI" value="{{ $user->dni}}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="text" class="form-control" id="phone" placeholder="Teléfono" value="{{ $user->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" value="{{ $user->email}}">
                  </div>
                  <div class="form-group">
                    <label for="password">Nueva cotraseña (Solo si es necesario)</label>
                    <input type="password" class="form-control" id="password" placeholder="Nueva contraseña" value="">
                  </div>
                </div>
                {{-- <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Actualizar datos</button>
                </div> --}}
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Roles</h3>
              </div>
              <form class="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Roles</label>
                    @foreach ($roles as $item)
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          {{ $item->name}}
                        </label>
                      </div>
                    @endforeach
                  </div>

                </div>
                {{-- <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancelar</button>
                  <button type="submit" class="btn btn-info pull-right">Actualizar roles asignados</button>
                </div> --}}
              </form>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancelar</button>
              <button type="submit" class="btn btn-info pull-right">Actualizar</button>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  
@endsection