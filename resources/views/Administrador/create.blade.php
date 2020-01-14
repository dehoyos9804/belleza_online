@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen')

@section('menu')
  @include('plantillasAdmin.menuadmin')
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
    	
            </div>                            
            <!-- END WIDGET MESSAGES -->                   
        </div>
    </div>	
@endsection