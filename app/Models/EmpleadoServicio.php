<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class EmpleadoServicio extends Model 
{
   	protected $primaryKey='idempleadoservicio';

   	protected $table='tblempleadosservicios';

    protected $fillable = ['idempleadoservicio', 'codempleado', 'codservicio', 'valorservicio'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleado(){
    	return $this->belongsTo('\App\Models\Empleado', 'tblempleado','idempleado');
    }
    public function servicio(){
    	return $this->belongsTo('\App\Models\Servicio', 'tblservicio','idservicio');
    }
    
}
