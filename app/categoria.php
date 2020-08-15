<?php

namespace App;
use App\producto;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_cat';
    protected $fillable = ['id_cat','categoria','slug'];
    protected $dates = ['created_at', 'updated_at'];

}
