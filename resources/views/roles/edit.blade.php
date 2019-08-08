@extends('layouts.gema')

@section('title')
    GEMA | Principal
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
        Editar roles
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
          <form role="form" method="POST" action="{{ route('roles.update',$role->id) }}">
            @csrf
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos de usuario</h3>
                </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Nombre de rol</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nombres" value="{{ $role->name}}">
                    </div>
                    <div class="form-group">
                      <label for="guard_name">Tipo</label>
                      <input type="text" class="form-control" id="guard_name" name="guard_name" placeholder="guard_name" readonly value="{{ $role->guard_name}}">
                    </div>

                  </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Permisos</h3>
                </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Permisos</label>
                      @foreach ($permissions as $item)
                        <div class="checkbox">
                          <label>
                            <input name="permissions[]" type="checkbox" value="{{$item->name}}" {{ in_array($item->name, $haspermissions) ? 'checked':'' }} >
                            {{$item->name}}
                          </label>
                        </div>
                      @endforeach
                    </div>
                  </div>
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