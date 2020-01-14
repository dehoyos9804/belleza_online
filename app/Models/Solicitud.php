<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Solicitud extends Model 
{
   	protected $primaryKey='idsolicitud';

   	protected $table='tblsolicitudes';

    protected $fillable = ['idsolicitud', 'fechasolicitud', 'estado', 'codempelado' ];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleado(){
    	return $this->bebelongsToMany('\App\Models\Empleado', 'tblemepleado','idempleado');
    }

    
}
