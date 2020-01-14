<?php

namespace App\Http\Controllers;
use App\Models\HorarioEmpleado;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class HorarioEmpleadoController extends Controller
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
        $varhorarioempleado=HorarioEmpleado::all();
        $varempleado=Empleado::all();
        return view('horarioempleado.create')->with('varhorarioempleado',$varhorarioempleado)->with('varempleado',$varempleado);
    }
    public function create(){
       $varhorarioempleado=HorarioEmpleado::all();
        $varempleado=Empleado::all();
        return view('horarioempleado.create')->with('varhorarioempleado',$varhorarioempleado)->with('varempleado',$varempleado);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varhorarioempleado=new HorarioEmpleado;
        //$varcomida->id_comida=$request->input('idcomida');
        $varhorarioempleado->horaentrada=$request->input('horaentrada');
        $varhorarioempleado->horasalida=$request->input('horasalida');
        $varhorarioempleado->dias=$request->input('dias');
        $varhorarioempleado->codempleado=$request->input('codempleado');
        $varhorarioempleado->save();

        return redirect()->route('horarioempleado.create');
    }

    public function edit($idhorarioempleado){
        //$varcomida=Comida::find($id_comida);
        $vartitulo=Titulo::where('idhorarioempleado',$idhorarioempleado)->first();
        $varempleado=Empleado::all();
        return view('horarioempleado.create')->with('varhorarioempleado',$varhorarioempleado)->with('varempleado',$varempleado);

    public function update(Request $request,$idhorarioempleado){
        
    
::find($idhorarioempleado);
        $datos=array();
        $datos['horaentrada']=$request->input('horaentrada');
        $datos['horasalida']=$request->input('horasalida');
        $datos['dias']=$request->input('dias');
        $datos['codempleado']=$request->input('codempleado');
        $varhorarioempleado->update($datos);
        return redirect()->route('horarioempleado.create');
    }

    public function delete($idhorarioempleado){
        $varhorarioempleado=horarioempleado::find($idhorarioempleado);
        $varhorarioempleado->delete();
        return redirect()->route('horarioempleado.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $horarioempleado = horarioempleado::all();
        $horarioempleado->horarioempleado="Reporte de horarioempleado  en la BD";
        $horarioempleado->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesHorarioEmpleado',compact('horarioempleado'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
