@extends('layouts.gema')

@section('title')
  Editar Actividad | GEMA
@endsection

@section('link')
  {{-- <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('actividad')
    active
@endsection
@section('actividad_create')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registar actividad
        <small>Registar actividad realizada</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-tasks"></i> Mantenimiento</a></li>
        {{-- <li><a href="#">General</a></li> --}}
        <li class="active">Nuevo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form role="form" method="POST" action="{{ route('activity.update',$registro[0]->id) }}">
        @csrf
        <div class="row">

          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Equipo</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Seleccionar equipo</label>
                      <select class="form-control select2" name="idEquipo" id="idEquipo" readonly style="width: 100%;">
                        <option value="{{ $registro[0]->idEquipo }}" selected="selected">{{ $registro[0]->codigo_pat }}</option>
                          {{-- @foreach ($equipo as $item)
                            <option value="{{ $item->id}}">{{ $item->codigo_pat}}</option>
                          @endforeach --}}
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Fecha de registro:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="fecha" id="fecha" readonly value="{{ $registro[0]->fecha }}">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Estado y datos de frabriación</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Tipo de Mantenimiento</label>
                  <select class="form-control" name="tipoMant" id="tipoMant">
                    <option value="" selected>Seleccione...</option>
                    <option {{ ($registro[0]->tipoMant == "Preventivo") ? "Selected":""  }} value="Preventivo" >Preventivo</option>
                    <option {{ ($registro[0]->tipoMant == "Correctivo") ? "Selected":""  }} value="Correctivo" >Correctivo</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="problema">Problema manifestado por el usuario</label><br>
                  <textarea class="form-control" name="problema" id="problema"  placeholder="Problema manifestado por el usuario...">{{ $registro[0]->problema }}</textarea>
                </div>
                <div class="form-group">
                  <label for="problema_real">Problema real encontrado</label><br>
                  <textarea class="form-control" name="problema_real" id="problema_real"  placeholder="Problema real encontrado por el técnico en el equipo...">{{ $registro[0]->problema_real }}</textarea>
                </div>
                <div class="form-group">
                  <label for="solucion">Solución</label><br>
                  <textarea class="form-control" name="solucion" id="solucion"  placeholder="Solución dada al problema...">{{ $registro[0]->solucion }}</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Datos de configuración</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Encargado de hacer mantenimiento</label>
                  <select class="form-control" name="user_id" id="user_id" readonly>
                    <option value="{{ $registro[0]->idUser }}" selected>{{ $registro[0]->name }}</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="recomendaciones">Observaciones</label><br>
                  <textarea class="form-control" name="recomendaciones" id="recomendaciones"  placeholder="Observaciones y recomendaciones...">{{ $registro[0]->recomendaciones }}</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="box-footer">
              <a class="btn btn-default" href="javascript:window.history.back();">Cancelar</a>
              <button type="submit" class="btn btn-info pull-right">Actualizar</button>
            </div>
          </div>

        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')
  <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
  <script>
    $(function () {
      $('.select2').select2()

      $('#fecha').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss'
      });
    })
  </script>
@endsection