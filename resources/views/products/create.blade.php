@extends('layouts.app')

@section('title' , 'Create Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@if($errors->any())
			    <div class="alert alert-danger">
			        @foreach($errors->all() as $error)
			            <p>{{ $error }}</p>
			        @endforeach
			    </div>
			@endif
            <div class="card">
                <div class="card-header">Create Products</div>
                <div class="card-body">
                	<form method="post" action="{{url('/products/save')}}" id="goods_store">
                		<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Name</label>
		                		<input type="text" class="form-control" name="name" value="" placeholder="Enter Product Name">
		                	</div>
	                	</div>
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Price</label>
		                		<input type="text" class="form-control" name="price" value="" placeholder="Enter Product Price">
		                	</div>
	                	</div>
	                	{{csrf_field()}}
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<label>Product Quntity</label>
		                		<input type="text" class="form-control" name="quntity" value="" placeholder="Enter Product Quntity">
		                	</div>
	                	</div>
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		                	</div>
	                	</div>
                	</form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
