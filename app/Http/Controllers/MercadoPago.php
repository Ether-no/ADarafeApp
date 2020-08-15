<?php
namespace App\Http\Controllers;
include(app_path().'/dskmercado/pruebas.php'); 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\categoria;
use App\subcategoria;
use App\producto;
use Exception;

class MercadoPago extends Controller
{
    public function recibeProductos(){
       
        // DB::table('car')->where('id','=', )->get();
        return view('users.pruebacheck');
    }
}
