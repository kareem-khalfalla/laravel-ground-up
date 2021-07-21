<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private PaymentGatewayContract $paymentGateway;

    /**
     * __construct
     *
     * @param  PaymentGatewayContract $paymentGateway
     * @return void
     */
    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
        $this->paymentGateway->setDiscount(500);
    }

    /**
     * data
     *
     * @return array
     */
    public function data(): array
    {
        return [
            'name' => 'Kareem',
            'address' => '123 Aql Pasha\'s street'
        ];
    }
}
