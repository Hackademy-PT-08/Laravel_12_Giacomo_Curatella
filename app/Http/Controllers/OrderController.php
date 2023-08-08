<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        
        $order = new Order();

        $order->name = $request->name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->billing_address = $request->billing_address;
        $order->shipping_address = $request->shipping_address;
        $order->zip_code = $request->zip_code;
        $order->city = $request->city;
        $order->province = $request->province;
        $order->phone = $request->phone;
        $order->customer_id = $id;
        $order->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
