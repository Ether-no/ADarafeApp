<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritosgrabado extends Model
{
    protected $table = 'carritograbados';
    protected $primaryKey = 'idcartgrabado';
    protected $fillable = ['idcartgrabado','grabado','numero','grabado2','numero2','id_productos','idcar'];
    protected $dates = ['created_at', 'updated_at'];

   
}
