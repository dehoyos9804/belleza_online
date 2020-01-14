<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class ServicioController extends Controller
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
        $varservicio=Servicio::all();
        return view('servicio.create')->with('varservicio',$varservicio);
    }
    public function create(){
        $varpregunta=Servicio::all();
        return view('servicio.create')->with('varpregunta',$varpregunta);
    }
varservicio
    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $varservicio=new Servicio;
        //$varcomida->id_comida=$request->input('idcomida');
        $varservicio->nombreservicio=$request->input('nombreservicio');
        $varservicio->descripcionservicio=$request->input('descripcionservicio');
        $varservicio->save();

        return redirect()->route('servicio.create');
    }

    public function edit($idservicio){
        //$varcomida=Comida::find($id_comida);
        $varservicio=Servicio::where('idservicio',$idservicio)->first();
        $varservicio=Servicio::all();
      
        return view('servicio.edit')->with('varservicio',$varservicio);
    public function update(Request $request,$idservicio){
          
::find($idservicio);
        $datos=array();
        $datos['nombreservicio']=$request->input('nombreservicio');
        $datos['descripcionservicio']=$request->input('descripcionservicio');
        $varservicio->update($datos);
        return redirect()->route('servicio.create');
    }

    public function delete($idservicio){
        $varservicio=Servicio::find($idservicio);
        $varservicio->delete();
        return redirect()->route('servicioservicio.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $servicio = Pregunta::all();
        $servicio->servicio="Reporte de servicio en la BD";
        $servicio->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesServico',compact('servicio'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}
