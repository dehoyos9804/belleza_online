<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Solicitud;
use App\Models\Titulo;
use App\Models\Servicio;
use App\Models\HorarioEmpleado;
use App\Models\EmpleadoServicio;
use App\Models\ImagenEmpleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
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

    public function index(){
        $varempleado=Empleado::all();
        return view('empleados.lista_empleado') ->with('varempleado',$varempleado);
    }

    public function create($id){
        $varempleado=Empleado::where('idempleado',$id)->first();
        return view('empleados.create')
               ->with(['varempleado'=>$varempleado]);
    }

    public function guardar(){
        return view('empleados.registroempleado');
    }
    public function titulo($id){
        return view('empleados.titulo_empleado')->with('id', $id);
    }

    public function tituloStore(Request $request, $id){
        $vartitulo = new Titulo;
        $varempleado=Empleado::where('idempleado',$id)->first();

        $nombreimagen = $_FILES['file_elegir']['name'];
        $ruta = $_FILES['file_elegir']['tmp_name'];
        $destino="C:/xampp/htdocs/proyecto_ict/public/admin-lte/images/imgTituloEmpleado/".$id."_".$nombreimagen;
        $ruta_final='http://localhost:8000/admin-lte/images/imgTituloEmpleado/'.$id."_".$nombreimagen;

        if(copy($ruta,$destino)){
            $vartitulo->idtitulo = $request->input('idtitulo');
            $vartitulo->imagen = $ruta_final;
            $vartitulo->codempleado = $id;
            $vartitulo->save();

            return redirect()->route('empleado.servicios',['id'=>$id]);
        }
    }

    public function guardargaleria(Request $request, $id){
        $varempleado=Empleado::where('idempleado',$id)->first();
        $nombreimagen = $_FILES['file-simple']['name'];
        $ruta = $_FILES['file-simple']['tmp_name'];
        $destino="C:/xampp/htdocs/proyecto_ict/public/admin-lte/images/imgGaleriaEmpleado/".$id."_".$nombreimagen;
        $ruta_final='http://localhost:8000/admin-lte/images/imgGaleriaEmpleado/'.$id."_".$nombreimagen;

        if(copy($ruta,$destino)){
            $varimagenempleado = new ImagenEmpleado;

            $varempleado->idimagenempleado = $request->input('idimagenempleado');
            $varimagenempleado->imagen = $ruta_final;
            $varimagenempleado->codempleado = $varempleado->idempleado;
            $varimagenempleado->save();
        }

        return redirect()->route('empleado.galeria',['id'=>$id]);

    }

    public function servicios($id){
        $servicio1 = Servicio::where('codtiposervicio', 1)->get();
        $servicio2 = Servicio::where('codtiposervicio', 2)->get();
        $servicio3 = Servicio::where('codtiposervicio', 3)->get();
        $servicio4 = Servicio::where('codtiposervicio', 4)->get();

        return view('empleados.servicios')
        ->with(['id'=>$id,
                'servicio1'=>$servicio1,
                'servicio2'=>$servicio2,
                'servicio3'=>$servicio3,
                'servicio4'=>$servicio4]);
    }

    public function store(Request $request){
        $varempleado = new Empleado;

        $nombreimagen = $_FILES['file_elegir']['name'];
        $ruta = $_FILES['file_elegir']['tmp_name'];
        $destino="C:/xampp/htdocs/proyecto_ict/public/admin-lte/images/imgEmpleado/".$request->input('numerocedula').$nombreimagen;
        $ruta_final='http://localhost:8000/admin-lte/images/imgEmpleado/'.$request->input('numerocedula').$nombreimagen;

        //verifico que mi imagen no esta vacia
        if(copy($ruta,$destino)){
            $varempleado->idempleado=$request->input('idempleado');
            $varempleado->numerocedula=$request->input('numerocedula');
            $varempleado->nombres=$request->input('nombres');
            $varempleado->apellidos=$request->input('apellidos');
            $varempleado->telefonos=$request->input('telefono');
            $varempleado->direccion=$request->input('direccion');
            // $varempleado->imagen=$request->input('imagen');
            $varempleado->email=$request->input('email');
            $varempleado->clave=md5($request->input('clave'));
            $varempleado->imagen= $ruta_final;
            $evaluar = $varempleado->save();

            if ($evaluar) {
                //creo una solicitud del usuario empleado
                //TODO: cambiar la fecha ficticia por la del sistema
                $emp = Empleado::where('numerocedula', $request->input('numerocedula'))->first();

                $varsolicitud = new Solicitud;
                $varsolicitud->fechasolicitud = "2019-06-02 00:00:00";
                $varsolicitud->estado = 1; //0 = rehazado, 1 = aprovado, 2 = en espera
                $varsolicitud->codempleado = $emp->idempleado;
                //guardo la solicitud
                if($varsolicitud->save()){
                    return redirect()->route('empleado.titulo',['id'=>$emp->idempleado]);
                }else{
                   return json_encode("no se pudo guardar la solicitud del empleado"); 
                }

            }else{
                return json_encode("no se pudo guardar el empleado");
            }
        }
    }

    public function registrarHorario(Request $request, $id){
        $varempleado = Empleado::where('idempleado', $id)->first();
        $mensaje1 = $request->input('mensaje1');
        $mensaje2 = $request->input('mensaje2');
        $varhorarioempleado = HorarioEmpleado::where('codempleado', $id)->get(); 

        //horas laborales
        $horario = HorarioEmpleado::where('codempleado', $id)->first();

        if($horario){
            $dias = HorarioEmpleado::where('codempleado', $id)->get();
            $arraydias = array();

            for($i = 0; $i < count($dias); $i++){
                $arraydias[$i] = (int) $dias[$i]->dias;
            }

            $varstart = $horario->horaentrada;
            $varend = $horario->horasalida;

            return view('empleados.registro_horario')
            ->with(['varempleado'=>$varempleado,
                    'mensaje1'=>$mensaje1,
                    'mensaje2'=>$mensaje2,
                    'varhorarioempleado'=>$varhorarioempleado,
                    'varstart'=>$varstart, 
                    'varend'=>$varend, 
                    'arraydias'=>$arraydias]);
        }else{
            $arraydias = array();

            $varstart ="";
            $varend = "";

            return view('empleados.registro_horario')
            ->with(['varempleado'=>$varempleado,
                    'mensaje1'=>$mensaje1,
                    'mensaje2'=>$mensaje2,
                    'varhorarioempleado'=>$varhorarioempleado,
                    'varstart'=>$varstart, 
                    'varend'=>$varend, 
                    'arraydias'=>$arraydias]);
        }
    }

    public function horarioStore(Request $request, $id){
        $varempleado = Empleado::where('idempleado', $id)->first();

        $semana = $request->input('semana');

        for($i = 0; $i < count($semana); $i++){

            $varhorarioempleado = new HorarioEmpleado;
            $varhorarioempleado->idhorarioempleado = $request->input('idhorarioempleado');
            $varhorarioempleado->horaentrada = $request->input('txtHoraEntrada');
            $varhorarioempleado->horasalida = $request->input('txtHoraSalida');
            $varhorarioempleado->dias = $semana[$i];
            $varhorarioempleado->codempleado = $id;

            $estado = $varhorarioempleado->save();

        }

        if($estado){
            $mensaje1 =  "Horario Guardado Exitosamente";
            $mensaje2 = "";
        }else{
            $mensaje1 = "";
            $mensaje2 =  "Error al Guardar el horario";
        }

        return redirect()->route('empleado.registro_horario',
         ['id'=>$id, 
         'varempleado'=>$varempleado, 
         'mensaje1'=>$mensaje1, 
         'mensaje2'=>$mensaje2]);
    }

    public function addgaleria($id){
        $varempleado = Empleado::where('idempleado', $id)->first();
        $varimagenempleado = ImagenEmpleado::where('codempleado', $id)->get();
        return view('empleados.add_galeria')->with(
            ['varempleado'=>$varempleado,
            'varimagenempleado'=>$varimagenempleado]);
    }

    public function serviciostore(Request $request, $id){
        $varempleado = Empleado::where('idempleado', $id)->first();

        $servicio1 = $request->input('serviciosu');
        $servicio2 = $request->input('serviciop');
        $servicio3 = $request->input('serviciom');
        $servicio4 = $request->input('servicioms');

        if($servicio1){
            for ($i=0; $i < count($servicio1); $i++) { 
                 $varempleadoservicio = new EmpleadoServicio;

                $varempleadoservicio->idempleadoservicio = $request->input('idempleadoservicio');
                $varempleadoservicio->codempleado = $varempleado->idempleado;
                $varempleadoservicio->codservicio = $servicio1[$i];
                $varempleadoservicio->valorservicio = $request->input('valorservicio');

                $varempleadoservicio->save();
            }
        }

        if($servicio2){
            for ($i=0; $i < count($servicio2); $i++) { 
                $varempleadoservicio = new EmpleadoServicio;

                $varempleadoservicio->idempleadoservicio = $request->input('idempleadoservicio');
                $varempleadoservicio->codempleado = $varempleado->idempleado;
                $varempleadoservicio->codservicio = $servicio2[$i];
                $varempleadoservicio->valorservicio = $request->input('valorservicio');

                $varempleadoservicio->save();
            }
        }

        if($servicio3){
            for ($i=0; $i < count($servicio3); $i++) { 
                $varempleadoservicio = new EmpleadoServicio;

                $varempleadoservicio->idempleadoservicio = $request->input('idempleadoservicio');
                $varempleadoservicio->codempleado = $varempleado->idempleado;
                $varempleadoservicio->codservicio = $servicio3[$i];
                $varempleadoservicio->valorservicio = $request->input('valorservicio');

                $varempleadoservicio->save();
            }
        }

        if($servicio4){
            for ($i=0; $i < count($servicio4); $i++) { 
                $varempleadoservicio = new EmpleadoServicio;

                $varempleadoservicio->idempleadoservicio = $request->input('idempleadoservicio');
                $varempleadoservicio->codempleado = $varempleado->idempleado;
                $varempleadoservicio->codservicio = $servicio4[$i];
                $varempleadoservicio->valorservicio = $request->input('valorservicio');

                $varempleadoservicio->save();
            }
        }

        return redirect()->route('iniciar_sesion.create');

    }
    public function horarioUpdate(Request $request, $id){
        $varempleado = Empleado::where('idempleado', $id)->first();

        $varhorarioempleado = HorarioEmpleado::where('codempleado', $id)->get();

        if($varhorarioempleado){
            //se eliminan las citas y se guardan las nuevas citas @esto no debe hacerce
            foreach ($varhorarioempleado as $horario) {
                $auxiliar = HorarioEmpleado::find($horario->idhorarioempleado);
                $auxiliar->delete();
            }

            //inserto los nuevos datos
            $semana = $request->input('idhorarioempleado');

            /*for($i = 0; $i < count($semana); $i++){

                $varhorarioempleado1 = new HorarioEmpleado;
                $varhorarioempleado1->idhorarioempleado = $request->input('idhorarioempleado');
                $varhorarioempleado1->horaentrada = $request->input('txtHoraEntrada');
                $varhorarioempleado1->horasalida = $request->input('txtHoraSalida');
                $varhorarioempleado1->dias = $semana[$i];
                $varhorarioempleado1->codempleado = $id;

                $estado = $varhorarioempleado1->save();

            }

            if($estado){
                $mensaje1 =  "Se Actualizaron Los Datos";
                $mensaje2 = "";
            }else{
                $mensaje1 = "";
                $mensaje2 =  "Error al Actualizar el horario";
            }*/

            return json_encode($semana);

        }
    }

}
