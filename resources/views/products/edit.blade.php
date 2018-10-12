@extends('layouts.app')

@section('title' , 'Edit Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Goods</div>
                <div class="card-body">
                	<form method="post" action="{{url('/products/edit', [$product->id])}}" id="products_update">
                		<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Name</label>
		                		<input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter Product Name" required="">
		                	</div>
	                	</div>
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Price</label>
		                		<input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Enter Product Price" required="">
		                	</div>
	                	</div>
	                	{{csrf_field()}}
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Quntity</label>
		                		<input type="text" class="form-control" name="quntity" value="{{$product->quntity}}" placeholder="Enter Product Quntity" required="">
		                	</div>
	                	</div>
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		                		
		                	</div>
	                	</div>
                	</form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
