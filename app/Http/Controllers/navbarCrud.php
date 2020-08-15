<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class navbarCrud extends Controller
{
    /* Boton caballeros */
    public function caballerosIndex(){
        $caballeros = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('categorias.categoria', '=', 'Caballeros')
            ->orWhere('subcategorias.nombre', '=', 'Caballeros')
            ->paginate(16);

            return view('users.navbar.caballeros.index',compact('caballeros'));
    }


    /* Boton Anillos */
    public function anillosIndex(){
        $anillos = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('categorias.categoria', '=', 'Anillos')
            ->orWhere('subcategorias.nombre', '=', 'Anillos')
            ->paginate(16);

            return view('users.navbar.anillos.index',compact('anillos'));
    }


    /* Boton Gargantillas */
    public function gargantillasIndex(){
        $gargantillas = DB::table('productos')
        ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
        ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
        ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
        ->where('categorias.categoria', '=', 'Gargantillas')
        ->orWhere('subcategorias.nombre', '=', 'Gargantillas')
        ->paginate(16);

        return view('users.navbar.gargantillas.index',compact('gargantillas'));
    }


    /* Boton Diamantes */
    public function diamantesIndex(){
        $diamantes = DB::table('productos')
        ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
        ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
        ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
        ->where('categorias.categoria', '=', 'Diamantes')
        ->orWhere('subcategorias.nombre', '=', 'Diamantes')
        ->paginate(16);

        return view('users.navbar.diamantes.index',compact('diamantes'));
    }

    /* Boton Medallas */
    public function medallasIndex($medallas){
        $medallas = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('subcategorias.nombre', '=', $medallas)
            ->where('categorias.categoria', '=', 'Medallas')
            ->orWhere('subcategorias.nombre', '=', 'Medallas')
            ->paginate(16);

        return view('users.navbar.medallas.index',compact('medallas'));
    }


    /* Boton Pulceras */
    public function pulcerasIndex($pulceras){
        $pulceras = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('kilataje', '=', $pulceras)
            ->where('categorias.categoria', '=', 'Pulceras')
            ->orWhere('subcategorias.nombre', '=', 'Pulceras')
            ->paginate(16);

        return view('users.navbar.pulceras.index',compact('pulceras'));
    }


    /* Boton Cadenas */
    public function cadenasIndex($cadenas){
        $cadenas = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('kilataje', '=', $cadenas)
            ->where('categorias.categoria', '=', 'Cadenas')
            ->orWhere('subcategorias.nombre', '=', 'Cadenas')
            ->paginate(16);

        return view('users.navbar.cadenas.index',compact('cadenas'));

    }


    /* Boton Argollas */
    public function argollasIndex($kilataje){
        $kilates = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('kilataje', '=', $kilataje)
            ->where('categorias.categoria', '=', 'Argollas')
            ->orWhere('subcategorias.nombre', '=', 'Argollas')
            ->paginate(16);

        return view('users.navbar.argollas.index',compact('kilates'));
        /* dd($kilate); */
    }


}
