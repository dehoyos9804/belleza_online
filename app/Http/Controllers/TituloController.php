<?php

namespace App\Http\Controllers;
use App\Models\Titulo;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class TituloController extends Controller
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
        $vartitulo=Titulo::all();
        $varempleado=Empleado::all();
        $vartitulo=Titulo::all();
        return view('titulo.create')->with('vartitulo',$vartitulo)->with('varempleado',$varempleado)->with('vartitulo',$vartitulo);
    }
    public function create(){
       $vartitulo=Titulo::all();
        $varempleado=Empleado::all();
        $vartitulo=Titulo::all();
        return view('titulo.create')->with('vartitulo',$vartitulo)->with('varempleado',$varempleado)->with('vartitulo',$vartitulo);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $vartitulo=new Titulo;
        //$varcomida->id_comida=$request->input('idcomida');
        $vartitulo->imagen=$request->input('imagen');
        $vartitulo->codempleado=$request->input('codempleado');
        $vartitulo->descripcion=$request->input('descripcion');
        $vartitulo->save();

        return redirect()->route('titulo.create');
    }

    public function edit($idtitulo){
        //$varcomida=Comida::find($id_comida);
        $vartitulo=Titulo::where('idtitulo',$idtitulo)->first();
        $vartitulo=Titulo::all();
        $varempleado=Empleado::all();
        $vartitulo=Titulo::all();
        return view('titulo.edit')->with('varimagen',$varimagen)->with('varcodempleado',$varcodempleado)->with('vardescripcion',$vardescripcion);
    public function update(Request $request,$idtitulo){
        
    
::find($idtitulo);
        $datos=array();
        $datos['imagen']=$request->input('imagen');
        $datos['codempleado']=$request->input('codempleado');
        $datos['descripcion']=$request->input('descripcion');
        $vartitulo->update($datos);
        return redirect()->route('titulo.create');
    }

    public function delete($idtitulo){
        $vartitulo=Titulo::find($idtitulo);
        $vartitulo->delete();
        return redirect()->route('titulo.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $titulo = Titulo::all();
        $titulo->titulo="Reporte de titulo  en la BD";
        $titulo->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesTitulo',compact('titulo'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
