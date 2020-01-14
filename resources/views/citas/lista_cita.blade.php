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
            <h2><span class="fa fa-calendar"></span> Agenda Tú Citas</h2>
        </div>  
        <div class="pull-right">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>                                                                                
    </div>
    <!-- END CONTENT FRAME TOP -->
                    
        <!-- START CONTENT FRAME LEFT -->
        <div class="content-frame-left">
            <div class="panel panel-default">
                <div class="panel-body profile" style=" background: url('{{url("/admin-lte")}}/joli/img/backgrounds/wall_1.jpg') center center no-repeat;">
                    <div class="profile-image">
                        <img src='{{$varempleado->imagen}}' alt="Nadia Ali"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name" style="color: #000">{{$varempleado->nombres}} {{$varempleado->apellidos}}</div>
                        <div class="profile-data-title" style="color: #000;">Servicio de belleza</div>
                    </div>
                                                       
                </div>                                
                <div class="panel-body">                                    
                    <div class="row text-center">
                        <p>
                            <h2>¡Hola!</h2>
                        Un gusto, aqui esta mi horario. selecciona un día y aparta tu cita. y con
                        gusto te atenderé desde la comodidad de tu hogar
                        </p>
                    </div>
                </div>
                <div class="panel-body list-group border-bottom">
                    <a class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Instrucciones de uso</a>
                    <a class="list-group-item"><span class="fa fa-coffee"></span>día actual <span class="badge badge-day">...</span></a>                                
                    <a class="list-group-item"><span class="fa fa-users"></span>días no laborales<span class="badge badge-nolaboral">...</span></a>
                    <a class="list-group-item"><span class="fa fa-folder"></span>días laborales <span class="badge badge-laboral">...</span></a>
                </div>
                <div class="panel-body">
                    <h4 class="text-title">Galeria</h4>
                    <div class="gallery" id="links">
                        @foreach($vargaleria as $galeria)
                            <a href='{{$galeria->imagen}}' title="Galeria {{$galeria->idimagenempleado}}" class="gallery-item" data-gallery>
                                <div class="image">
                                    <img src='{{$galeria->imagen}}' alt="Galeria {{$galeria->idimagenempleado}}"/>
                                </div>                                            
                             </a>
                        @endforeach                                                                  
                    </div>
                </div>
            </div> 
        </div>
        <!-- END CONTENT FRAME LEFT -->
                    
    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body padding-bottom-0">
        
        <div class="row">
            <div class="col-md-12">                              
                <div id="calendar">
                    
                </div>
            </div>
        </div>
        
    </div>                    
    <!-- END CONTENT FRAME BODY -->
    
</div>               
<!-- END CONTENT FRAME -->      
@endsection
@push('scripts')

<!--Crear Modal(agregar,modificar, eliminar)--> 
        <div class="modal" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="titulocita"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="txtcodcliente" name="txtcodcliente" value="{{$varcliente->idcliente}}">
                        <input type="hidden" id="txtId" name="txtId">
                        <input type="hidden" id="txtFecha" name="txtFecha">
                        <input type="hidden" id="txtDetalle" name="txtDetalle" value="false">

                        <div class="form-row text-center">
                            <img src='{{$varempleado->imagen}}' width="50" class="img-circle img-thumbnail"/><br>
                            <label>{{$varempleado->nombres}} {{$varempleado->apellidos}}</label><br>
                            Profesional En Belleza<br><br>
                        </div>

                        <!--formulario-->
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Personas:</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon add-on"><span class="fa fa-plus-square"></span></span>
                                                <input type="number" id="txtNumeroPersona" name="txtNumeroPersona" class="form-control" placeholder="Número de personas" value="1" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-3 control-label">Hora Cita:</label>
                                    <div class="col-md-9">
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <span class="input-group-addon add-on"><span class="fa fa-clock-o"></span></span>
                                            <input type="time" id="txtHora" name="txtHora" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tipo Servicio:</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon add-on"><span class="fa fa-ellipsis-h"></span></span>
                                                <select class="form-control select" name="txttiposervicio" id="txttiposervicio" data-live-search="true">
                                                    <option value="0" selected>seleccione</option>
                                                    @foreach($vartiposervicio as $tipos)
                                                        <option value="{{$tipos->idtiposervicio}}">{{$tipos->tiposervicio}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-3 control-label">Servicio:</label>
                                    <div class="col-md-9">
                                        <div class="input-group" id="selectServicio">
                                            <!--<span class="input-group-addon add-on"><span class="fa fa-money"></span></span>
                                            <select class="form-control select" id="txtservicio" name="txtservicio" data-live-search="true">
                                                <option>seleccione</option>
                                            </select>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <div class="col-md-4"></div>
                                <div class="col-md-5">
                                    <button type="button" id="btnAgregar" class="btn btn-info btn-block" >Agregar</button>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="table_detalle" class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <th width="100" class="text-center">Tipo servicio</th>
                                                <th class="text-center">Servicio</th>
                                                <th width="100" class="text-center">acciones</th>
                                            </thead>
                                            <tfoot>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                             </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnNuevaCita" name="btnNuevaCita">Nueva Cita</button>
                        <button type="button" class="btn btn-info" id="btnModificar" name="btnModificar">Modificar</button>
                        <button type="button" class="btn btn-danger" id="btnEliminar" name="btnEliminar">Eliminar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div><!--fin modal-->  

    <script type="text/javascript">

        $(document).ready(function(){
            $("#btnAgregar").click(function(){
                agregar();
            });
        });

        var contador = 0;

        //funcion que permite agregar una nueva fila a la tabla de detalle de servicios
        function agregar(){
            var numeropersonas = $("#txtNumeroPersona").val();
            var hora = $("#txtHora").val();
            var tiposervicio = $("#txttiposervicio option:selected").text();
            var servicio = $("#txtservicio option:selected").text();
            var idtiposervicio = $('#txttiposervicio').val();
            var idservicio = $('#txtservicio').val();

            if(numeropersonas!="" && hora!="" && idtiposervicio > 0 && idservicio > 0){
                var fila = '<tr id="trfila' + contador + '">' +
                                '<td class="text-center">'+
                                    '<input type="hidden" name="tservicio" id="tservicio[]" value="' + idtiposervicio + '" >' + tiposervicio +
                                '</td>' +
                                '<td class="text-center">'+
                                    '<input type="hidden" name="inputservicio[]" id="inputservicio[]" value="' + idservicio + '" >' + servicio+
                                '</td>' +
                                '<td class="text-center">'+
                                    '<button type="button" class="btn btn-danger btn-rounded btn-sm" onClick="eliminar(' + contador + ');" >' +
                                    '<span class="fa fa-times"></span>' +
                                    '</button>' + 
                                '</td>' +
                            '</tr>';

                contador++;
                limpiar();
                $("#table_detalle").append(fila);//agrego una nueva fila en la tabla detalle

            }else{
                alert("llene todos los campos necesarios");
            }

        }

        /*funcion para limpiar los campos de Datos de entrada*/
        function limpiar(){
            $("#txtNumeroPersona").val("1");
            $('#txttiposervicio > option[value="0"]').attr('selected', 'selected');
            //TODO: hay que investigar como seleccionar el primer option del select
        }

        //funcion que permite eliminar una fila
        function eliminar(index){
            $("#trfila"+index).remove();
        }
    </script>

    <!--Eventos para el modal -->
     <script type="text/javascript">
        var NuevoEvento;
        //evento cuando clickeamos el boton nueva cita
        $('#btnNuevaCita').click(function(){
            RecolectarDatosGUI();
            EnviarInformacion('agregar', NuevoEvento);
        });
        //evento cuando clickeamos el boton modificar
        $('#btnModificar').click(function(){
            RecolectarDatosGUI();
            EnviarInformacion('modificar', NuevoEvento);
        });
        //evento cuando clickeamos el boton eliminar
        $('#btnEliminar').click(function(){
            RecolectarDatosGUI();
            EnviarInformacion('eliminar', NuevoEvento);
        });

        function crearDetalle($codcita){
            $.ajax({
                type:"GET",
                url:"{{route('cita.detalle')}}",
                data:"codcita="+$codcita,
                success:function(r){
                    if(r){
                        $('#table_detalle').append(r);
                    }
                }
            });
        }

        function RecolectarDatosGUI(){
            //tenemos dos 2 variables, la primera sera el array donde estaran nuestros datos y la segunda es el objeto taba
            var DATA = new Array();
            var TABLA = $('#table_detalle tbody > tr');
            var $i = 0;

            //recorremos cada tr y por cada uno se ejecuta el siguiente comando
            TABLA.each(function(){
                var servicio = $(this).find("input[id*='inputservicio']").val();
                //declaramos un array para guardar estos datos
                //item = {};
                //item['codservicio'] = servicio;

                //DATA.push(item); 
                DATA[$i] = servicio;
                $i++; 
            });
            aInfo = JSON.stringify(DATA);

            NuevoEvento = {
                txtId:$('#txtId').val(),
                txtFecha:$('#txtFecha').val(),
                txtDetalle:$('#txtDetalle').val(),
                txtcodcliente:$('#txtcodcliente').val(),
                txtHora:$('#txtHora').val(),
                txtNumeroPersona:$('#txtNumeroPersona').val(),
                datos: DATA
            }
        }

        //funcion que permite limpiar el formulario del modal
        function limpiarModal(){
            $('#titulocita').html('AGREGAR NUEVA CITA');
            $('txtNumeroPersona').val('2');
            $('txtHora').val('00:00 ...');
            $('#txtDetalle').val('0');
            $i = 0;
            //borramos todas las filas de la tabla
            $('#table_detalle tbody > tr').each(function(){
                eliminar($i);
                $i++;
            });
         }



         function EnviarInformacion(accion, objEvento, modal){
            $.ajax({
                type:"GET",
                url:"{{route('cita.evento')}}?accion="+accion,
                data:objEvento,
                success:function(msg){
                    if(msg){
                        $('#calendar').fullCalendar('refetchEvents');
                        if(!modal){
                            $("#ModalEventos").modal('toggle');
                        }
                    }
                },
                error:function(){
                    alert('error al insertar una nueva cita');
                }
            });
         }
     </script>

    <script type="text/javascript">
        //esto permite llenar un select mietras seleccionamos un primer select
        $(document).ready(function(){
            recargarLista();
            $('#txttiposervici4o').change(function(){
                recargarLista();
            });
        });

        function recargarLista(){
            $.ajax({
                type:"POST",
                url:"{{route('cita.llenar')}}",
                data:"codtiposervicio="+$('#txttiposervicio').val(),
                success:function(r){
                    if(r){
                        $('#selectServicio').html(r);
                    }
                }
            });
        }
    </script>
@endpush
