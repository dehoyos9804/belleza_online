 <!-- START X-NAVIGATION -->
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="index.html">SB</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src='{{url("/admin-lte")}}/assets/images/logo-corporativo-192x192.png' alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src='{{url("/admin-lte")}}/assets/images/logo-corporativo-192x192.png' alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">John Doe</div>
                <div class="profile-data-title">Web Developer/Designer</div>
            </div>
        </div>                                                                        
    </li>
    <li class="xn-title">Navegación</li>
    <li class="active">
        <a href="{{route('Administrador.create')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>                        
    </li> 
    <li>
        <a href="{{route('Administrador.empleados')}}"><span class="fa fa-picture-o"></span> <span class="xn-text">Lista Empleados</span></a>
    </li> 
    <li>
        <a href="{{route('Administrador.clientes')}}"><span class="fa fa-shopping-cart"></span> <span class="xn-text">Lista Clientes</span></a>
    </li>                   
    <li>
        <a href="{{route('Administrador.tipo_servicio')}}"><span class="fa fa-female"></span> <span class="xn-text">Tipo de Servicios</span></a> 
    </li>
</ul> 

<!-- END X-NAVIGATION -->