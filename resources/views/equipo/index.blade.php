@extends('layouts.gema')

@section('title')
    Equipos | Principal
@endsection

@section('link')
  {{-- <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net/css/jquery.dataTables.min.css')}}">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">  --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net/css/dataTables.min.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/sl-1.3.0/datatables.min.css"/> --}}
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
        Equipos
        <small>Listado de equipos de cómputo registrados</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-laptop"></i> Equipos</a></li>
        {{-- <li><a href="#">General</a></li> --}}
        <li class="active">Listado</li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Equipos Registrados</h3>
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
              <table id="equipos" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Código Pat.</th>
                    <th>Tipo Equipo</th>
                    <th>Dependencia</th>
                    <th>Estado</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($equipo as $item)
                      <tr>
                        <td>{{ $item->codigo_pat }}</td>
                        <td>{{ $item->nomTipoE }}</td>
                        <td>{{ $item->nomDependencia }}</td>
                        <td>{{ $item->nomEstado }}</td>
                        <td>{{ $item->nomMarca }}</td>
                        <td>{{ $item->modelo }}</td>
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

  <script src="{{asset('js/equipo.js')}}"></script>

  <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}

  <script src="{{asset('bower_components/datatables.net/js/pdfmake.min.js')}}"></script>
  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> --}}

  <script src="{{asset('bower_components/datatables.net/js/vfs_fonts.js')}}"></script>
  {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> --}}

  <script src="{{asset('bower_components/datatables.net/js/datatables.min.js')}}"></script>
  {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/sl-1.3.0/datatables.min.js"></script> --}}

@endsection