<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function checkout(){

// This is your test secret API key.
\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


$success_url = 'http://localhost:8000/success';
$cancel_url = 'http://localhost:8000/cancel';

$checkout_session = \Stripe\Checkout\Session::create([
    // "amount" => 1,
    // "currency" => "USD",
    // "description" => "Testing",
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LCiEBJmXMB6bamcGV3qOCij',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $success_url . '/success.html',
  'cancel_url' => $cancel_url . '/cancel.html',
]);
return back();

// header("HTTP/1.1 303 See Other");
// header("Location: " . $checkout_session->url);
    }
}
