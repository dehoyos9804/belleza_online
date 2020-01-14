@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menuempleado')
@endsection

@section('contenido')  
<!-- START CONTENT FRAME -->
<div class="content-frame">            
    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top"> 
    <input type="hidden" name="evaluar" id="evaluar" value="1">                       
        <div class="page-title">                    
            <h2><span class="fa fa-calendar"></span>Creá Tú Horario</h2>
        </div>  
        <div class="pull-right">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>        
        <input type="hidden" navarstartme="txtcodempleado" id="txtcodempleado" value="{{$varempleado->idempleado}}">
        <input type="hidden" name="txthoras" id="txthoras" value="{{$varstart}}"> 
        <input type="hidden" name="txthorae" id="txthorae" value="{{$varend}}">
        <!--realizo una concadenacion por el largo de la cadena-->
        <?php $concadenar = "";?>
        @foreach($arraydias as $array)
        	<?php $concadenar = $concadenar." ".$array?>
        @endforeach
        <!--lleno mi cadena-->
        <input type="hidden" name="txtdown" id="txtdown" value="{{$concadenar}}">
    </div>
    <!-- END CONTENT FRAME TOP -->
                    
        <!-- START CONTENT FRAME LEFT -->
        <div class="content-frame-left">
           <div class="row">
           	<div class="col-md-12">
           		@if(count($varhorarioempleado) > 0)
                	<div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Atención! </strong> Usted ya creo su horario, si quiere actualizarlo llene el formulario y de click en el boton actualizar
                    </div>
                @endif
           		<div class="panel panel-warning">
           			<form class="form-horizontal" action="{{route('empleado.horariostore', ['id'=>$varempleado->idempleado])}}" method="POST">
           			<div class="panel-heading">
           				<h5 class="panel-title"><span class="fa fa-users"></span><b>Programar Horario</b></h5>
           				<ul class="panel-controls">
                    		<li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    		<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                		</ul>
                	</div>	
                		<div class="panel-body">
                				@if($mensaje1 != "")
                					<div class="alert alert-info" role="alert">
                                		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                		<strong>Atención!</strong> {{$mensaje1}}
                            		</div>
                				@endif
                				@if($mensaje2 != "")
                					<div class="alert alert-danger" role="alert">
                                		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                		<strong>Atención!</strong> {{$mensaje2}}
                            		</div> 
                				@endif
                				<div class="row">
                					<div class="col-md-12">
                                    	<label class="col-md-12 control-label" style="text-align: center;">Hora Entrada:</label>
                                    	<div class="col-md-12">
                                        	<div class="input-group clockpicker" data-autoclose="true">
                                            	<span class="input-group-addon add-on"><span class="fa fa-clock-o"></span></span>
                                            	<input type="time" id="txtHoraEntrada" name="txtHoraEntrada" class="form-control" required="true"/>
                                        	</div>
                                    	</div>
                                	</div>
                                	<div class="col-md-12">
                                    	<label class="col-md-12 control-label" style="text-align: center;">Hora salida:</label>
                                    	<div class="col-md-12">
                                        	<div class="input-group clockpicker" data-autoclose="true">
                                            	<span class="input-group-addon add-on"><span class="fa fa-clock-o"></span></span>
                                            	<input type="time" id="txtHoraSalida" name="txtHoraSalida" class="form-control" required="true" />
                                        	</div>
                                    	</div>
                                	</div>
                                	<div class="col-md-12 text-center">
                                		<br>
                                		<h5>Elige los días en que trabajarás</h5>
                                	</div>
                                	<div class="form-group">
                                		<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="1" /> LUNES</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="2"/> MARTES</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="3"/> MIERCOLES</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="4"/> JUEVES</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="5"/> VIERNES</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="6"/> SABADO</label>
                                    	</div>
                                    	<div class="col-md-12">                                    
                                        	<label class="check"><input type="checkbox" class="icheckbox" name="semana[]" id="semana[]" value="0"/> DOMINGO</label>
                                    	</div>
                                	</div>	
                				</div>
                		</div>
                		<div class="panel-footer">
                			<!--<a type="button" class="btn btn-primary pull-right">Guardar</button>-->
                			@if(count($varhorarioempleado) > 0)
                				<a href="#"  type="submit" class="btn btn-info" id="btnactualizar" name="btnactualizar">Actualizar</a>
                				<input type="submit" value="Guardar" disabled class="btn btn-info pull-right">
                			@endif	
                			@if(count($varhorarioempleado) == 0)
                				<a href="#" class="btn btn-info" disabled>Actualizar</a>
                				<input type="submit" value="Guardar"  class="btn btn-info pull-right">
                			@endif	
                		</div>	
                	</form>	
           			</div>	
           		</div>	
           	</div>	
           </div>
        <!-- END CONTENT FRAME LEFT -->
                    
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body padding-bottom-0">
        
        <div class="row">
            <div class="col-md-12">                              
                <div id="calendar2">
                </div>
            </div>
        </div>
        
    </div>                    
    <!-- END CONTENT FRAME BODY -->
    
</div>               
<!-- END CONTENT FRAME -->    
@endsection
@push('scripts') 
@endpush