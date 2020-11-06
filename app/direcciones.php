<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
	protected $primaryKey = 'id';
    protected $fillable=['user_id','nombre','apellidos','calle','colonia','municipio','ciudad','estado','cp','telefono'];

}
