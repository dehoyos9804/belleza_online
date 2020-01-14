<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ImagenEmpleado extends Model 
{
   	protected $primaryKey='idimagenempleado';

   	protected $table='tblimagenempleados';

    protected $fillable = ['idimagenempleado', 'imagen', 'codempleado'];

    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function empleado(){
    	return $this->hasMany('\App\Models\Empleado', 'tblempleado','idempleado');
    }

    
}