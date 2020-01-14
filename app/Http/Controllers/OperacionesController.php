<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Solicitud;
use App\Models\Administrador;
use Illuminate\Http\Request;

class OperacionesController extends Controller
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
        $error = "";
        $varcliente = Cliente::all();
        return view('Operaciones.create')
        ->with('varcliente',$varcliente)
        ->with('error', $error);
    }

    public function create(){
        return view('Operaciones.informacion');
    }

    public function store(){
        return view('Operaciones.elegir');
    }

    //método que permite realizar la logica del login
    public function login(Request $req){

        //consulta del usuario login
        $userCliente = Cliente::query()->where('email', $req->input('usuario'))->first();
        $userEmpleado = Empleado::query()->where('email', $req->input('usuario'))->first();
        $userAdministrador = Administrador::query()->where('email', $req->input('usuario'))->first();

        if($userCliente!=null){
            //verificamos la contraseña
            if ($userCliente->clave == md5($req->input('clave')) ) {
                //retornamos el api_token, para futuras peticiones
                return redirect()->route('cliente.create', ['id'=>$userCliente->idcliente]);

            }else{
                $error = "Clave Incorrecta";
                return view('Operaciones.create')->with('error', $error);
            }
        }else{
            if($userEmpleado!=null){
                //verifico el estado del empleado
                $varsolicitud = Solicitud::where('codempleado', $userEmpleado->idempleado)->first();
                $estado = $varsolicitud->estado;
                switch ($estado) {
                    case 0:
                            $error = "Su Usuario se encuentra inhabilitado, por no cumplir los requisitos minimos";
                            return view('Operaciones.create')->with('error', $error);
                        break;
                    case 1:
                            if($userEmpleado->clave == md5($req->input('clave'))){
                                return redirect()->route('empleado.registro_horario', ['id'=>$userEmpleado->idempleado]);
                            }else{
                                $error = "Clave Incorrecta";
                                return view('Operaciones.create')->with('error', $error);
                            }
                        break;  
                    case 2:
                            $error = "Actualmente se esta verificando su solicitud, le enviaremos un correo electronico cuando su usuario se encuentre habilitado";
                            return view('Operaciones.create')->with('error', $error);
                        break;      
                    
                    default:
                        return json_encode("estado incorrecto");
                        break;
                }
            }else{
                if($userAdministrador!=null){
                    //verifico la contraseña
                    if($userAdministrador->clave == md5($req->input('clave'))){

                        return redirect()->route('Administrador.create');
                        
                    }else{
                        $error = "Clave Incorrecta";
                        return view('Operaciones.create')->with('error', $error);
                    }
                }else{
                    $error = "El Usuario No Existe, favor registrarse";
                    return view('Operaciones.create')->with('error', $error);
                }
            }
        }
    }
    
}
