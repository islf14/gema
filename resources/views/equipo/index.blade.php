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

      {{-- <button class="btn btn-default" id="btn-confirm">Confirm</button> --}}

      <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="modal-btn-si">Si</button>
              <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="alert" role="alert" id="result"></div> --}}

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
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
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
                        <td><a href="{{ route('device.show',$item->id) }}" class="btn btn-xs btn-info"><i class='fa fa-newspaper-o'></i> Ver</a></td>
                        <td><a href="{{ route('device.edit',$item->id) }}" class='btn btn-xs btn-success'><i class='fa fa-edit'></i> Editar</a></td>

                        <td>
                          <form method="post" action="{{ route('device.destroy',$item->id) }}" onsubmit="return confirmarenvioo();">
                              @csrf
                              <button  type="submit" class="btn btn-xs btn-danger" id="btn-confirm"><i class="fa fa-trash-o"> </i> Eliminar</button>
                          </form>

                          {{-- <a href="{{ route('device.destroy',$item->id) }}" class="btn btn-xs btn-danger"><i class='fa fa-trash-o'></i> Eliminar</a> --}}
                        </td>
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