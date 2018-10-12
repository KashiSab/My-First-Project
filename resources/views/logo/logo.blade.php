@extends('layouts.app')
@section('title' , 'Change Logo')
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
                <div class="card-header">Change Logo</div>
                <div class="card-body">
				    <div class="heading_btns_area">
				        <div class="col-md-10 ">
				            <h2>Change Logo</h2>
				        </div>
				    </div>
				    <br>
				    <div class="">
				        <div class="header_footer_logos">
				            <div class="col-md-10 col-md-offset-2">
				                <div class="panel panel-primary">
				                    <div class="panel-heading">Header Logo</div>
				                    <div class="panel-body">
				                        <form method="post" action="{{url('logo/store')}}" enctype="multipart/form-data">
				                            <div class="form-group">
				                                <input type="file" name="logo" id="header_logo"  class="form-control">
				                            </div>
				                            {{csrf_field()}}
				                            <button type="submit" class="btn btn-success btn-wide">Upload</button>
				                        </form>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				    <div class="clear40"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

@endsection