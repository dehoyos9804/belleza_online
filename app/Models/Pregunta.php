<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Pregunta extends Model 
{
   	protected $primaryKey='idpregunta';

   	protected $table='tblpregunta';

    protected $fillable = ['idpregunta', 'pregunta'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function calificacion(){
    	return $this->hasMany('\App\Models\Calificacion', 'tblcalificacion','idcalificacion');
    }

    
}
