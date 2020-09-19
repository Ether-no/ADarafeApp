<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritosgrabado extends Model
{
    protected $table = 'carritograbados';
    protected $primaryKey = 'idcartgrabado';
    protected $fillable = ['idcartgrabado','grabado','numero','id_productos','idcar'];
    protected $dates = ['created_at', 'updated_at'];

   
}
