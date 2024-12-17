<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order; // Assicurati di avere un modello Order
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $request->validate([
            'shipping' => 'required|array',
            'paymentNonce' => 'required|string',
            'cartItems' => 'required|array',
        ]);

        // Creazione dell'ordine
        $order = Order::create([
            'shipping' => json_encode($request->shipping),
            'payment_nonce' => $request->paymentNonce,
            'cart_items' => json_encode($request->cartItems),
        ]);

        Log::info('Order created', ['order' => $order]);

        return response()->json(['status' => 'success', 'order' => $order]);
    }

    public function getOrder($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['status' => 'error', 'message' => 'Order not found'], 404);
        }

        return response()->json(['status' => 'success', 'order' => $order]);
    }
}
