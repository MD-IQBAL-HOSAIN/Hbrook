<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $orders = Order::with(['carts.product'])
                       ->where('user_id', $user->id)
                       ->where('payment_status', 'successful')
                       ->get();

        $data = Order::with(['carts.product'])
                       ->where('user_id', $user->id)
                       ->where('payment_status', 'pending')
                       ->get();

        return view('frontend.layout.dashboard', compact('orders', 'data'));
    }
}
