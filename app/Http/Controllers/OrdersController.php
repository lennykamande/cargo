<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrdersController extends Controller
{
	public function index()
    {

    	return view('orders.index');
    	
    }

    public function create()
    {

    	return view('orders.create');
    	
    }

    public function store()
    {
        $order = new Destination();

        $order->description = request('description');
        $order->from = request('from');
        $order->destination = request('destination');
        $order->total = request('total');
        $order->paystatus = request('paystatus');
        $order->bookingstatus = request('bookingstatus');
        $order->client = request('client');

        $order->save();
        return redirect('/orders'); 
    	
    }
}
