@extends('layouts.app')
@section('title' , 'Edit Blog')
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
                    <form method="post" action="{{url('/blogs/edit', [$blog->id])}}" id="blog_update">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{$blog->title}}" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="6" name="text" placeholder="Enter Description">{{$blog->text}}</textarea>
                            </div>
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary">
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
