@extends('layouts.app')
@section('title' , 'Create Customer')
@section('css')
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">

  <style type="text/css">
  input[type="radio"], input[type="checkbox"] {
  box-sizing: border-box;
  cursor: pointer;
  line-height: normal;
}

.clip-check {
  margin-bottom: 10px;
  margin-top: 10px;
  padding-left: 0;
}
.clip-check label {
  cursor: pointer;
  display: inline-block;
  font-size: 13px;
  margin-right: 15px;
  padding-left: 30px !important;
  position: relative;
  line-height: 23px;
  transition: border 0.2s linear 0s, color 0.2s linear 0s;
  white-space: nowrap;
}
.clip-check label:before {
  background-color: #ffffff;
  border: 1px solid #c8c7cc;
  content: "";
  display: inline-block;
  height: 20px;
  left: 0;
  margin-right: 10px;
  position: absolute;
  width: 20px;
  border-radius: 0;
  top: 1px;
  transition: border 0.2s linear 0s, color 0.2s linear 0s;
}
.clip-check label:after {
  display: inline-block;
  font-size: 11px;
  height: 19px;
  left: 4px;
  position: absolute;
  top: -1px;
  transition: border 0.2s linear 0s, color 0.2s linear 0s;
  width: 19px;
}
.clip-check input[type="checkbox"] {
  display: none;
}
.clip-check input[type="checkbox"]:checked + label:before {
  border-width: 10px;
}
.clip-check input[type="checkbox"]:checked + label:after {
  color: #fff;
  content: "\f00c";
  font-family: "FontAwesome";
}
.clip-check input[type="checkbox"][disabled] + label {
  opacity: 0.65;
}
.clip-check input[type="checkbox"][disabled] + label:before {
  background-color: #F8F8F8;
}
.clip-check.check-md label {
  margin-right: 15px;
  padding-left: 35px !important;
  line-height: 28px;
}
.clip-check.check-md label:before {
  height: 25px;
  width: 25px;
}
.clip-check.check-md label:after {
  font-size: 14px;
  height: 24px;
  left: 5px;
  width: 24px;
}
.clip-check.check-md input[type="checkbox"]:checked + label:before {
  border-width: 12px;
}
.clip-check.check-lg label {
  margin-right: 15px;
  padding-left: 40px !important;
  line-height: 33px;
}
.clip-check.check-lg label:before {
  height: 30px;
  width: 30px;
}
.clip-check.check-lg label:after {
  font-size: 17px;
  height: 29px;
  left: 6px;
  width: 29px;
}
.clip-check.check-lg input[type="checkbox"]:checked + label:before {
  border-width: 15px;
}

.clip-check.check-success input[type="checkbox"]:checked + label:before {
  border-color: #5cb85c;
}

.clip-check.check-primary input[type="checkbox"]:checked + label:before {
  border-color: #007AFF;
}

.clip-check.check-warning input[type="checkbox"]:checked + label:before {
  border-color: #eea236;
}

.clip-check.check-danger input[type="checkbox"]:checked + label:before {
  border-color: #d43f3a;
}

.clip-check.check-info input[type="checkbox"]:checked + label:before {
  border-color: #46b8da;
}

.clip-check.check-purple input[type="checkbox"]:checked + label:before {
  border-color: #804C75;
}
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
                    <form method="post" action="{{url('/customer/save')}}" id="customer_store">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Products</label>
                                   <select class="selectpicker form-control" name="product_id" id="product_id" data-live-search="true" multiple>
                                   @foreach($productList as $product)
                                        <option value="{{$product->id}}">{{$product->name}} </option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="name" value="" placeholder="Enter Customer Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_no" value="" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        {{csrf_field()}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox clip-check check-primary">
                                    <input type="checkbox" id="paid" name="paid" value="1">
                                    <label for="paid">
                                        Paid
                                    </label>
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
