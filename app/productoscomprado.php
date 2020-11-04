<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productoscomprado extends Model
{
   protected $table = 'productoscomprados';
   protected $primaryKey = 'id_compra';
   protected $fillable = ['id_compra','cantidad','id','activo','enviado'];
   protected $dates = ['created_at', 'updated_at'];
}
