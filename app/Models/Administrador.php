<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Administrador extends Model 
{
   	protected $primaryKey='idadmin';

   	protected $table='tbladministrador';

    protected $fillable = ['idadmin', 'nombres', 'apellidos', 'email', 'clave'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
    
}
