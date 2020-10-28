<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use App\Resolvers\PaymentPlatformResolver;
use Illuminate\Http\Request;
use MercadoPago\Payer;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $paymentPlatformResolver;
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver )
    {
        $this->middleware('auth');
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }
    public function pay(Request $request){
        $userlog = auth()->user()->id;
        $totalpago = DB::table('carritos')
                ->join('users', 'users.id', '=', 'carritos.id')
                ->select(DB::raw('SUM(carritos.total) as Total'))
                ->where('carritos.id','=', $userlog)
                ->get();
        $request['value'] = $totalpago[0]->Total; 
        $request['currency'] = 'MXN'; 
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_platform' => ['required','exists:payment_platforms,id'],
         ];

        $request->validate($rules);
        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);
        //$paymentPlatform = resolve(PayPalService::class);
        session()->put('paymentPlatformId', $request->payment_platform);
        return $paymentPlatform->handlePayment($request);
        // return $request->all();

    }
    public function approval(){
        $paymentPlatform = resolve(PayPalService::class);
        if(session()->has('paymentPlatformId')){
            $paymentPlatform = $this->paymentPlatformResolver
            ->resolveService(session()->get('paymentPlatformId'));
            return $paymentPlatform->handleApproval();  
        }
        toast('No se pudo realizar el pago','error');
        return redirect()->route('cart.index');
   
    }
    public function cancelled(){
        toast('El pago ah sido cancelado','error');
        return redirect()->route('cart.index');
    }
}
