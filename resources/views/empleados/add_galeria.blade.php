@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menuempleado')
@endsection

@section('contenido')
 <!-- START CONTENT FRAME -->
                <div class="content-frame">  
                <input type="hidden" name="evaluar" id="evaluar" value="0"> 
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-image"></span> Gallery</h2>
                        </div>                                      
                                               
                    </div>
                    
                    <!-- START CONTENT FRAME RIGHT -->
                    <div class="content-frame-right">
                        <div class="panel panel-default">    
                            <div class="panel-body profile" style=" background: url('{{url("/admin-lte")}}/joli/img/backgrounds/wall_1.jpg') center center no-repeat;">
                                <div class="profile-data">
                                    <div class="profile-data-name" style="color: #000">HOLA</div>
                                    <div class="profile-data-title" style="color: #000;">Aqui podras ver y subir tu galeria de trabajo,
                                        abajo podras escoger tu imagenen desde tu computadora y agragarla a tu galeria
                                    </div>
                                </div>    
                            </div>    
                        </div>  
                        <div class="col-md-12">
                           <div class="panel panel-default">
                                <div class="panel-body">
                                    <form action="{{route('empleado.galeriastore', ['id'=>$varempleado->idempleado])}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Elige tu imagen</label><br/>
                                                <input type="file" multiple id="file-simple" name="file-simple"  class="col-md-8" />
                                            </div>                                            
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-info btn-block">Guardar Imagenes</button>
                                        </div>
                                    </form> 
                                </div>   
                            </div>  
                        </div>                  
                    </div>
                    <!-- END CONTENT FRAME RIGHT -->
                
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                        
                        <div class="pull-left push-up-10">
                            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
                        </div>
                        <div class="pull-right push-up-10">
                            <div class="btn-group">
                                <button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button>
                            </div>                            
                        </div>
                        <div class="gallery" id="links">
                        @foreach($varimagenempleado as $imagenempleado)
                             
                            <a class="gallery-item" href='{{$imagenempleado->imagen}}' title="Nature Image 1" data-gallery>
                                <div class="image">                              
                                    <img src='{{$imagenempleado->imagen}}' alt="Nature Image 1"/>                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>Nature image 1</strong>
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
