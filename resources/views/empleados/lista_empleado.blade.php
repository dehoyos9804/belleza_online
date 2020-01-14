@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menu')
@endsection

@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <input type="hidden" name="evaluar" id="evaluar" value="0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Use el buscador para encontrar su estilista profesional favorito. Puedes buscar por: nombres, apellidos, direccion, telélefo. o use la búsqueda avanzada.</p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="¿A quén estás buscando?"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>                                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      @foreach($varempleado as $empleado)  
        <div class="col-md-3">
            <!-- CONTACT ITEM -->
            <div class="panel panel-default" onclick="location.href='pages-messages.html';">
                <div class="panel-body profile2">
                    <div class="profile-image">
                        <img src='{{url("/admin-lte")}}/joli/assets/images/users/user6.jpg' alt="Samuel Leroy Jackson"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{$empleado->nombres}}</div>
                        <div class="profile-data-title">Profesional</div>
                    </div>
                    <div class="profile-controls">
                        <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                    </div>
                </div>                                
                <div class="panel-body">                                    
                    <div class="contact-info">
                        <p><small>Celular</small><br/>(+57) {{$empleado->telefonos}}</p>
                        <p><small>Email</small><br/>{{$empleado->email}}</p>
                        <p><small>Direccion</small><br/>{{$empleado->direccion}}</p>                                   
                    </div>
                </div>                                
            </div>
            <!-- END CONTACT ITEM -->
        </div> 
      @endforeach  
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>                                    
                <li><a href="#">»</a></li>
            </ul>                            
        </div>
    </div>
@endsection