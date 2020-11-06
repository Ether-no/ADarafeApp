<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descuento extends Model
{
    protected $primaryKey = 'id_descuentos';
    protected $fillable=['id_descuentos','porcentaje','id_subcategoria'];
}
