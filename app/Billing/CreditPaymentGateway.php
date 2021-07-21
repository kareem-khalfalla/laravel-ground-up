<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
{
    private string $currency;
    private float  $discount;

    /**
     * __construct
     *
     * @param  string $currency
     * @return void
     */
    public function __construct(string $currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    /**
     * @inheritDoc
     */
    public function charge(float $amount): array
    {
        $fees = $amount * 0.03;

        return [
            'amount'              => $amount - $this->discount + $fees,
            'confirmation_number' => Str::random(),
            'currency'            => $this->currency,
            'discount'            => $this->discount,
            'fees'                => $fees
        ];
    }

    /**
     * @inheritDoc
     */
    public function setDiscount(float $amount): void
    {
        $this->discount = $amount;
    }
}
