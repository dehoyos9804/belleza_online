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
        <input type="hidden" name="evaluar" id="evaluar" value="0">                  
            <div class="page-title">                    
                <h2><span class="fa fa-calendar"></span> Mis Citas</h2>
            </div>  
            <div class="pull-right">
                <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
            </div>                                                                                
        </div>
    <div class="row">
      <div class="col-md-12">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa fa-users"></span><b> Citas Programadas</b></h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="table table-responsive">
                         <table class="table table-bordered table-striped table-actions table datatable">
                             <thead>
                                 <th width="100" class="text-center">N°</th>
                                 <th class="text-center">Descripcion</th>
                                 <th class="text-center">fecha y hora</th>
                                 <th class="text-center">empleado</th>
                                 <th class="text-center">personas atendidas</th>
                                 <!--<th>actions</th>-->
                             </thead>
                             @foreach($varcita as $cita)
                                <tr>
                                    <td class="text-center">{{$cita->idcita}}</td>
                                    <td class="text-center">{{$cita->descripcion}}</td>
                                    <td class="text-center">{{$cita->fechaSolicitud}} {{$cita->horacita}}</td>
                                    <td class="text-center">
                                        @foreach($varhorarioempleado as $horario)
                                            @if($horario->idhorarioempleado == $cita->codhorarioempleado)
                                               @foreach($varempleado as $empleado)
                                                @if($empleado->idempleado == $horario->codempleado)
                                                    {{$empleado->nombres}} {{$empleado->apellidos}}
                                                @endif
                                               @endforeach
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{$cita->numeropersonas}}</td>
                                    <!--<td>
                                         <a class="btn btn-default btn-rounded btn-sm" href="">
                                             <span class="fa fa-pencil"></span>
                                         </a>
                                         <a class="btn btn-danger btn-rounded btn-sm" href="">
                                             <span class="fa fa-times"></span>
                                         </a>
                                    </td>-->
                                </tr>
                             @endforeach   
                         </table> 
                      </div>
                  </div>
              </div>
              </div>
          </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
