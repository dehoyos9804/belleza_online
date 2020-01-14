<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Titulo extends Model 
{
   	protected $primaryKey='idtitulo';

   	protected $table='tbltitulos';

    protected $fillable = ['idtitulo', 'imagen', 'codempleado'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleado(){
    	return $this->hasMany('\App\Models\Empleado', 'tblempleado','idempleado');
    }

    
}
