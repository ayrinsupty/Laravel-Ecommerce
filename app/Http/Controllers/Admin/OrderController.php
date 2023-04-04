<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $todayDate = Carbon::now();
        $orders = Order::whereDate('created_at', $todayDate)->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function show(int $orderid)
    {
        $order = Order::where('id', $orderid)->first();
        if($order){
            return view('admin.orders.view', compact('order'));
        }else{
            return redirect('admin/orders')->with('message', 'Order id not found!');
        }
    }
}
