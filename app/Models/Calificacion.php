<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Calificacion extends Model 
{
   	protected $primaryKey='idcalificacion';

   	protected $table='tblcalificacion';

    protected $fillable = ['idcalificacion', 'codcita', 'calificacion', 'codpregunta' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function cita(){
    	return $this->belongsTo('\App\Models\Cita','tblcita','idcita');
    }
    
    public function pregunta(){
    	return $this->belongsTo('\App\Models\Pregunta','tblpregunta','idpregunta');
    }
}