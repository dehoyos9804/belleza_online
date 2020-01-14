<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Cita;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class DetalleCitaController extends Controller
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
        $vardetallecita=DetalleCita::all();
        $varservicio=Servicio::all();
        $varcita=Cita::all();
        return view('detallecita.create')->with('vardetallecita',$vardetallecita)->with('varservicio',$varservicio)->with('varcita',$varcita);
    }
    public function create(){
         $vardetallecita=DetalleCita::all();
        $varservicio=Servicio::all();
        $varcita=Cita::all();
        return view('detallecita.create')->with('vardetallecita',$vardetallecita)->with('varservicio',$varservicio)->with('varcita',$varcita);
    }

    public function store(Request $request){
        /*$datos=$request->all();
        $tiposcomidas = new TipoComida;
        $tiposcomidas->nombre_tipo_comida=$request->input('nombretipocomida');
        $tiposcomidas->save();
        return redirect()->route('tipo_comida.create');*/

        $vardetallecita=new DetalleCita;
        //$varcomida->id_comida=$request->input('idcomida');
        $vardetallecita->codservicio=$request->input('codservicio');
        $vardetallecita->codcita=$request->input('codcita');
        $vardetallecita->descuento=$request->input('descuento');
        $vardetallecita->save();

        return redirect()->route('detallecita.create');
    }

    public function edit($iddetallecita){
        //$varcomida=Comida::find($id_comida);
        $vardetallecita=DetalleCita::where('iddetallecita',$iddetallecita)->first();
        $varservicio=Servicio::all();
        $varcita=Cita::all();
        $vardetallecita=DetalleCita::all();
        return view('detallecita.create')->with('vardetallecita',$vardetallecita)->with('varservicio',$varservicio)->with('varcita',$varcita);
    public function update(Request $request,$iddetallecita){
       
::find($iddetallecita);
        $datos=array();
        $datos['codservicio']=$request->input('codservicio');
        $datos['codcita']=$request->input('codcita');
        $datos['descuento']=$request->input('descuento');
        $vardetallecita->update($datos);
        return redirect()->route('detallecita.create');
    }

    public function delete($iddetallecita){
        $vardetallecita=detallecita::find($idtitulo);
        $vardetallecita->delete();
        return redirect()->route('detallecita.create');
    }
  public function reportes()
    {
        $date =Carbon::now('America/Bogota');
        $detallecita = Titulo::all();
        $detallecita->detallecita="Reporte de detallecita  en la BD";
        $detallecita->fecha=$date->format('d-m-Y H:i:s');
        return view('pdf.ReportesDetalleCita',compact('detallecita'));
       //$pdf = PDF::loadView('pdf.ReporteClientes',  compact('clientes'));
       //return $pdf->download('invoice.pdf');
        
    }
    //
}