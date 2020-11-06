<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\producto;
use App\PaymentPlatform;
use App\Currency;
// use Stripe\Stripe;
// use Stripe\Charge;
use Exception;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $address =  DB::table('direcciones')->where('user_id','=', $id)->first();
        $currencies = Currency::all();
        $payment = PaymentPlatform::all();
        $destacados =  DB::table('productos')->where('destacado','=','1')->get();
        try {
            $destacados->random(10);
        }catch(Exception $exception){
            $destacados;
        }
        if (auth()->user()){
            $userlog = auth()->user()->id;
            $idcarrito = DB::table('carritos')->where([
                ['id_productos', '=', '1'],
                ['id', '=', $userlog]])->get();
            $cartotal=DB::table('carritos')
                ->join('users', 'users.id', '=', 'carritos.id')
                ->select(DB::raw('SUM(carritos.total) as Total'))
                ->where('carritos.id','=', $userlog)
                ->get();
            return view('users.checkout', compact('destacados', 'address','payment','idcarrito','currencies','cartotal'));
        } 
        else{
            return view('users.cartnolog', compact('mightAlsoLike', 'destacados'));
        }  
    }

    public function index_guess()
    {

        $destacados =  DB::table('productos')->where('destacado','=','1')->get();
        try {
            $destacados->random(10);
        }catch(Exception $exception){
            $destacados;
        }

        return view('users.checkout', compact('destacados'));
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
        // Stripe::setApiKey(config('sk_test_51HTHABAMN8wZxF8VkBaH6APNCIW3TJ4GF8bek1a7EhnolG46X15OwKfnRtIOwYdSaeTMDdU4ax3CKdLQqABUvQRp00bPZClZIl'));
        // $token = $request->stripeToken;

        // $charge = Charge::create([
        //     'amount' => 100,
        //     'currency' => 'MXN',
        //     'description' => 'Example charge',
        //     'source' => $token,
        // ]);
   
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
