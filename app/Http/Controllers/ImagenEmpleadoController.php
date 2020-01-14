<?php

namespace App\Http\Controllers;
use App\Models\Titulo;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class ImagenEmpleadoController extends Controller
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
        $varimagenempleado=Titulo::all();
        $varempleado=Empleado::all();
        return view('imagenempleado.create')->with('varimagen',$varimagenempleado)->with('varcodempleado',$varempleado);
    }
    public function create(){
        $varimagenempleado=Titulo::all();
        $varempleado=Empleado::all();
        $varimagenempleado=Titulo::all();
        return view('imagenempleado.create')->with('varimagen',$varimagenempleado)->with('varcodempleado',$varempleado);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varimagenempleado=new Titulo;
        //$varcomida->id_comida=$request->input('idcomida');
        $varimagenempleado->imagen=$request->input('imagen');
        $varimagenempleado->codempleado=$request->input('codempleado');
        $varimagenempleado->save();

        return redirect()->route('imagenempleado.create');
    }

    public function edit($idimagenemepleado){
        //$varcomida=Comida::find($id_comida);
        $varimagenempleado=Titulo::where('idimagenemepleado',$idtitulo)->first();
        $varimagenempleado=Titulo::all();
        $varempleado=Empleado::all();
        $varimagenempleado=Titulo::all();
        return view('imagenempleado.edit')->with('varimagen',$varimagen)->with('varcodempleado',$varcodempleado)->with('vardescripcion',$vardescripcion);
    public function update(Request $request,$idimagenemepleado){
        $v}
arcomida=Comida    
::find($idimagenemepleado);
        $datos=array();
        $datos['imagen']=$request->input('imagen');
        $datos['codempleado']=$request->input('codempleado');
        $vartitulo->update($datos);
        return redirect()->route('imagenempleado.create');
    }

    public function delete($idimagenemepleado){
        $varimagenempleado=Comida::find($idimagenemepleado);
        $varimagenempleado->delete();
        return redirect()->route('imagenempleado.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $imagenempleado = Titulo::all();
        $imagenempleado->imagenempleado="Reporte de imagenempleado  en la BD";
        $imagenempleado->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesImagenEmpleado',compact('imagenempleado'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}varimagenempleado
