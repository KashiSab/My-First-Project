@extends('layouts.app')

@section('title' , 'Show Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Customer details</div>
                <div class="card-body">
                	<div class="row">
	                	<div class="col-md">
	                		<p><strong>Product Name</strong></p>
	                	</div>
	                	<div class="col-md">{{$customer->name}}</div>
	                </div>
	                <div class="row">
	                	<div class="col-md">
	                		<p><strong>customer Phone Number</strong></p>
	                	</div>
	                	<div class="col-md">{{$customer->phone_no}}</div>
	                </div>
	                <div class="row">
	                	<div class="col-md">
	                		<p><strong>customer Paid</strong></p>
	                	</div>
	                	<div class="col-md">{{$customer->paid == 1 ? 'Yes' : 'No'}}</div>
	                </div>
	                
                </div>
               
            </div>
            <br>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
</div>
@endsection
