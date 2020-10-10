<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\producto;
use App\User;
use App\carrito;
use App\carritosgrabado;
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
            $idcarrito = DB::table('carritos')
                ->where([['activo', '=',1],['id', '=', $userlog]])
                ->get();

            $cart=DB::table('carritos')
                ->join('users', 'users.id', '=', 'carritos.id')
                ->select(DB::raw('SUM(carritos.total) as Total'))
                ->where('carritos.id','=', $userlog)
                ->get();
          return view('users.cart', compact('mightAlsoLike', 'destacados','idcarrito','totalcarrito','cart'));
        }else{
            return view('users.cartnolog', compact('mightAlsoLike', 'destacados'));
        }  
    }
    public function pcart($idp){
        return producto::where('id_producto', '=' , $idp)->get();
    }
    public function grabado($idc){
        return carritosgrabado::where('idcar', '=' , $idc)->get();
    }
    public function idcarrito($idc){
        return carrito::where('idcar', '=' , $idc)->get();
    }
    public function RegistroGN(Request $request, $id){
        $cart= carrito::where('idcar', '=', $id)->get();
        $carrito = carritosgrabado::where('idcar','=',$id)->get();
        return view('users.grabadonumero',compact('carrito','cart'));

        /* dd($cart); */
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
                carrito::create([
                    'activo' => '1',
                    'comprado' => '0',
                    'cantidad' => '1',
                    'foto' => $prod->Foto,
                    'grabado' => $prod->grabado,
                    'descripcion' => $prod->descripcion,
                    'preciounitario' => $request->precio,
                    'id_productos' => $request->id_productos,
                    'total' => $request->precio,
                    'id' => $userlog
                ]);
                if($prod->grabado = 1){
                    $cartfind = DB::table('carritos')->where([
                        ['id_productos', '=',$request->id_productos],
                        ['id', '=', $userlog]])->get();
                    foreach($cartfind as $attrs){
                        carritosgrabado::create([
                            'grabado' => '',
                            'numero' => 0,
                            'grabado2' => '',
                            'numero2' => 0,
                            'idcar' => $attrs->idcar,
                            'id_productos' => $attrs->id_productos
                        ]);
                    }
                }
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
           
            
            $totalcardetalle = "SELECT COUNT(idcar) FROM articles WHERE idcar = $id";
            
            carrito::find($id)->update(['cantidad' => $request->quantity]);
            $totalcart = carrito::find($id);
            $total = $totalcart->cantidad * $totalcart->preciounitario;
            carrito::find($id)->update(['total' => $total]);
            // $updatecart = carrito::find($id);
            // $updatecart = carrito::update([
            //         'cantidad' => $request->cantidad,
            //         'total' => $total]);
            dd($totalcardetalle);
            // toast('¡Cantidad actualizada exitosamente!','success');
            
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
        $carritograb = DB::table('carritograbados')->select('idcartgrabado')->where('id_productos', '=', $id)->get();
     
        foreach($carritograb as $attrs){
            $car = $attrs->idcartgrabado;
            $elimncar = carritosgrabado::find($car);
            $elimncar->delete();
        }
        $elimncar->delete();
        foreach($idcarrito as $attrs){
            $car = $attrs->idcar;
            $elimncar = carrito::find($car);
            $elimncar->delete();
        }
        toast('¡El producto se a removido de su carrito!','success');
        return redirect()->route('cart.index');
    }
}
