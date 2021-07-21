<?php

namespace App\Billing;

interface PaymentGatewayContract
{
    /**
     * @param  float $amount
     * @return array
     */
    public function charge(float $amount): array;

    /**
     * @param  float $amount
     * @return void
     */
    public function setDiscount(float $amount): void;
}
