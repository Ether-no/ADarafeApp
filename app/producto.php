<?php

namespace App;
use App\categoria;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Conner\Tagging\Taggable;

class producto extends Model
{
    use Taggable;
	protected $primaryKey = 'id_productos';
    protected $fillable=['id_productos','producto','descripcion','kilataje','agrandar','RFC','destacado','grabado','fotograbado','Foto','fotovista1','fotovista2','precio','peso','material','id_cat','numerominimo','numeromaximo','id_subcategoria'];

    // public function selectcategoria(){
    // return $this>belongsTo('App\categoria','id_cat');
    // }
    // public function categoria(){
    //     return $this->hasOne(categoria::class);
    // }

    public function scopeMightAlsoLike($query){
        return $query->inRandomOrder()->take(4);
    }

    /* Scope Search panel admin */
    public function scopeRfcs($query, $rfc){
        if($rfc){
            return $query->where('RFC', 'like', "%$rfc%");
        }
    }

    public function scopeKilataje($query, $kilatajes){
        if($kilatajes){
            return $query->where('kilataje', 'like', "%$kilatajes%");
        }
    }

/*     public function scopeSearch($query, $kilataje, $product){
        if( ($kilataje) && ($product) ){
            return $query->where($kilataje, 'like', "%$product%");
        }
    } */

}
