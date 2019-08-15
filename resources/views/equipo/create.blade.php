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
  <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
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

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tipo de equipo</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tipo de equipo</label>
                <select class="form-control select2" style="width: 100%;">
                  <option value="" selected="selected">Seleccione</option>
                  @foreach ($tipoequipo as $item)
                      <option value="{{ $item->idTipoEquipo}}">{{ $item->nomTipoE}}</option>
                  @endforeach
                </select>
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- Date -->
              <div class="form-group">
                <label>Fecha:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" value="{{ $fecha }}">
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Datos de ubicación</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label>Tipo de código</label>
                  <select class="form-control">
                    <option value="">Seleccione</option>
                    <option value="Patrimonial">Patrimonial</option>
                    <option value="Interno">Interno</option>
                  </select>
                </div>
                
              <div class="form-group">
                <label>Código</label>
                <input type="text" class="form-control" placeholder="Ejm: 11010010101">
              </div>
              <div class="form-group">
                <label>ubicación</label>
                <input type="text" class="form-control" placeholder="Ejm: SGTIC">
              </div>
            
              <!-- /.form-group -->
              <div class="form-group">
                <label>Dependencia</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Seleccione</option>
                  @foreach ($dependencia as $item)
                      <option value="{{ $item->idDependencia }}">{{ $item->nomDependencia }}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Detalles de quipo</h3>
            </div>
            <div class="box-body">

              <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" placeholder="Ejm: MRF-345">
              </div>
              <div class="form-group">
                <label>Serie</label>
                <input type="text" class="form-control" placeholder="Ejm: 2FTEE3G">
              </div>
              <div class="form-group">
                <label>RAM</label>
                <input type="text" class="form-control" placeholder="Ejm: 2 GB">
              </div>

              <!-- IP mask -->
              <div class="form-group">
                <label>IP mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>MAC:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" id="mac" >
                </div>
                <!-- /.input group -->
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Datos extra</h3>
            </div>
            <div class="box-body">

              <div class="form-group">
                <label>Nombre usuario</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>

              <div class="form-group">
                <label>Acceso a internet</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Licencia</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>

              <div class="form-group">
                <label>Estado</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>

              <div class="form-group">
                <label>Marca</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Caracteristicas</h3>
            </div>
            <div class="box-body">

              <div class="form-group">
                <label>Sistema Operativo</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>

              <div class="form-group">
                <label>Procesador</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>

            </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

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
  <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- bootstrap time picker -->
  <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

    <!-- DataTables -->
    {{-- <script src="{{asset('js/equipo.js')}}"></script> --}}
    {{-- <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
    {{-- <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
      $('#mac').inputmask("mac")

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      // $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
      //Date range as a button
      // $('#daterange-btn').daterangepicker(
      //   {
      //     ranges   : {
      //       'Today'       : [moment(), moment()],
      //       'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      //       'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      //       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      //       'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      //       'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      //     },
      //     startDate: moment().subtract(29, 'days'),
      //     endDate  : moment()
      //   },
      //   function (start, end) {
      //     $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      //   }
      // )

      //Date picker
      // $('#datepicker').datepicker({
      //   autoclose: true
      // })

      $('#datepicker').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss'
      });


      // //iCheck for checkbox and radio inputs
      // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      //   checkboxClass: 'icheckbox_minimal-blue',
      //   radioClass   : 'iradio_minimal-blue'
      // })
      // //Red color scheme for iCheck
      // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      //   checkboxClass: 'icheckbox_minimal-red',
      //   radioClass   : 'iradio_minimal-red'
      // })
      // //Flat red color scheme for iCheck
      // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      //   checkboxClass: 'icheckbox_flat-green',
      //   radioClass   : 'iradio_flat-green'
      // })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>

@endsection