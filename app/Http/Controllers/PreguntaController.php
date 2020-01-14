<?php

namespace App\Http\Controllers;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class PreguntaController extends Controller
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
        $varpregunta=Pregunta::all();
        return view('Pregunta.create')->with('varpregunta',$varpregunta);
    }
    public function create(){
        $varpregunta=Pregunta::all();
        return view('Pregunta.create')->with('varpregunta',$varpregunta);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varpregunta=new Titulo;
        //$varcomida->id_comida=$request->input('idcomida');
        $varpregunta->pregunta=$request->input('pregunta');
        $varpregunta->save();

        return redirect()->route('pregunta.create');
    }

    public function edit($idpregunta){
        //$varcomida=Comida::find($id_comida);
        $varpregunta=Titulo::where('idpregunta',$idpregunta)->first();
        $varpregunta=Pregunta::all();
      
        return view('pregunta.edit')->with('varpregunta',$varpregunta);
    public function update(Request $request,$idpregunta){
          
::find($idpregunta);
        $datos=array();
        $datos['pregunta']=$request->input('pregunta');
        $vartitulo->update($datos);
        return redirect()->route('pregunta.create');
    }

    public function delete($idpregunta){
        $vartitulo=Comida::find($idtitulo);
        $vartitulo->delete();
        return redirect()->route('pregunta.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $pregunta = Pregunta::all();
        $pregunta->pregunta="Reporte de pregunta en la BD";
        $pregunta->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesPregunta',compact('pregunta'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
