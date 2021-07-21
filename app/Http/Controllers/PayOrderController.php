<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @param  PaymentGatewayContract $paymentGateway
     * @param  OrderDetails $orderDetails
     * @return Response
     */
    public function store(Request $request, PaymentGatewayContract $paymentGateway, OrderDetails $orderDetails)
    {
        // $orderDetails->data();
        dd($paymentGateway->charge(2500));
    }
}
