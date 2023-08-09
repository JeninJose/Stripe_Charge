<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    
    public function charge(Request $request): View
    {
        $amount = $request->amount * 100;
        $paymentMethodId = $request->payment_method; 
        $user = auth()->user();
        $stripeCustomer = $user->createOrGetStripeCustomer();
        $paymentMethod =  $user->addPaymentMethod($paymentMethodId);
        $payment = $user->charge($amount, $paymentMethod->id,  ['off_session' => true]);

        $paymentStatus = $payment->status;
        return view('payment-response', compact('paymentStatus'));
    }

}
