@extends('layouts.gema')

@section('title')
  Ver equipo | GEMA
@endsection

@section('link')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('equipo')
    active
@endsection
@section('equipo_index')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detalle de Equipo
        <small>Visualizar detalle de equipo de cómputo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-laptop"></i> Equipos</a></li>
        <li><a href="javascript:window.history.back();">Listado</a></li>
        <li class="active">Ver</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Tipo de equipo y ubicación</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Tipo de equipo: </label> {{ $equipo[0]->nomTipoE }}
                </div>
                <div class="form-group">
                  <label>Fecha de registro: </label> {{ $equipo[0]->fecha }}
                </div>
                <div class="form-group">
                  <label>Tipo de código: </label> {{ $equipo[0]->tipo_codigo }}
                </div>
                <div class="form-group">
                  <label>Código: </label> {{ $equipo[0]->codigo_pat }}
                </div>
                <div class="form-group">
                  <label>ubicación: </label> {{ $equipo[0]->ubicacion }}
                </div>
                <div class="form-group">
                  <label>Dependencia: </label> {{ $equipo[0]->nomDependencia }}
                </div>
              </div>
            </div>

            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Estado y datos de frabriación</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Estado:</label> {{ $equipo[0]->nomEstado }}
                </div>
                <div class="form-group">
                  <label>Marca:</label> {{ $equipo[0]->nomMarca }}
                </div>
                <div class="form-group">
                  <label>Modelo:</label> {{ $equipo[0]->modelo }}
                </div>
                <div class="form-group">
                  <label>Serie:</label> {{ $equipo[0]->serie }}
                </div>
                <div class="form-group">
                  <label>RAM:</label> {{ $equipo[0]->ram }}
                </div>
                <div class="form-group">
                  <label>MAC:</label> {{ $equipo[0]->mac }}
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
                  <label>Dominio:</label> {{ $equipo[0]->dominio }}
                </div>
                <div class="form-group">
                  <label>Nombre de equipo:</label> {{ $equipo[0]->nom_equipo }}
                </div>
                <div class="form-group">
                  <label>Nombre usuario:</label> {{ $equipo[0]->usuario }}
                </div>
                <div class="form-group">
                  <label>Acceso a internet:</label> {{ $equipo[0]->acceso_internet }}
                </div>
                <div class="form-group">
                  <label>IP:</label> {{ $equipo[0]->ip }}
                </div>
              </div>
            </div>

            <div class="box box-warning">
              <div class="box-header">
                <h3 class="box-title">Sistema operativo y procesador</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Sistema Operativo:</label> {{ ($so == null) ? "":$so[0]->nomSO }}
                </div>
                <div class="form-group">
                  <label>Licencia de sistema operativo:</label> {{ $equipo[0]->licencia_w }}
                </div>
                <div class="form-group">
                  <label>Procesador:</label> {{ ($procesador == null) ? "":$procesador[0]->nomProcesador." - ".$procesador[0]->velocidad }}
                </div>
                <div class="form-group">
                  <label for="observaciones">Observaciones:</label><br> {{ $equipo[0]->observaciones }}
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="box-footer">
              <a class="btn btn-default" href="javascript:window.history.back();">Regresar</a>
            </div>
          </div>

        </div>
    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')

  <!-- Select2 -->
  {{-- <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script> --}}
  <!-- InputMask -->
  {{-- <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script> --}}
  {{-- <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script> --}}
  {{-- <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script> --}}
  <!-- date-range-picker -->
  {{-- <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script> --}}

  {{-- <script src="{{asset('js/equipo_create.js')}}"></script> --}}

  {{-- <script src="{{asset('bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script> --}}

@endsection