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
        Administración de usuarios
        <small>Sección para editar usuario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-user"></i> Usuarios</a></li>
        <li><a>Usuarios</a></li>
        <li class="active">Editar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <form role="form" method="POST" action="{{ route('users.update',$user->id) }}">
            @csrf
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos de usuario</h3>
                </div>
                {{-- <form role="form"> --}}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Nombres</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" value="{{ $user->name}}">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Apellidos</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" value="{{ $user->lastname}}">
                    </div>
                    <div class="form-group">
                      <label for="dni">DNI</label>
                      <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="{{ $user->dni}}">
                    </div>
                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" value="{{ $user->phone}}">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email}}">
                    </div>
                    <div class="form-group">
                      <label for="password">Nueva cotraseña (Solo si es necesario)</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Nueva contraseña" value="">
                    </div>
                  </div>
                  {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Actualizar datos</button>
                  </div> --}}
                {{-- </form> --}}
              </div>
            </div>

            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Roles</h3>
                </div>
                {{-- <form class="form"> --}}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Roles</label>
                      @foreach ($roles as $item)
                        <div class="checkbox">
                          <label>
                            <input name="roles[]" type="checkbox" value="{{$item->name}}" {{ in_array($item->name, $hasroles) ? 'checked':'' }} >
                            {{$item->name}}
                          </label>
                        </div>
                      @endforeach
                    </div>

                  </div>
                  {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-info pull-right">Actualizar roles asignados</button>
                  </div> --}}
                {{-- </form> --}}
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="box-footer">
                {{-- <button type="" class="btn btn-default">Cancelar</button> --}}
                <a class="btn btn-default" href="javascript:window.history.back();">Cancelar</a>
                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
              </div>
            </div>
          </form>
        </div>
    </section>
    <!-- /.content -->
  </div>
  
@endsection