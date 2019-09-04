@extends('layouts.gema')

@section('title')
    GEMA | Principal
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Documentación
        <small>Sección para indicaciones sobre usuarios y roles</small>
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-book"></i> Documentación</a></li>
        {{-- <a><a>General</a></a> --}}
        {{-- <li class="active">Equipo</li> --}}
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <h3>Secciones en menú con sus roles autorizados</h3><br>
        
        <p>Tablero -> Super Admin, Administrador, Supervisor, Técnico, Observador, Tablero</p>
        <p>Mantenimiento -> Super Admin, Administrador, Supervisor, Técnico, Observador, Mantenimiento</p>
        <p>Equipos -> Super Admin, Administrador, Supervisor, Técnico, Observador, Equipos</p>
        <p>Reportes -> Super Admin, Administrador, Supervisor, Reportes</p>
        <p>Usuarios -> Super Admin, Administrador, Usuarios</p>
        <p>Documentación-> Super Admin, Administrador, Documentación</p>
        <br>
        <p>Nota: para ver la sección agregar un rol con el mismo nombre de la sección y ese rol asignarle al usuario que desea ver la sección</p>
    </section>
    <!-- /.content -->
  </div>
  
@endsection
