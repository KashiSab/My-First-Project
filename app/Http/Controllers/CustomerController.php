<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;


class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
    	$customers  = Customer::all();
    	return view('customer.index',compact('customers'));
    }

    public function create() {

        $productList = Product::all();
    	return view('customer.create', compact('productList'));
    }

    public function edit($id) {
    	$customer  = Customer::find($id);
        $productList = Product::all();
    	return view('customer.edit',compact('productList', 'customer'));
    }

    public function update($id, Request $request) {

    	$customer = Customer::find($id);
        
         if (!$request->has('paid')) {
            $request->merge(['paid'=>0]);
         }
         // dd($request->all());
    	$customer->fill($request->all())->save();

		return redirect(url('customer'));           

    }

    public function show($id) {
        $customer = Customer::find($id);
    	return view('customer.show',compact('customer'));

    }
    
    public function store(Request $request) {
         $request->validate([
		    'name' => 'required',
		    'phone_no' => 'required',
		]);

         if (!$request->has('paid')) {
            $request->merge(['paid'=>0]);
         }

        $customer  = new customer();

		$customer->fill($request->all())->save();

		return redirect(url('customer'));          

    }

    public function destroy($id) {
	    $customer = Customer::find($id);

	    $customer->delete();
        return 'deleted successfully';
	    // return redirect(url('customer'));  
	}
}
