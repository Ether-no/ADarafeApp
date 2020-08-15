<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\producto;
use App\carrito;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = producto::mightAlsoLike()->get();

        $destacados =  DB::table('productos')->where('destacado','=','1')->get();
        try {
            $destacados->random(10);
        }catch(Exception $exception){
            $destacados;
        }
        if (auth()->user()){
            $userlog = auth()->user()->id;
            $idcarrito = DB::table('carritos')->where([['activo', '=',1],['id', '=', $userlog]])->get();
            // foreach($usercart as $item){
            //     $idcarrito = DB::table('productos')->where('id_productos', '=',$item->id_productos)->get();
            // }
            return view('users.cart', compact('mightAlsoLike', 'destacados','idcarrito'));
        }else{
            return view('users.cartnolog', compact('mightAlsoLike', 'destacados'));
        }
        
        
    }
    public function pcart($idp){
        return producto::where('id_producto', '=' , $idp)->get();
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
        if (auth()->user()){
            $userlog = auth()->user()->id;
            $idcarrito = DB::table('carritos')->where([
                ['id_productos', '=',$request->id_productos],
                ['id', '=', $userlog]])->get();
            if($idcarrito == ''){
                toast('¡El producto ya esta agregado al carrito!','success');
            }else{
                $userlog = auth()->user()->id;
                $prod = DB::table('productos')->where('id_productos','=',$request->id_productos)->get();
                $prod = producto::find($request->id_productos);
                $carrito = carrito::create([
                        'activo' => '1',
                        'comprado' => '0',
                        'cantidad' => '1',
                        'foto' => $prod->Foto,
                        'descripcion' => $prod->descripcion,
                        'preciounitario' => $request->precio,
                        'id_productos' => $request->id_productos,
                        'total' => $request->precio,
                        'id' => $userlog
                ]);
                toast('¡El producto se a agregado a su carrito!','success');
            }
            
            return redirect()->route('cart.index');
           // return view('users.cart', compact('idcarrito'));
        }else{
            $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
                return $cartItem->id === $request->id_productos;
            });
            if($duplicates->isNotEmpty()) {
                toast('¡El producto ya esta agregado al carrito!','success');
                return redirect()->route('cart.index');
            }else{
                Cart::add($request->id_productos, $request->producto, 1, $request->precio)->associate('App\producto');
                toast('¡El producto se a agregado a su carrito!','success');
                return redirect()->route('cart.index');
            }
        } 
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
        if (auth()->user()){
            $validator = Validator::make($request->all(), [
                'quantity' => 'required|numeric|between:1,5'
            ]);
    
            if ($validator->fails()) {
                toast('¡Error la cantidad debe estar entre 1 y 5!','error');
                return response()->json(['success' => false], 400);
            }
            carrito::find($id)->update(['cantidad' => $request->quantity]);
            $totalcart = carrito::find($id);
            $total = $totalcart->cantidad * $totalcart->preciounitario;
            carrito::find($id)->update(['total' => $total]);
            // $updatecart = carrito::find($id);
            // $updatecart = carrito::update([
            //         'cantidad' => $request->cantidad,
            //         'total' => $total]);
            toast('¡Cantidad actualizada exitosamente!','success');
            return response()->json(['success' => true]);
        }else{
            $validator = Validator::make($request->all(), [
                'quantity' => 'required|numeric|between:1,5'
            ]);
    
            if ($validator->fails()) {
                toast('¡Error la cantidad debe estar entre 1 y 5!','error');
                return response()->json(['success' => false], 400);
            }
    
            Cart::update($id, $request->quantity);
            
            toast('¡Cantidad actualizada exitosamente!','success');
            return response()->json(['success' => true]);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        // Cart::remove($id);
        // $idcarrito = DB::table('carritos')->where([
                // ['id_productos', '=', $id],
                // ['id', '=', $userlog]])->get();
            // $idcarrito = DB::table('carritos')
            //     ->join('productos', 'productos.id_productos', '=', 'carritos.id_productos')
            //     ->join('users', 'users.id', '=', 'carritos.id')
            //     ->select('carritos', 'carritos.idcar')
            //     ->where('users.id', '=',$userlog )
            //     ->andWhere('productos.id_productos', '=', $id)
            //     ->get();
            
            // DB::table('carritos')->delete($idcarrito);
        
        //    $idcarrito = "SELECT * FROM carritos WHERE id_producto = $id";
        $userlog = auth()->user()->id;
        $idcarrito = DB::table('carritos')->select('idcar')->where([
            ['id_productos', '=', $id],
            ['id', '=', $userlog]])->get();
        foreach($idcarrito as $attrs){
            $car = $attrs->idcar;
            $elimncar = carrito::find($car);
            $elimncar->delete();
        }
        toast('¡El producto se a removido de su carrito!','success');
        return redirect()->route('cart.index');
    }
}
