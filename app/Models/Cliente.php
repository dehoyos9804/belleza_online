<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Cliente extends Model 
{
   	protected $primaryKey='idcliente';

   	protected $table='tblclientes';

    protected $fillable = ['idcliente', 'nombres', 'apellidos', 'telefonos', 'direccion', 'clave', 'imagen', 'fechanacimiento', 'email','api_token'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    /*public function clientes(){
    	return $this->belongsTo('\App\Models\Cliente','clientes','cod_tipo_cliente');
    }*/
}
