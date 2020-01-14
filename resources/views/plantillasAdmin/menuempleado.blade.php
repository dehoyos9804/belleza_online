 <!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{route('empleado.registro_horario', ['id'=>$varempleado->idempleado, 'mensaje1'=>'', 'mensaje2'=>''])}}">SB</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src='{{$varempleado->imagen}}' alt="{{$varempleado->nombres}}"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src='{{$varempleado->imagen}}' alt="{{$varempleado->nombres}}"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">{{$varempleado->nombres}} {{$varempleado->apellidos}}</div>
                <div class="profile-data-title">PROFESIONAL DE BELLEZA</div>
            </div>
        </div>                                                                        
    </li>
    <li class="xn-title">Navegación</li>
    <li class="active">
        <a href="{{route('empleado.registro_horario', ['id'=>$varempleado->idempleado, 'mensaje1'=>'', 'mensaje2'=>''])}}"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>                        
    </li> 
    <li>
        <a href="{{route('empleado.galeria',['id'=>$varempleado->idempleado])}}"><span class="fa fa-picture-o"></span> <span class="xn-text">Galeria de Servicios</span></a>
    </li> 
    <li>
        <a href="{{route('empleado.registro_horario', ['id'=>$varempleado->idempleado, 'mensaje1'=>'', 'mensaje2'=>''])}}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Crear Horario</span></a>
    </li>        
</ul>
<!-- END X-NAVIGATION -->