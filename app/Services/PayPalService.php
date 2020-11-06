<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\producto;
use App\User;
use App\carrito;
use App\carritosgrabado;
use App\productoscomprado;
use Exception;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PayPalService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $clientId;

    protected $clientSecret;

    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {
        $order =  json_decode($this->createOrder($request->value, $request->currency));

       $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);
    }
    public function handleApproval()
    {
        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');

            $payment = json_decode($this->capturePayment($approvalId));

            $name = $payment->payer->name->given_name;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;
            if (auth()->user()){
                $userlog = auth()->user()->id;
                $idcarrito = DB::table('carritos')
                ->where([['activo', '=',1],['comprado','=',0],['id', '=', $userlog]])
                ->get();
                $cart=DB::table('carritos')
                ->join('users', 'users.id', '=', 'carritos.id')
                ->select(DB::raw('SUM(carritos.total) as Total'))
                ->where([['carritos.id','=', $userlog],['carritos.comprado','=',0]])
                ->get();
                $compra = productoscomprado::create([
                    'cantidad' => $cart[0]->Total,
                    'activo' => 1,
                    'enviado' => 0,
                    'id' => $userlog
                ]);
                foreach($idcarrito as $id){
                    carrito::find($id)->update(['id_compra' => $compra->id_compra]);
                }

            }
            toast('Gracias por tu compra','success');
            return redirect()->action('productoscomprados@index');
        }
        toast('¡Ocurrio un error porfavor intente de nuevo!','error');
        return redirect()->action('indexController@index');
    }
    public function createOrder($value, $currency){
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => $currency,
                            'value' => $value,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route('approval'),
                    'cancel_url' => route('cancelled'),
                ]
            ],
            [],
            $isJsonRequest = true
        );
       
    }
    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json',
            ]
        );
    }
    public function resolveFactor($currency)
    {
        $zeroDecimalCurrencies = ['JPY'];

        if (in_array(strtoupper($currency), $zeroDecimalCurrencies)) {
            return 1;
        }

        return 100;
    }
}