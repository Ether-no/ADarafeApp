<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use App\tag;
use App\tagproducto;
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
}