<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tagproducto extends Model
{
    protected $table = 'tagproductos';
    protected $primaryKey = 'id_tagproductos';
    protected $fillable = ['id_tagproductos','id_tags','id_productos'];
    protected $dates = ['created_at', 'updated_at'];
}
