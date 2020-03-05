@extends('layouts.app')
@section('title' , 'Create Blog')
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
                <div class="card-header">Blog From</div>
                <div class="card-body">
                    <form method="post" action="{{url('/blogs/save')}}" id="blog_store">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="6" name="text" placeholder="Enter Description"></textarea>
                            </div>
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script type="text/javascript">
</script>
@endsection
