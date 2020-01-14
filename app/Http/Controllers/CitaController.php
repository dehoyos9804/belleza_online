<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DetalleCitas;
use App\Models\TipoServicio;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Citas;
use App\Models\Empleado;
use App\Models\ImagenEmpleado;

class CitaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($id, $idempleado){
        //$varcomida=Comida::all();
        $vartiposervicio = TipoServicio::all();
        $varcliente = Cliente::where('idcliente',$id)->first();
        $varempleado = Empleado::where('idempleado',$idempleado)->first();
        $vargaleria = ImagenEmpleado::where('codempleado', $idempleado)->get();

        return view('citas.lista_cita')
            ->with(['vartiposervicio'=>$vartiposervicio,
                    'varcliente'=>$varcliente,
                    'varempleado'=>$varempleado,
                    'vargaleria'=>$vargaleria]);
    }

    public function llenarDatos(Request $req){
        $varservicio = Servicio::where('codtiposervicio', $req->input('codtiposervicio'))->get();

        $cadena = "<span class='input-group-addon add-on'><span class='fa fa-money'></span></span>
                    <select class='form-control select' id='txtservicio' name='txtservicio' data-live-search='true'>
                    <option value='0' selected>Seleccionar</option>";

        foreach ($varservicio as $key) {
            $cadena = $cadena."<option value='".$key->idservicio."'> ".$key->nombreservicio."</option>";
        }

        return $cadena."</select>";
    }

    public function eventos(Request $request){
        $accion = $request->input('accion');
        $varcliente = Cliente::where('idcliente', $request->input('txtcodcliente'))->first();
        //evaluamos si se mando una accion o no
        $accion = ($accion!="" ? $accion : "leer");

        //preparo un array de colores 
        $arrayColores = array('#CD5C5C','#800080','#FFA07A','#FF69B4','#C71585', '#FF6347', '#DA70D6', '#9370DB', '#32CD32', '#2E8B57',
                              '#20B2AA','#008B8B', '#48D1CC', '#1E90FF', '#008080','#FF4500','#FF1493','#FFA07A', '#FFD700', '#2E8B57');
        //variable que almacena un numero aleatoria entre 0 y 20
        $i = rand(0, 20);

        switch ($accion) {
            case 'agregar':
                    $varcitas = new Citas;
                    $varcitas->idcita = $request->input('txt');
                    $varcitas->fechaSolicitud = $request->input('txtFecha');
                    $varcitas->codhorarioempleado = 1;
                    $varcitas->codcliente = $request->input('txtcodcliente');
                    $varcitas->estado = 1;
                    $varcitas->horacita = $request->input('txtHora');
                    $varcitas->colorcita = $arrayColores[$i];
                    $varcitas->titulo = 'Cita Programada';
                    $varcitas->descripcion = 'Se programo la cita para el cliente '.$varcliente->nombres.$varcliente->apellidos;
                    $varcitas->numeropersonas = $request->input('txtNumeroPersona');
                  
                    $evaluar = $varcitas->save();
                    //evaluamos si se guardaron correctamente los datos de la cita para luego guardar los datos del detalle
                    if($evaluar){
                        $cod_servicio = $request->input('datos');
                        $codcita = Citas::all()->last();

                        $contador = 0;

                        while ($contador < count($cod_servicio)) {
                            $vardetallecita = new DetalleCitas;

                            $vardetallecita->iddetallecita = $request->input('iddetallecita');
                            $vardetallecita->codservicio = (int) $cod_servicio[$contador];
                            $vardetallecita->codcita = $codcita->idcita;//ultimo dato insertado en bd
                            $vardetallecita->save();

                            $contador++;
                        }
                    }
                    echo json_encode($evaluar);
                break;

            case 'modificar':
                    $varcitas = Citas::find($request->input('txtId'));
                    $datos = array();
                    $datos['fechaSolicitud'] = $request->input('txtFecha');
                    $datos['estado'] = 0;
                    $datos['horacita'] = $request->input('txtHora');
                    $respuesta = $varcitas->update($datos);

                    //modificar el detalle
                    if ($request->input('txtDetalle') == '1') {
                        //eliminamos los detalles @esto no se deberia hacer, sin embargo por falta de tiempo se hace asi
                        $detalle = DetalleCitas::where('codcita', $request->input('txtId'))->get();
                        foreach ($detalle as $key) {
                            $auxiliar = DetalleCitas::find($key->iddetallecita);
                            $auxiliar->delete();
                        }

                        //insertamos los nuevos detalles
                        $cod_servicio = $request->input('datos');
                        $contador = 0;

                        while ($contador < count($cod_servicio)) {
                            $vardetallecita = new DetalleCitas;
                            $vardetallecita->iddetallecita = $request->input('iddetallecita');//valor nulo
                            $vardetallecita->codservicio = (int) $cod_servicio[$contador];
                            $vardetallecita->codcita = $request->input('txtId');//ultimo dato insertado en bd
                            $vardetallecita->save();

                            $contador++;
                        }
                    }

                    echo json_encode($respuesta);
                break;    

            case 'eliminar':
                    $varCita = Citas::find($request->input('txtId'));
                    $varCita->delete();

                    echo json_encode($varCita);
                break;    
            
            default:
                //seleccionar las citas del cliente
                //TODO: por ahora los obtenemos todos
                $cita = Citas::all();
                $i = 0;

                $array = array();

                foreach ($cita as $key) {
                    $array[$i] = array(
                        "id"=>$key->idcita,
                        "title"=>$key->titulo,
                        "descripcion"=>$key->descripcion,
                        "start"=>$key->fechaSolicitud." ".$key->horacita,
                        "color"=>$key->colorcita,
                        "textColor"=>"#ffffff"
                    );

                    $i++;
                }

                echo json_encode($array);
                break;
        }

    }

    //metodo que permite traer los detalles de citas mediante el codigo de la cita
    public function detallecita(Request $request){
        $vardetalle = DetalleCitas::where('codcita', $request->input('codcita'))->get();
        $varservicio = Servicio::all();
        $vartiposervicio = TipoServicio::all();

        $contador = 0;
        $fila = "";

        for ($i=0; $i < count($vardetalle); $i++) { 

            for ($k=0; $k < count($varservicio); $k++) { 

                if($varservicio[$k]->idservicio == $vardetalle[$i]->codservicio){
                    for ($m=0; $m < count($vartiposervicio); $m++) { 

                        if($vartiposervicio[$m]->idtiposervicio == $varservicio[$k]->codtiposervicio){
                            $fila = $fila.'<tr id="trfila'.$contador.'">'.
                                '<td class="text-center">'.
                                    '<input type="hidden" name="tservicio" id="tservicio[]" value="'.$vartiposervicio[$m]->idtiposervicio.'" >'.$vartiposervicio[$m]->tiposervicio.
                                '</td>'.
                                '<td class="text-center">'.
                                    '<input type="hidden" name="inputservicio[]" id="inputservicio[]" value="'.$varservicio[$k]->idservicio.'" >'. $varservicio[$k]->nombreservicio.
                                '</td>'.
                                '<td class="text-center">'.
                                    '<button type="button" class="btn btn-danger btn-rounded btn-sm" onClick="eliminar('.$contador.');" >'.
                                    '<span class="fa fa-times"></span>'.
                                '</td>'.
                            '</tr>';
                        }
                    }
                }

            }

            $contador++;

        }

        return $fila;
    }

}
