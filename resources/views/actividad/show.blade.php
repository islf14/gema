@extends('layouts.gema')

@section('title')
  Ver Actividad | GEMA
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
        Ver actividad
        <small>Ver detalles de actividad realizada</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-tasks"></i> Mantenimiento</a></li>
        <li><a href="javascript:window.history.back();">Listado</a></li>
        <li class="active">Ver</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
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
                      <p>{{ $registro[0]->codigo_pat }}</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Fecha de registro:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <p>{{ $registro[0]->fecha }}</p>
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
                  <p>{{ $registro[0]->tipoMant }}</p>
                </div>
                <div class="form-group">
                  <label for="problema">Problema manifestado por el usuario</label><br>
                  <p>{{ $registro[0]->problema }}</p>
                </div>
                <div class="form-group">
                  <label for="problema_real">Problema real encontrado</label><br>
                  <p>{{ $registro[0]->problema_real }}</p>
                </div>
                <div class="form-group">
                  <label for="solucion">Solución</label><br>
                  <p>{{ $registro[0]->solucion }}</p>
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
                  <p>{{ $registro[0]->name }}</p>
                </div>
                <div class="form-group">
                  <label for="recomendaciones">Observaciones</label><br>
                  <p>{{ $registro[0]->recomendaciones }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="box-footer">
              <a class="btn btn-default" href="javascript:window.history.back();">Cancelar</a>
              {{-- <button type="submit" class="btn btn-info pull-right">Guardar</button> --}}
            </div>
          </div>

        </div>

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