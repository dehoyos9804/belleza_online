<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Citas extends Model 
{
   	protected $primaryKey='idcita';

   	protected $table='tblcitas';

    protected $fillable = ['idcita', 'fechaSolicitud', 'codhorarioempleado', 'codcliente' , 'estado','horacita','colorcita', 'titulo','descripcion','numeropersonas'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function cliente(){
    	return $this->belongsTo('\App\Models\Cliente','tblclientes','idcliente');
    }
     public function horarioempelado(){
    	return $this->belongsTo('\App\Models\HorarioEmpleado','tblhorarioempleados','idhorarioempelado');
    }
}
