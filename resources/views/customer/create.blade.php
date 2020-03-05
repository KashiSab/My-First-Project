@extends('layouts.app')
@section('title' , 'Create Customer')
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
                <div class="card-header">Sign In Form</div>
                <div class="card-body">
                    <form method="post" action="{{url('/customer/save')}}" id="customer_store">
                        {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Products</label>
                                   <select class="form-control selectpicker" name="product_id" id="product_id" multiple="">
                                   @foreach($productList as $product)
                                        <option value="{{$product->id}}">{{$product->name}} </option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="name" value="" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_no" value="" placeholder="Enter Your Phone Number">
                            </div>
                        </div>
                        {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" name="paid" id="paid" value="1">
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
