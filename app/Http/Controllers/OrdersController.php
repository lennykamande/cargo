<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Destination;

class OrdersController extends Controller
{
	public function index()
    {
        $orders = Order::all();
        
    	return view('orders.index', compact('orders'));
    	
    }

    public function create()
    {
        $destinations = Destination::all(['name', 'id']);
    	return view('orders.create', compact('destinations'));
    	
    }

    public function store()
    {
        $order = new Order();

        $order->description = request('description');
        $order->from = request('from');
        $order->destination = request('destination');
        $order->total = request('total');
        $order->paystatus = request('paystatus');
        $order->bookingstatus = request('bookingstatus');
        $order->client = request('client');
        $order->productno = request('productno');

        $order->save();
        return redirect('/orders'); 
    	
    }
    public function edit($id)
    {
        $orders = Order::findOrFail($id);
        return view('orders.edit', compact('orders'));
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);

        $order->description = request('description');
        $order->from = request('from');
        $order->destination = request('destination');
        $order->total = request('total');
        $order->paystatus = request('paystatus');
        $order->bookingstatus = request('bookingstatus');
        $order->client = request('client');
        $order->productno = request('productno');

        $order->save();
        return redirect('/orders');
    }

    public function destroy($id)
    {
        $destination = Orders::findOrFail($id)->delete();

        return redirect('/orders');

    }
}
