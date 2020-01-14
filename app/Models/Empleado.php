<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Empleado extends Model 
{
   	protected $primaryKey='idempleado';

   	protected $table='tblempleados';

    protected $fillable = ['idempleado', 'numerocedula', 'nombres', 'apellidos', 'telefonos', 'direccion', 'email','clave', 'imagen'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    /*public function clientes(){
    	return $this->belongsTo('\App\Models\Cliente','clientes','cod_tipo_cliente');
    }*/
}
