@extends('layouts.app')

@section('title' , 'Show Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Products</div>
                <div class="card-body">
                	<div class="row">
	                	<div class="col-md">
	                		<p><strong>Product Name</strong></p>
	                	</div>
	                	<div class="col-md">{{$product->name}}</div>
	                </div>
	                <div class="row">
	                	<div class="col-md">
	                		<p><strong>Product Price</strong></p>
	                	</div>
	                	<div class="col-md">{{$product->price}}</div>
	                </div>
	                <div class="row">
	                	<div class="col-md">
	                		<p><strong>Product Quantity</strong></p>
	                	</div>
	                	<div class="col-md">{{$product->quntity}}</div>
	                </div>
	                
                </div>
               
            </div>
            <br>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
</div>
@endsection
