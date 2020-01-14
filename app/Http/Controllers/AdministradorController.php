<?php

namespace App\Http\Controllers;
use App\Models\Administrador;
use App\Models\Empleado;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\TipoServicio;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }

    public function delete($idservicio){
        $varservicio=Servicio::find($idservicio);
        $varservicio->delete();
        return redirect()->route('Administrador.tipo_servicio');
    }
    
    public function index(){
        $vartiposervicio=TipoServicio::all();
        $varservicio=Servicio::all();
        return view('Administrador.createservicio')->with('vartiposervicio',$vartiposervicio);
    }


    public function store(Request $request){
        $varservicio=new Servicio;
        $varservicio->nombreservicio=$request->input('nombreservicio');
        $varservicio->descripcionservicio=$request->input('descripcionservicio');
        $varservicio->codtiposervicio=$request->input('txttiposervicio');
        $varservicio->save();

        return redirect()->route('Administrador.tipo_servicio');
    }

    public function empleados(){
        $varempleado=Empleado::all();
        $prueba=Empleado::all()->last();
        return view('Administrador.empleados')
        ->with('varempleado',$varempleado);
    }

    public function clientes(){
        $varcliente=Cliente::all();
        $prueba=Cliente::all()->last();
        return view('Administrador.clientes')
        ->with('varcliente',$varcliente);
    }

    public function tipo_servicio(){
        $vartiposervicio=TipoServicio::all();
        $varservicio=Servicio::all();
        $prueba=TipoServicio::all()->last();
        return view('Administrador.tipo_servicio')->with('varservicio',$varservicio)->with('prueba',$prueba)->with('vartiposervicio',$vartiposervicio);
    }
    //metodo que permite iniciar la vista principal
    public function create(){
        $vartiposervicio=TipoServicio::all();
        $varservicio=Servicio::all();
        $prueba=Servicio::all()->last();
        return view('Administrador.create');
    }

    
}

