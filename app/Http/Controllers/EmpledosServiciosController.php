<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Empleado;
use App\Models\EmpleadoServicio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class EmpleadosServiciosController extends Controller
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
        $varempeladoservicio=EmpleadoServicio::all();
        $varempleado=Empleado::all();
        $varservicio=Servicio::all();
        return view('empleadoservicio.create')->with('varempeladoservicio',$varempeladoservicio)->with('varempleado',$varempleado)->with('varservicio',$varservicio);
    }
    public function create(){
       $varempeladoservicio=EmpleadoServicio::all();
        $varempleado=Empleado::all();
        $varservicio=Servicio::all();
        return view('empleadoservicio.create')->with('varempeladoservicio',$varempeladoservicio)->with('varempleado',$varempleado)->with('varservicio',$varservicio);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varempeladoservicio=new EmpleadoServicio;
        //$varcomida->id_comida=$request->input('idcomida');
        $varempeladoservicio->codempleado=$request->input('codempleado');
        $varempeladoservicio->codservico=$request->input('codservico');
        $varempeladoservicio->valorservicio=$request->input('valorservicio');
        $varempeladoservicio->save();

        return redirect()->route('empleadoservicio.create');
    }

    public function edit($idempleadoservicio){
        //$varcomida=Comida::find($id_comida);
        $varempeladoservicio=EmpleadoServicio::where('idempleadoservicio',$idempleadoservicio)->first();
        $varempeladoservicio=EmpleadoServicio::all();
        $varempleado=Empleado::all();
        $varservicio=Servicio::all();
        return view('empleadoservicio.edit')->with('varempeladoservicio',$varempeladoservicio)->with('varcodempleado',$varcodempleado)->with('varservicio',$varservicio);
    public function update(Request $request,$idempleadoservicio){
        
    
::find($idempleadoservicio);
        $datos=array();
        $datos['codempleado']=$request->input('codempleado');
        $datos['codservico']=$request->input('codservico');
        $datos['varservicio']=$request->input('varservicio');
        $varempeladoservicio->update($datos);
        return redirect()->route('empleadoservicio.create');
    }

    public function delete($idempleadoservicio){
        $varempeladoservicio=EmpleadoServicio::find($idtitulo);
        $varempeladoservicio->delete();
        return redirect()->route('empleadoservicio.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $empleadoservicio = Titulo::all();
        $empleadoservicio->empleadoservicio="Reporte de empleadoservicio  en la BD";
        $empleadoservicio->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesEmpleadoServicio',compact('empleadoservicio'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
