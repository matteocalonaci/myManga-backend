<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Braintree\Gateway;


class BraintreeController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);
    }

    public function getToken()
    {
        $clientToken = $this->gateway->clientToken()->generate();
        return response()->json(['clientToken' => $clientToken]);
    }

    public function checkout(Request $request)
{
    // Validazione dei dati in ingresso
    $request->validate([
        'user' => 'required|array',
        'shipping' => 'required|array',
        'paymentMethodNonce' => 'required|string',
        'amount' => 'required|numeric',
        'products' => 'required|array',
    ]);

    // Creazione della transazione con Braintree
    $result = $this->gateway->transaction()->sale([
        'amount' => $request->amount,
        'paymentMethodNonce' => $request->paymentMethodNonce,
        'options' => [
            'submitForSettlement' => true
        ]
    ]);

    // Se la transazione ha successo, crea l'ordine
    if ($result->success) {
        // Creazione dell'ordine nel database
        $order = Order::create([
            'user_name' => $request->user['name'],
            'user_surname' => $request->user['surname'],
            'user_email' => $request->user['email'],
            'user_phone' => $request->user['phone'],
            'shipping_address' => $request->shipping['address'],
            'shipping_city' => $request->shipping['city'],
            'shipping_state' => $request->shipping['state'],
            'shipping_postal_code' => $request->shipping['postalCode'],
            'shipping_method' => 'Standard', // O il metodo scelto dall'utente
            'payment_method_nonce' => $request->paymentMethodNonce,
            'amount' => $request->amount,
            'transaction_id' => $result->transaction->id,
        ]);

        // Associazione dei prodotti all'ordine
        foreach ($request->products as $product) {
            $order->mangas()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        return response()->json(['status' => 'success', 'transactionId' => $result->transaction->id]);
    } else {
        return response()->json(['status' => 'error', 'message' => $result->message], 400);
    }
}
}
