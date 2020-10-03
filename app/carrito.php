<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    protected $table = 'carritos';
    protected $primaryKey = 'idcar';
    protected $fillable = ['idcar','activo','comprado','grabado','cantidad','foto','descripcion','preciounitario','total','id','id_productos'];
    protected $dates = ['created_at', 'updated_at'];

    public function uscar(){
        return $this->belongsTo('App\User');
    }

}