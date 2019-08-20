@extends('layouts.gema')

@section('title')
    Nuevo Equipo | GEMA
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
  <!-- Bootstrap time Picker -->
  {{-- <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}"> --}}
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">

  {{-- <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/sl-1.3.0/datatables.min.css"/> --}}

@endsection


@section('equipo')
    active
@endsection
@section('equipo_create')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar Equipo
        <small>Registrar un nuevo equipo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> GEMA</a></li>
        <li><a href="#">Equipos</a></li>
        <li class="active">Nuevo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form role="form" method="POST" action="{{ route('device.store') }}">
        @csrf
        <div class="row">

          <div class="col-md-12">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Tipo de equipo</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tipo de equipo</label>
                      <select class="form-control select2" name="idTipoEquipo" id="idTipoEquipo" style="width: 100%;">
                        <option value="" selected="selected">Seleccione...</option>
                        @foreach ($tipoequipo as $item)
                            <option value="{{ $item->idTipoEquipo}}">{{ $item->nomTipoE}}</option>
                        @endforeach
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
                        <input type="text" class="form-control pull-right" name="fecha" id="fecha" value="{{ $fecha }}">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Datos de ubicación</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Tipo de código</label>
                  <select class="form-control" name="tipo_codigo" id="tipo_codigo">
                    <option value="">Seleccione</option>
                    <option value="Patrimonial">Patrimonial</option>
                    <option value="Interno">Interno</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Código</label>
                  <input type="text" class="form-control" name="codigo_pat" id="codigo_pat" placeholder="Ejm: 11010010101">
                </div>
                <div class="form-group">
                  <label>ubicación</label>
                  <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Ejm: SGTIC">
                </div>
                <div class="form-group">
                  <label>Dependencia</label>
                  <select class="form-control select2" name="idDependencia" id="idDependencia" style="width: 100%;">
                    <option value="" selected="selected">Seleccione</option>
                    @foreach ($dependencia as $item)
                        <option value="{{ $item->idDependencia }}">{{ $item->nomDependencia }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Estado y datos de frabriación</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Estado</label>
                  <select class="form-control" name="idEstado" id="idEstado">
                    <option value="" selected>Seleccione...</option>
                    @foreach ($estado as $item)
                        <option value="{{ $item->idEstado }}">{{ $item->nomEstado }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Marca</label>
                  <select class="form-control select2" name="idMarca" id="idMarca" style="width: 100%;">
                    <option value="" selected="selected">Seleccione...</option>
                    @foreach ($marca as $item)
                        <option value="{{ $item->idMarca }}">{{ $item->nomMarca }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Modelo</label>
                  <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Ejm: MRF-345">
                </div>
                <div class="form-group">
                  <label>Serie</label>
                  <input type="text" class="form-control" name="serie" id="serie" placeholder="Ejm: 2FTEE3G">
                </div>
                <div class="form-group">
                  <label>RAM</label>
                  <input type="text" class="form-control" name="ram" id="ram" placeholder="Ejm: 2 GB">
                </div>
                <div class="form-group">
                  <label>MAC</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <input type="text" class="form-control" name="mac" id="mac">
                  </div>
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
                  <label>Dominio</label>
                  <input type="text" class="form-control" name="dominio" id="dominio" placeholder="mdcgal" value="mdcgal">
                </div>
                <div class="form-group">
                  <label>Nombre de equipo</label>
                  <input type="text" class="form-control" name="nom_equipo" id="nom_equipo" placeholder="MDCGAL0001">
                </div>
                <div class="form-group">
                  <label>Nombre usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <label>Acceso a internet</label>
                  <select class="form-control" name="acceso_internet" id="acceso_internet">
                    <option value="" selected>Seleccione...</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>IP</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-laptop"></i>
                    </div>
                    <input type="text" class="form-control" name="ip" id="ip" data-inputmask="'alias': 'ip'" data-mask>
                  </div>
                </div>
              </div>
            </div>

            <div class="box box-warning">
              <div class="box-header">
                <h3 class="box-title">Sistema operativo y procesador</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Sistema Operativo</label>
                  <select class="form-control select2" name="idSO" id="idSO" style="width: 100%;">
                    <option value="" selected="selected">Seleccione...</option>
                    @foreach ($so as $item)
                        <option value="{{ $item->idSO }}">{{ $item->nomSO}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Licencia de sistema operativo</label>
                  <input type="text" class="form-control" name="licencia_w" id="licencia_w" placeholder="Licencia de SO">
                </div>
                <div class="form-group">
                  <label>Procesador</label>
                  <select class="form-control select2" name="idProcesador" id="idProcesador" style="width: 100%;">
                    <option value="" selected="selected">Seleccione...</option>
                    @foreach ($procesador as $item)
                        <option value="{{ $item->idProcesador }}">{{ $item->nomProcesador }} {{ $item->velocidad }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Datos extra</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="observaciones">Observaciones</label><br>
                  <textarea class="form-control" name="observaciones" id="observaciones"  placeholder="Observaciones..."></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="box-footer">
              <a class="btn btn-default" href="javascript:window.history.back();">Cancelar</a>
              <button type="submit" class="btn btn-info pull-right">Guardar</button>
            </div>
          </div>

        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')

  <!-- Select2 -->
  <script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- date-range-picker -->
  <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
  
  {{-- <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script> --}}
  <!-- bootstrap datepicker -->
  {{-- <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script> --}}
  <!-- bootstrap color picker -->
  {{-- <script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script> --}}
  <!-- bootstrap time picker -->
  {{-- <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script> --}}

  <!-- DataTables -->
  {{-- <script src="{{asset('js/equipo.js')}}"></script> --}}
  {{-- <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
  {{-- <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script> --}}

  <script src="{{asset('bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> --}}

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      $('[data-mask]').inputmask()
      // $('#mac').inputmask("mac")

      $('#fecha').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss'
      });

      // //Timepicker
      // $('.timepicker').timepicker({
      //   showInputs: false
      // })
    })
  </script>

@endsection