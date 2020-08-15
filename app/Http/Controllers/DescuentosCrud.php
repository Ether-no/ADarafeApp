<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use App\descuento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DescuentosCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        $descuentos = DB::table('descuentos')
        ->paginate(5);
        return view('dashboard.descuentos.descuentos', compact('descuentos'));
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
        $subcat = request()->input('id_subcategoria');
        $prudctos = DB::table('productos')->where('id_subcategoria', $subcat);
        $prudctos->update(['descuento'=>$request['porcentaje']]);
        $descuento = request()->all();
        descuento::create($descuento);
        return redirect()->action('productoscrud@create');
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
    public function edit($id)
    {
        $descuentos = descuento::findOrFail($id);
        return view('dashboard/descuentos/edit',compact('descuentos'));
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
        $datosdescuento = request()->except(['_token','_method']);
        $subcat = request()->input('id_subcategoria');
        $prudctos = DB::table('productos')->where('id_subcategoria', $subcat);
        $prudctos->update(['descuento'=>$request['porcentaje']]);
       
        descuento::where('id_descuentos', "=" , $id)->update($datosdescuento);
        $descuentos = descuento::findOrFail($id);
        return view('dashboard/descuentos/edit',compact('descuentos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $descuento = descuento::find($id);
        $idsubcat = $descuento->id_subcategoria;
        $prudctos = DB::table('productos')->where('id_subcategoria', $idsubcat);
        $prudctos->update(['descuento'=> 0]);
        $descuento->delete();
        return redirect()->action('DescuentosCrud@index');
    }
}
