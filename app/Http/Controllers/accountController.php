<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\direcciones;
use App\OrderProduct;
use App\Order;
use DB;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userIds = auth()->user()->id;
        $users = User::findOrFail($userIds);
        return view('users.account.account', compact('users'));
        /* dd($direcciones); */
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
        $user = User::find($id);
        $input = $request->except('password');

        if (! $request->filled('password')) {
            $user->fill($input)->save();

        toast('¡Su perfil a sido actualizado!','success');
        return redirect()->route("account.index");
        }

        $user->password = Hash::make($request->password);
        $user->fill($input)->save();

        toast('¡Su perfil y password a sido actualizado!','success');
		return redirect()->route("account.index");
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

    /**
     * Especifica el recurso para la vista mis compras.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shopping()
    {
        return view('users.account.shopping');
    }

    /**
     * Especifica el recurso para la vista detalle de la compra.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        return view('users.account.detail');
    }

    /**
     * Especifica el recurso para la vista datos de envio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function address($id)
    {
        $address = direcciones::where('id', '=', $id)
        ->first();
        /* dd($address); */
        return view('users.account.address', compact('address'));
    }

    /**
     * Especifica el recurso para la vista datos de envio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(Request $request,$id)
    {
        $address = direcciones::findOrFail($id);
        $address->update($request->all());
        toast('¡Su dirección a sido actualizada!','success');
        return redirect()->route('account.address', array('id' => $id));
    }
}
