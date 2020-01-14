<?php

namespace App\Http\Controllers;
use App\Models\Solicitud;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class SolicitudController extends Controller
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
        $varsolicitud=Solicitud::all();
        $varempleado=Empleado::all();
        return view('solicitud.create')->with('varsolicitud',$varsolicitud)->with('varempleado',$varempleado);
    }
    public function create(){
       $varsolicitud=Solicitud::all();
        $varempleado=Empleado::all();
        return view('solicitud.create')->with('varsolicitud',$varsolicitud)->with('varempleado',$varempleado);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varsolicitud=new Solicitud;
        //$varcomida->id_comida=$request->input('idcomida');
        $varsolicitud->fechasolicitud=$request->input('fechasolicitud');
        $varsolicitud->estado=$request->input('estado');
        $varsolicitud->codempleado=$request->input('codempleado');
        $varsolicitud->fecharespuesta=$request->input('fecharespuesta');
        $varsolicitud->save();

        return redirect()->route('solicitud.create');
    }

    public function edit($idsolicitud){
        //$varcomida=Comida::find($id_comida);
        $varsolicitud=Solicitud::where('idsolicitud',$idsolicitud)->first();
        $varempleado=Empleado::all();
        return view('solicitud.create')->with('varsolicitud',$varsolicitud)->with('varempleado',$varempleado);
    public function update(Request $request,$idsolicitud){
        
    
::find($idsolicitud);
        $datos=array();
        $datos['fechasolicitud']=$request->input('fechasolicitud');
        $datos['estado']=$request->input('estado');
        $datos['codempleado']=$request->input('codempleado');
        $datos['fecharespuesta']=$request->input('fecharespuesta');
        $varsolicitud->update($datos);
        return redirect()->route('solicitud.create');
    }

    public function delete($idtitulo){
        $varsolicitud=Solicitud::find($idtitulo);
        $varsolicitud->delete();
        return redirect()->route('solicitud.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $solicitud = Titulo::all();
        $solicitud->solicitud="Reporte de solicitud  en la BD";
        $titulo->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesSolicitud',compact('solicitud'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
