<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use App\tag;
use App\tagproducto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;

class productoscrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
    }

    public function bycategorias($id){
      return  subcategoria::where('id_cat', $id)->get();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = DB::table('productos')->paginate(7);
        $categorias = categoria::all();
        $subcategorias = subcategoria::all();
        return view ('dashboard/productos/crearproducto', compact('productos','categorias', 'subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $tags = explode(',',$request->tags);
         //algo general...
            //enviamos los datos a la vista
        $datosproducto = request()->all();
        if($request->hasFile('Foto')){
            $datosproducto['Foto']=$request->file('Foto')->store('uploads','public');
        }
        if($request->hasFile('fotograbado')){
            $datosproducto['fotograbado']=$request->file('fotograbado')->store('uploads','public');
        }
        $prod = producto::create($datosproducto);
        $countags = count($tags);
        foreach ($tags as $p) {
            $todoprod = producto::all();
            $ultimoprod = $todoprod->last();
            $findtag =  tag::where('nombre','like',"%$p%")->first();
            if($findtag != true){
                tag::create([
                    'nombre' => $p,
                    'tag_slug' => $p
                ]);
                $todotag = tag::all();
                $ultimotag = $todotag->last();
                $protag = tagproducto::create([
                    'id_productos' => $ultimoprod->id_productos,
                    'id_tags' => $ultimotag->id_tags
                ]);
            }
            else{
                $findtag =  tag::where('nombre','like',"%$p%")->first();
                $protag = tagproducto::create([
                    'id_productos' => $ultimoprod->id_productos,
                    'id_tags' => $findtag->id_tags
                ]);
            }

            
        }
        toast('¡Producto guardado!','success');
        return redirect()->action('productoscrud@create');
        // return view ('crearproducto')->with('mensaje',$mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_productos)
    {
        $productos = producto::find($id_productos);
        $categorias = categoria::all();
        $subcategorias = subcategoria::all();
        /* dd($productos, $categorias, $subcategorias); */
        return view("dashboard/productos/edit")
            ->with('productos', $productos)
            ->with('categorias', $categorias)
            ->with('subcategorias', $subcategorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {

        $datosproducto = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $productos = producto::findOrFail($id);
            unlink($productos->Foto);
            $datosproducto['Foto']=$request->file('Foto')->store('uploads','public');
        }
        if($request->hasFile('fotograbado')){
            $productos = producto::findOrFail($id);
            unlink($productos->Foto);
            $datosproducto['fotograbado']=$request->file('fotograbado')->store('uploads','public');
        }
        producto::where('id_productos', "=" , $id)->update($datosproducto);
        $productos = producto::findOrFail($id);
        alert()->success('¡Producto actualizado!','');
        return redirect()->action('productoscrud@edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $productos = producto::findOrFail($id);
        //    if(Storage::delete('public/'.$productos->Foto)){
        //         producto::destroy($id);
        //    }
        // holaaa  dois intento return redirect()->action('productoscrud@create');

        $producto = producto::find($id);
        $producto->delete();
        /* Envia mensaje */
        toast('¡Producto eliminado!','error');
        return redirect()->action('productoscrud@create');
    }
}
