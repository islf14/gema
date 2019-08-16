@extends('layouts.gema')

@section('title')
    GEMA | Principal
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
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Mantenimiento</a></li>
        <li><a href="#">General</a></li>
        <li class="active">Equipo</li>
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
              <table id="equipos" class="table table-bordered table-striped">
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