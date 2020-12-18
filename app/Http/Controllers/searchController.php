<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use App\tag;
use App\tagproducto;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class searchController extends Controller
{
    public function search(Request $request){
        $search = request()->input('busca');
        $producto = producto::where('producto','like',"%$search%")->paginate(5);
        $categoria =  categoria::where('categoria','like',"%$search%")->first();
        $productoprecio = producto::where('precio','like',"%$search%")->first();
        if($productoprecio){
            $producto =  producto::where('id_productos', "=" , $productoprecio->id_productos)->paginate(5);
        }
        $productodescripcion = producto::where('descripcion','like',"%$search%")->first();
        if($productodescripcion){
            $producto =  producto::where('id_productos', "=" , $productodescripcion->id_productos)->paginate(5);
        }
        if($categoria){
            $producto =  producto::where('id_cat', "=" , $categoria->id_cat)->paginate(5);
        }
        $subcategorias = subcategoria::where('nombre','like',"%$search%")->first();
        if($subcategorias){
            $producto =  producto::where('id_subcategoria', "=" , $subcategorias['id_subcategoria'])->paginate(5);
        }
        $tag =  tag::where('nombre','like', "%$search%")->first();
        $protag = tagproducto::where('id_tags', "=" , $tag['id_tags'])->first();
        if($protag){
            $producto =  producto::where('id_productos', "=" , $protag['id_productos'])->paginate(5);
        } 
        return view('users.search',compact('search','categoria','subcategorias','producto'));
    }


    public function searchProduct(Request $request){

        $rfc = $request->get('RFC');
        $kilate = $request->get('kilataje');
        //dd($search);
        $productos = producto::rfcs($rfc)->kilataje($kilate)->paginate(9);
        $contar = count($productos);
        //dd($productos);
        if ($contar === 0) {
            Alert::error('¡No se encontraron productos!', 'Intente de nuevo');
            return view('dashboard.productos.search', compact('productos'));
        } else {
            return view('dashboard.productos.search', compact('productos'));
        }
    }


}