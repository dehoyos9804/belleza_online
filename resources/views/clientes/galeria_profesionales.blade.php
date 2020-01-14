@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menu')
@endsection

@section('contenido')
<!-- START CONTENT FRAME -->
                <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Galeria | Nombre profesional</h2>
                        </div>                        
                    </div>
                    
                    <!-- START CONTENT FRAME RIGHT -->
                    <div class="content-frame-right">   
                    <input type="hidden" name="evaluar" id="evaluar" value="0">                     
                         <div class="panel panel-default">
                            <div class="panel-body profile" style=" background: url('{{url("/admin-lte")}}/joli/img/backgrounds/wall_1.jpg') center center no-repeat;">
                                <div class="profile-image">
                                    <img src='{{$varidempleado->imagen}}' alt="Nadia Ali"/>
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name" style="color: #000">{{$varidempleado->nombres}} {{$varidempleado->apellidos}}</div>
                                    <div class="profile-data-title" style="color: #000;">Servicio de belleza</div>
                                </div>
                            </div>                                
                            <div class="panel-body">                                    
                                <div class="row text-center">
                                    <p>
                                        <h2>¡Hola!</h2>
                                        <h4>Un gusto, aqui esta la galeria, en donde te muestro mis trabajos,
                                    enamorate, mira todos los trabajos que hago, eligeme como tu mejor opción
                                    para prestarte mis servicios</h4>
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <a class="btn btn-info btn-block" href="{{route('cita.lista',['id'=>$varcliente->idcliente,'idempleado'=>$varidempleado->idempleado])}}">APARTA TU CITA</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- END CONTENT FRAME RIGHT -->
                
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                        
                        <div class="gallery" id="links">
                            @foreach($varimagenempleado as $imagenempleado)
                                <a class="gallery-item" href='{{$imagenempleado->imagen}}' title="Nature Image 1" data-gallery>
                                <div class="image">                              
                                    <img src='{{$imagenempleado->imagen}}' alt="Nature Image 1"/>                                        
                                    <!--<ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>-->                                                                    
                                </div>
                                <div class="meta">
                                    <strong>galeria del empleado</strong>
                                    <span>Description</span>
                                </div>                                
                            </a>
                            @endforeach                     
                             
                        </div>
                             
                        <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>                                    
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>       
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->
@endsection