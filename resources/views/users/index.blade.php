@extends('layouts.gema')

@section('title')
    GEMA | Principal
@endsection

@section('link')
  {{-- <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/sl-1.3.0/datatables.min.css"/> --}}
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
        Usuario index
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
        <li><a href="#">General</a></li>
        <li class="active">Equipo</li>
      </ol>
    </section>

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detalle de usuario</h4>
          </div>
          <div class="modal-body">

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos personales</h3>
                </div>
                <div class="box-body">
                  <table class="table">
                    <tr>
                      <th><i>Nombres</i></th>
                      <th id="nombres"></th>
                    </tr>
                    <tr>
                      <th><i>Apellidos</i></th>
                      <th id="apellidos"></th>
                    </tr>
                    <tr>
                      <th><i>DNI</i></th>
                      <th id="dni"></th>
                    </tr>
                    <tr>
                      <th><i>Teléfono</i></th>
                      <th id="telefono"></th>
                    </tr>
                    <tr>
                      <th><i>Correo Electrónico</i></th>
                      <th id="email"></th>
                    </tr>

                  </table>
                <div class="box-header with-border">
                </div>
                  
                </div> 
                <div class="box-header with-border">
                  <h3 class="box-title">Roles</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                      <ul id="hasroles"></ul>
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- Main content -->
    <section class="content">
      {{-- <h3>plantilla</h3> --}}
      <div>
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Nuevo</button> --}}
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios </h3>
            </div>

            @if (session('info'))
            <div class="">
                <div class="">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody id="tableusers">
                  
                </tbody>
                {{-- <tfoot>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')
  <!-- DataTables -->
  <script src="{{asset('js/users.js')}}"></script>
  {{-- <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
  {{-- <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.6/sl-1.3.0/datatables.min.js"></script> --}}
  
  {{-- <script>
  $(function () {
    $('#personas').DataTable()
    $('').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
</script> --}}

@endsection