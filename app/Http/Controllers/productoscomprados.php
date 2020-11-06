<?php

namespace App\Http\Controllers;

use App\productoscomprado;
use Illuminate\Http\Request;

class productoscomprados extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.mispedidos');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productoscomprados  $productoscomprados
     * @return \Illuminate\Http\Response
     */
    public function show(productoscomprados $productoscomprados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productoscomprados  $productoscomprados
     * @return \Illuminate\Http\Response
     */
    public function edit(productoscomprados $productoscomprados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productoscomprados  $productoscomprados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productoscomprados $productoscomprados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productoscomprados  $productoscomprados
     * @return \Illuminate\Http\Response
     */
    public function destroy(productoscomprados $productoscomprados)
    {
        //
    }
}
