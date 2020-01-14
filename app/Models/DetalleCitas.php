<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class DetalleCitas extends Model 
{
   	protected $primaryKey='iddetallecita';

   	protected $table='tbldetallescitas';

    protected $fillable = ['iddetallecita', 'codservicio', 'codcita'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    /*public function clientes(){
    	return $this->belongsTo('\App\Models\Cliente','clientes','cod_tipo_cliente');
    }*/
}
