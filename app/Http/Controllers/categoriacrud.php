<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\subcategoria;
use nesbot\carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Exception;

class categoriacrud extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categorias')
        ->paginate(10);
        return view('dashboard.categorias.categorias', compact('categorias'));
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
    public function store(CategoryCreateRequest $request)
    {
        $datoscategoria = request()->all();
        categoria::create($datoscategoria);
        /* Envia mensaje */
        toast('¡Categoria guardada!','success');
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
        $categorias = categoria::findOrFail($id);
        return view('dashboard.categorias.edit', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id_cat)
    {
        $categorias = categoria::find($id_cat);
        $categorias->fill($request->all())->save();

        alert()->success('¡Categoria actualizada!','');
        return redirect()->route('categorias.edit',$categorias->id_cat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cat)
    {
        try
        {
            $categorias = categoria::find($id_cat);
            $categorias->delete($id_cat);

            toast('¡Categoria eliminada!','error');
            return redirect()->route('categorias.index');
        }
        catch(Exception $exception)
        {
            return response()->view('layouts.error.500', [], 500);
        }

    }
}
