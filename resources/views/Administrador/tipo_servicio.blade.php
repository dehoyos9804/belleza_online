@extends('plantillasAdmin.plantilla')
@section('titulo','Proyecto| Lumen 1ss')

@section('menu')
  @include('plantillasAdmin.menuadmin')
@endsection

@section('contenido')

       <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" id="formservicio" name="formservicio" action="{{route('Administrador.store')}}" method="POST">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="fa fa-users"></span><b> Registro de Servicios</b></h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Nombre del Servicio:</label>
                    <div class="col-md-9">                                            
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                            <input type="text" id="nombreservicio" name="nombreservicio" class="form-control" placeholder="Nombre del Servicio" />
                        </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"> Descripcion del Servicio:</label>
                    <div class="col-md-9">                                            
                        <div class="col-md-9 col-xs-12">
                            <textarea rows="6" id="descripcionservicio" name="descripcionservicio" class="form-control" placeholder="Descripcion del Servicio" ></textarea>
                        </div>                                            
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Tipo de Servicio</label>
                      <div class="col-md-6 col-xs-12">                                                                                            
                        <select class="form-control select" name="txttiposervicio" id="txttiposervicio" data-live-search="true">
                        <option value="0" selected disabled="">seleccione</option>
                                                    @foreach($vartiposervicio as $tipos)
                                                        <option value="{{$tipos->idtiposervicio}}">{{$tipos->tiposervicio}}</option>
                                                    @endforeach
                                                </select>
                      </div>
                      
                  </div>
                </div>
              </div>
              <h4><b> </b></h4>
              
              <h4><b>Registros</b></h4>
              
              <div class="row">
                  <div class="col-md-12">
                      <div class="table table-responsive">
                         <table class="table table-bordered table-striped table-actions table datatable">
                             <thead>
                                <th class="text-center" width="120">Id Servicio</th>
                                 <th class="text-center">Servicio</th>
                                 <th class="text-center">Descripcion del Servicio</th>
                                 <th width="120">Acciones</th>
                             </thead>
                             @foreach($varservicio as $servicio)
                                <tr>
                                    <td class="text-center">{{$servicio->idservicio}}</td>
                                    
                                    <td class="text-center">{{$servicio->nombreservicio}}</td>
                                    <td class="text-center">{{$servicio->descripcionservicio}}</td>
                                    <td>
                                        <a class="btn btn-danger btn-rounded btn-sm" href="{{ route('Administrador.delete',['id'=>$servicio->idservicio]) }}">
                                             <span class="fa fa-times"></span>
                                         </a>
                                    </td>
                                </tr>
                            @endforeach
                         </table> 
                      </div>
                  </div>
              </div>
              </div>
              <div class="panel-footer">
              <button class="btn btn-info pull-right" type="submit">Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

@endsection