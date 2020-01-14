<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Pregunta;
use App\Models\Calificacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;


class CalificacionController extends Controller
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
        $varcita=Cita::all();
        $varcalificacion=Calificacion::all();
        $varpregunta=Pregunta::all();
        return view('calificacion.create')->with('varcita',$varcita)->with('varcalificacion',$varcalificacion)->with('varpregunta',$varpregunta);
    }
    public function create(){
       $varcita=Cita::all();
        $varcalificacion=Calificacion::all();
        $varpregunta=Pregunta::all();
        return view('calificacion.create')->with('varcita',$varcita)->with('varcalificacion',$varcalificacion)->with('varpregunta',$varpregunta);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varcalificacion=new Cliente;
        $varcalificacion->idcalificacion=$request->input('idcalificacion');
        $varcalificacion->codcita=$request->input('codcita');
        $varcalificacion->calidficacion=$request->input('calidficacion');
        $varcalificacion->codpregunta=$request->input('codpregunta');
        $varcalificacion->save();

        return redirect()->route('calificacion.create');
    }

    public function edit($idcalificacion){
        //$varcomida=Comida::find($id_comida);
        $varcalificacion=Calificacion::where('idcalificacion',$idcalificacion)->first();
        $varcita=Cita::all();
        $varcalificacion=Calificacion::all();
        $varpregunta=Pregunta::all();
       return view('calificacion.edit')->with('varcita',$varcita)->with('varcalificacion',$varcalificacion)->with('varpregunta',$varpregunta);
    }
    }

    public function update(Request $request,$idcalificacion){
        $varcalificacion=Calificacion::find($idcalificacion);
        $datos=array();
        $datos['codcita']=$request->input('codcita');
        $datos['calificacion']=$request->input('calificacion');
        $datos['codpregunta']=$request->input('codpregunta');
        $varcalificacion->update($datos);
        return redirect()->route('calificacion.create');
    }

    public function delete($idcalificacion){
        $varcalificacion=Calificacion::find($idcalificacion);
        $varcalificacion->delete();
        return redirect()->route('calificacion.create');
    }
 
 public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $calificacion = Calificacion::all();
        $calificacion->titulo="Reporte de Calificacion en la BD";
        $calificacion->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReporteCalificacion',compact('calificacion'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }

    //
}
