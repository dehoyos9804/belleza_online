<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class HorarioEmpleado extends Model 
{
   	protected $primaryKey='idhorarioempleado';

   	protected $table='tblhorariosempleados';

    protected $fillable = ['idhorarioempleado', 'horaentrada', 'horasalida', 'dias' , 'codempleado' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleado(){
    	return $this->belongsTo('\App\Models\Empleado', 'tblempleado','idempleado');
    }

    
}