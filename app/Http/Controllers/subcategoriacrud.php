<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SubcategoryCreateRequest;
use App\Http\Requests\SubcategoryUpdateRequest;
use Exception;

class subcategoriacrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategorias = DB::table('subcategorias')
        ->paginate(10);

        return view('dashboard.subcategorias.subcategorias', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryCreateRequest $request)
    {
        $datossubcategoria = request()->all();
        subcategoria::create($datossubcategoria);
        /* Envia mensaje */
        toast('¡Subcategoria guardada!','success');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_subcategoria)
    {
        $subcategorias = subcategoria::find($id_subcategoria);
        $categorias = categoria::all();

        return view('dashboard.subcategorias.edit', compact('categorias','subcategorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryUpdateRequest $request, $id_subcategoria)
    {
        $subcategorias = subcategoria::find($id_subcategoria);
        $subcategorias->fill($request->all())->save();

        alert()->success('¡Categoria actualizada!','');
        return redirect()->route('subcategorias.edit',$subcategorias->id_subcategoria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_subcategoria)
    {
        try
        {
            $subcategorias = subcategoria::find($id_subcategoria);
            $subcategorias->delete($id_subcategoria);

            toast('¡Categoria eliminada!','error');
            return redirect()->route('subcategorias.index');
        }
        catch(Exception $exception)
        {
            return response()->view('layouts.error.500', [], 500);
        }
    }
}
