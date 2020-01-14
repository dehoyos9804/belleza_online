@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen 1ss')

@section('menu')
  @include('plantillasAdmin.menuadmin')
@endsection

@section('contenido')
              <div class="row">
      <div class="col-md-12">
              <h4><b>Lista de Empleados</b></h4>
              <div class="row">
                  <div class="col-md-12">
                      <div class="table table-responsive">
                         <table class="table table-bordered table-striped table-actions table datatable">
                             <thead>
                                 <th width="50" class="text-center">Id</th>
                                 <th width="200" class="text-center">Nombres</th>
                                 <th width="200" class="text-center">Apellidos</th>
                                 <th width="200" class="text-center">e-mail</th>
                                 </thead>
                             @foreach($varempleado as $empleado)
                                <tr>
                                    <td class="text-center">{{$empleado->idempleado}}</td>
                                    <td class="text-center">{{$empleado->nombres}}</td>
                                    <td class="text-center">{{$empleado->apellidos}}</td>
                                    <td class="text-center">{{$empleado->email}}</td>
                                    
                                </tr>
                            @endforeach
                         </table> 
                      </div>
                  </div>
              </div>
              </div><!--fin panel body-->
             
      </div>
   
              
	
@endsection