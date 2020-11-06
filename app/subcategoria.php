<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    protected $table = 'subcategorias';
    protected $primaryKey = 'id_subcategoria';
    protected $fillable = ['id_subcategoria','id_cat','nombre'];
    protected $dates = ['created_at', 'updated_at'];

}
