<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Cookie;
class indexController extends Controller
{

    public function detail($id)
    {
        $detalles = producto::findOrFail($id);

        /* Mas detalles para que salgan los productos destacados */
        $destacados =  DB::table('productos')->where('destacado','=','1')->get();
        try {
            $destacados->random(10);
        }catch(Exception $exception){
            $destacados;
        }
            return view('users.detail', compact('detalles', 'destacados'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vcat($idd){

        // $catsub DB::table('subcategoria')->where('id_cat','=',$idd)->get();
        // return compact('catsub');
         return subcategoria::where('id_cat', '=' , $idd)->get();
    }
    public function index()
    {
        //
        $productosdescuento = DB::table('productos')->where('descuento','!=',0)->get();
        try {
            $productosdescuento->random(10);
        }catch(Exception $exception){
            $productosdescuento;
        }

        $productos =  DB::table('productos')->where('destacado','=','1')->get();
        try {
            $productos->random(10);
        }catch(Exception $exception){
            $productos;
        }

        $damas = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('categorias.categoria', '=', 'Damas')
            ->orWhere('subcategorias.nombre', '=', 'Damas')
            ->get();
            try {
                $damas->random(10);
            }catch(Exception $exception){
                $damas;
            }

        $caballeros = DB::table('productos')
            ->join('categorias', 'categorias.id_cat', '=', 'productos.id_cat')
            ->join('subcategorias', 'subcategorias.id_subcategoria', '=', 'productos.id_subcategoria')
            ->select('productos.*', 'categorias.categoria', 'subcategorias.nombre')
            ->where('categorias.categoria', '=', 'Caballeros')
            ->orWhere('subcategorias.nombre', '=', 'Caballeros')
            ->get();
            try {
                $caballeros->random(10);
            }catch(Exception $exception){
                $caballeros;
            }
            $cookie = Cookie::forget('myCookie');
        // return view ('dashboard/productos/crearproducto', compact('productos','categorias', 'subcategorias'));
        return view ('users.index', compact('productosdescuento','productos', 'damas', 'caballeros'))->withCookie($cookie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = producto::findOrFail($id);
        return view('users.detail',compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
