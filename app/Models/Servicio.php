<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Servicio extends Model 
{
   	protected $primaryKey='idservicio';

   	protected $table='tblservicios';

    protected $fillable = ['idservicio', 'nombreservicio', 'descripcionservicio', 'codtiposervicio'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function detalledervicio(){
    	return $this->belongto('\App\Models\DetalleServicio', 'tbldetalledervicio','iddetalleservicio');
    }
    
    public function empleadoservicios(){
    	return $this->belongto('\App\Models\EmpeladoServicio', 'tblempleadoservicio','idempleadoservicio');
    }

    
}