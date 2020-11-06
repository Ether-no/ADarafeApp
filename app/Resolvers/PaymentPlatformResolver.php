<?php

namespace App\Resolvers;

use Exception;
use App\PaymentPlatform;

class PaymentPlatformResolver
{
    protected $paymentPlatforms;

    public function __construct()
    {
        $this->paymentPlatforms = PaymentPlatform::all();
    }

    public function resolveService($paymentPlatformId)
    {
        $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

        $service = config("services.{$name}.class");

        if ($service) {
            return resolve($service);
        }

        throw new Exception('La plataforma de pago selecionada no esta configurada, por favor elija otra opcion');
    }
}
