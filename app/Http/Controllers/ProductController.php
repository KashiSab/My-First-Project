<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
	public function index (){
    	$products  = Product::all();
    	return view('products.index',compact('products'));
    }

    public function create() {

    	return view('products.create');
    }

    public function edit($id) {
    	$product  = Product::find($id);
    	return view('products.edit',compact('product'));
    }

    public function update($id, Request $request) {

    	$product = Product::find($id);

    	$product->fill($request->all())->save();

		return redirect(url('products'));           

    }

    public function show($id) {
        $product = Product::find($id);
    	return view('products.show',compact('product'));

    }
    
    public function store(Request $request) {
         $request->validate([
		    'name' => 'required',
		    'quntity' => 'required',
		    'price' => 'required',
		]);

         $product  = new product();

		$product->fill($request->all())->save();
		return redirect(url('products'));          

    }

    public function destroy($id) {
	    $product = Product::find($id);

	    $product->delete();

	   return 'deleted successfully'; 
	}
}
