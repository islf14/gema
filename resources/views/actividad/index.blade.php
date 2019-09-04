@extends('layouts.gema')

@section('title')
    GEMA | Principal
@endsection

@section('link')
  <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net/css/dataTables.min.css')}}">
  <style>
    div.dataTables_length {
        padding-left: 2em;
    }
    div.dataTables_length,
    div.dataTables_filter {
        padding-top: 0.55em;
    }
  </style>
@endsection

@section('actividad')
    active
@endsection
@section('actividad_index')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Actividades
        <small>Listado de actividades registradas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-tasks"></i> Mantenimiento</a></li>
        <li class="active">Listado</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Actividades de mantenimiento registradas</h3>
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

            <div class="box-body">
              <table id="actividad" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Problema</th>
                    <th>Solución</th>
                    <th>Fecha</th>
                    <th>Tipo mant.</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($registro as $item)
                      <tr>
                        <td>{{ $item->idRegistro }}</td>
                        <td>{{ $item->problema }}</td>
                        <td>{{ $item->solucion }}</td>
                        <td>{{ $item->fecha }}</td>
                        <td>{{ $item->tipoMant }}</td>
                        <td><button>editar</button></td>
                      </tr>
                  @endforeach
                </tbody>
                {{-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                </tfoot> --}}
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  
@endsection

@section('script')
  <script src="{{asset('js/actividad.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net/js/datatables.min.js')}}"></script>
@endsection