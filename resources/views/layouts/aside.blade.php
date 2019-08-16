<aside class="main-sidebar">
  <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user222.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">MAIN NAVIGATION</li>

            @hasanyrole('Super Admin|Administrador|Supervisor|Técnico|Observador|Tablero')
            <li class="treeview @yield('principal')">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Tablero</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li class="@yield('principal')"><a href="{{route('principal')}}"><i class="fa fa-circle-o"></i>Tablero de mandos</a></li>
                {{-- <li><a href="#"><i class="fa fa-circle-o"></i>##</a></li> --}}
                </ul>
            </li>
            @endhasanyrole
            
            @hasanyrole('Super Admin|Administrador|Supervisor|Técnico|Observador|Mantenimiento')
            <li class="treeview @yield('actividad')">
                <a href="#">
                <i class="fa fa-tasks"></i> <span>Mantenimiento</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    @can('maintenance.index')
                        <li class="@yield('actividad_index')"><a href="{{ route('activity.index') }}"><i class="fa fa-circle-o"></i>Listar actividades</a></li>
                    @endcan
                    @can('maintenance.index')
                        <li class="@yield('actividad_create')"><a href="{{ route('activity.create') }}"><i class="fa fa-circle-o"></i>Registrar actividad</a></li>
                    @endcan
                </ul>
            </li>
            @endhasanyrole
            
            @hasanyrole('Super Admin|Administrador|Supervisor|Técnico|Observador|Equipos')
            <li class="treeview @yield('equipo')">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Equipos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('device.index')
                        <li class="@yield('equipo_index')"><a href="{{ route('device.index') }}"><i class="fa fa-circle-o"></i> Listar equipos</a></li>
                    @endcan
                    @can('device.index')
                        <li class="@yield('equipo_create')"><a href="{{ route('device.create') }}"><i class="fa fa-circle-o"></i> Registrar equipo</a></li>
                    @endcan
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('Super Admin|Administrador|Usuarios')
            <li class="treeview @yield('usuario')">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('users.index')
                        <li class="@yield('usuario_index')"><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i>Listar usuarios</a></li>
                    @endcan
                    @can('roles.index')
                        <li class="@yield('roles_index')"><a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i>Listar roles</a></li>
                    @endcan
                </ul>
            </li>
            @endhasanyrole
            
            @hasanyrole('Super Admin|Administrador|Supervisor|Reportes')
            <li class="treeview">
                <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Reportes</span>
                <span class="pull-right-container">
                    <span class="label label-primary pull-right"></span>
                </span>
                </a>
                <ul class="treeview-menu">
                    @can('report.index')
                        <li><a href="#"><i class="fa fa-circle-o"></i> Reportes </a></li>
                    @endcan
                    @can('report.index')
                        <li><a href="#"><i class="fa fa-circle-o"></i> Consultas </a></li>
                    @endcan
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('Super Admin|Administrador|Documentación')
            <li><a href="{{ route('documentation') }}"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
            @endhasanyrole

        </ul>
    </section>
</aside>