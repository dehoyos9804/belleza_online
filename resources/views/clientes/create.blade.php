@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menu')
@endsection

@section('contenido')
	<div class="row">
        <div class="col-md-12">
            <div class="alert alert-info push-down-20">
            	<span style="color: #FFF500;">ATENCIÓN!</span> Elige el Servicio que necesitas, con el mejor precio y comodidad 
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    </div>
    <!-- START WIDGETS -->                    
    <div class="row">
    	<div class="col-md-6">
            <input type="hidden" name="evaluar" id="evaluar" value="0">
            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='{{route('cliente.lista_profesionales',['id'=>$varcliente->idcliente])}}';">
                <div class="widget-item-left">
                    <!--<span class="fa fa-bug"></span>-->
                    <img src='{{url("/admin-lte")}}/assets/images/icono-unias.png'>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">UÑAS</div>
                    <div class="widget-title">Servicio a Domicilio</div>
                    <div class="widget-subtitle">Multiples opciones de acuerdo a tu gusto y tendencias</div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->                   
        </div>

        <div class="col-md-6">
            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='{{route('cliente.lista_profesionales',['id'=>$varcliente->idcliente])}}';">
                <div class="widget-item-left">
                    <img src='{{url("/admin-lte")}}/assets/images/icono-peinado.png'>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">PEINADOS</div>
                    <div class="widget-title">Servicio a Domicilio</div>
                    <div class="widget-subtitle">Tú mejor accesorio como más te gusta, en manos expertas </div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->                   
        </div>

        <div class="col-md-6">
            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='{{route('cliente.lista_profesionales',['id'=>$varcliente->idcliente])}}';">
                <div class="widget-item-left">
                    <img src='{{url("/admin-lte")}}/assets/images/icono-maquillaje.png'>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">MAQUILLAJE</div>
                    <div class="widget-title">Servicio a Domicilio</div>
                    <div class="widget-subtitle">Mirada impactante y natural con looks únicos </div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->                   
        </div>

        <div class="col-md-6">
            <!-- START WIDGET MESSAGES -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                <div class="widget-item-left">
                    <img src='{{url("/admin-lte")}}/assets/images/icono-masaje.png'>
                </div>                             
                <div class="widget-data">
                    <div class="widget-int num-count">MASAJE</div>
                    <div class="widget-title">Servicio a Domicilio</div>
                    <div class="widget-subtitle">Masaje relajación, thailandes o reflexología, escoge el que mas te guste </div>
                </div>      
                <div class="widget-controls">                                
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->                   
        </div>
    </div>	
@endsection