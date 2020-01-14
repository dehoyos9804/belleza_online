 <!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{route('cliente.create',['id'=>$varcliente->idcliente])}}">Servicio</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src='{{$varcliente->imagen}}' alt="{{$varcliente->nombres}}"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src='{{$varcliente->imagen}}' alt="{{$varcliente->nombres}}"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">{{$varcliente->nombres}} {{$varcliente->apellidos}}</div>
                <div class="profile-data-title">Cliente Vigente</div>
            </div>
        </div>                                                                        
    </li>
    <li class="xn-title">Navegación</li>
    <li class="active">
        <a href="{{route('cliente.create',['id'=>$varcliente->idcliente])}}"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>                        
    </li> 
    <li>
        <a href="{{route('cliente.lista_profesionales',['id'=>$varcliente->idcliente])}}"><span class="fa fa-female"></span> <span class="xn-text">Profesionales</span></a>
    </li> 
    <li>
        <a href="{{route('cliente.lista_cita',['codigo'=>$varcliente->idcliente])}}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Mis citas</span></a>
        <div class="informer informer-warning">+1</div>
    </li>         
</ul>
<!-- END X-NAVIGATION -->