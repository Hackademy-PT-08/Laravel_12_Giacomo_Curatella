<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Order;
use App\Models\Picture;
use App\Models\Customer;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index (){
        $pictures = Picture::all();
        return view('home.index', [
            'pictures' => $pictures,
        ]);
    }

    public function show($id)
    {
        $picture = Picture::find($id);
        return view('home.show', ['picture'=>$picture]);
    }

    //! macro funzione checkout
    public function store(Request $request) {
        //*code here
        $add_customer = (new CustomerController)->store($request);
        $add_order = (new OrderController)->store($request, $add_customer);


        //! parte custom per fattura
        $customerForInvoice = Customer::find($add_customer);
        $user_id_for_search = $customerForInvoice->user_id;
        $image = User::find($user_id_for_search)->pictures;
        
        
        return view('invoices.invoice', [
            'customer' => $customerForInvoice,
            'image' => $image,
        ]);
    }
}
