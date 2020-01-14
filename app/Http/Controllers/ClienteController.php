<?php

namespace App\Http\Controllers;
 
use App\Models\Empleado;
use App\Models\Cliente;
use App\Models\Citas;
use App\Models\HorarioEmpleado;
use App\Models\ImagenEmpleado;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth',['only' => [
            'index',
            'create',
            'store',
            'listEmpleado',
            'galeriaEmpleado'
        ]]);*/
    }

    //metodo que permite iniciar la vista principal
    public function index($id){
        //$varcomida=Comida::all();
        $varcliente = Cliente::where('idcliente',$id)->first();

        return view('clientes.create')->with('varcliente',$varcliente);//->with('varcomida',$varcomida);
    }

    public function create(){
        return view('clientes.registro');
    }

    public function store(Request $request){

        $varcliente = new Cliente;

        $nombreimagen = $_FILES['elegir']['name'];
        $ruta = $_FILES['elegir']['tmp_name'];
        $destino="C:/xampp/htdocs/proyecto_ict/public/admin-lte/images/imgCliente/".$request->input('numerocedula').$nombreimagen;
        $ruta_final='http://localhost:8000/admin-lte/images/imgCliente/'.$request->input('numerocedula').$nombreimagen;
        //verifico que mi imagen no esta vacia
        if(copy($ruta,$destino)){
            //$varcomida->id_comida=$request->input('idcomida');
            $varcliente->idcliente=$request->input('numerocedula');
            $varcliente->nombres=$request->input('nombres');
            $varcliente->apellidos=$request->input('apellidos');
            $varcliente->telefonos=$request->input('telefono');
            $varcliente->direccion=$request->input('direccion');
            $varcliente->clave = md5($request->input('clave'));
            $varcliente->imagen=$ruta_final;
            $varcliente->fechanacimiento=$request->input('fechanacimiento');
            $varcliente->email=$request->input('email');
        
        
            $varcliente->save(); 

            return redirect()->route('cliente.registro');
        }
        
    }


    public function listEmpleado($id){
         $varcliente = Cliente::where('idcliente', $id)->first();
         $varempleado = Empleado::all();
         $i = 1;
        return view('clientes.lista_profesionales')
                    ->with(['varcliente'=>$varcliente, 
                        'varempleado'=>$varempleado, 
                        'i'=>$i]);
    }

    public function galeriaEmpleado($id, $idempleado){
        $varidempleado = Empleado::where('idempleado',$idempleado)->first();
        $varimagenempleado = ImagenEmpleado::where('codempleado', $idempleado)->get();

        $varcliente = Cliente::where('idcliente', $id)->first();
        return view('clientes.galeria_profesionales')
                ->with(['varcliente'=>$varcliente,
                        'varidempleado'=>$varidempleado,
                        'varimagenempleado'=>$varimagenempleado]);
    }

    public function listacita($id){
        $varcliente = Cliente::where('idcliente', $id)->first();
        $varcita = Citas::where('codcliente', $id)->get();
        $varempleado = Empleado::all();
        $varhorarioempleado = HorarioEmpleado::all();

        return view('clientes.listacita')
                ->with(['varcliente'=>$varcliente, 
                        'varcita'=>$varcita,
                        'varempleado'=>$varempleado,
                        'varhorarioempleado'=>$varhorarioempleado]);
    }


    public function logout(Request $req){
        Cliente::where('api_token', $req->input('api_token'))->update(['api_token'=>null]);
        return response()->json(['status' => 'success']);
    }
}
