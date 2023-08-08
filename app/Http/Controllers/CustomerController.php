<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Picture;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
    public function create($id)
    {
        $picture = Picture::find($id);
        return view('customers.create', ['picture'=>$picture]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->billing_address = $request->billing_address;
        $customer->shipping_address = $request->shipping_address;
        $customer->zip_code = $request->zip_code;
        $customer->city = $request->city;
        $customer->province = $request->province;
        $customer->phone = $request->phone;
        $customer->user_id = $request->user_id;
        $customer->save();

        return $customer->id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
