@extends('layouts.app')
@section('title' , 'Edit Customer')
@section('css')
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">

  <style type="text/css">

</style>
@endsection
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
                <div class="card-header">Create Customer</div>
                <div class="card-body">
                	<form method="post" action="{{url('/customer/edit', [$customer->id])}}" id="customer_store">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Products</label>
                               <select class="selectpicker form-control" name="product_id[]" id="product_id" data-live-search="true" multiple>
                                   @foreach($productList as $product)
                                        <option value="{{$product->id}}" {{$product->id == $customer->product_id ? 'selected' : ''}}>{{$product->name}} </option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                		<div class="col-md-12">
                			<div class="form-group">
		                		<label>Customer Name</label>
		                		<input type="text" class="form-control" name="name" value="{{$customer->name}}" placeholder="Enter Customer Name">
		                	</div>
	                	</div>
	                	<div class="col-md-12">
                			<div class="form-group">
		                		<label>Phone Number</label>
		                		<input type="text" class="form-control" name="phone_no" value="{{$customer->phone_no}}" placeholder="Enter Phone Number">
		                	</div>
	                	</div>
	                	{{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" name="paid" id="paid" value="1" {{$customer->paid == 1 ? 'checked' : ''}}>
                                <label class="custom-control-label" for="paid">Paid</label>
                              </div>
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
@section('js')

<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>
<script type="text/javascript">
// $('.selectpicker').selectpicker();
</script>
@endsection
