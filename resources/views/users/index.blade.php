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
            <h4 class="modal-title">Default Modal</h4>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Nuevo Usuario</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombres</label>
                      <input type="text" class="form-control" id="name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Apellidos</label>
                      <input type="text" class="form-control" id="lastname" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- Main content -->
    <section class="content">
      <h3>plantilla</h3>
      <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Nuevo</button>
        {{-- <button type="button" class="btn btn-primary">Nuevo</button> --}}
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuarios </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="personas" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody id="users">
                  
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>DNI</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </tfoot>
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