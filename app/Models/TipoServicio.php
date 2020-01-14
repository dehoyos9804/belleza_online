<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TipoServicio extends Model 
{
   	protected $primaryKey='idtiposervicio';

   	protected $table='tbltiposervicio';

    protected $fillable = ['idtiposervicio', 'tiposervicio'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
    
}