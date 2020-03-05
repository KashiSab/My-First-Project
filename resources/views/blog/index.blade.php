@extends('layouts.app')
@section('title' , 'Contact Page')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 text-right mb-3">
			<a href="{{url('blogs/create')}}" class="btn btn-primary">Add Blog</a>
		</div>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($blogs as $blog)
			<tr id="{{$blog->id}}">
				<td>{{ $blog->title }}</td>
				<td>{{ $blog->text }}</td>
				<td>
					<a href="{{url('blogs/show', [$blog->id])}}"><i class="fa fa-eye"></i></a>
	                <a href="{{url('blogs/edit', [$blog->id])}}"><i class="fa fa-edit"></i></a>
	                <a data-id="{{$blog->id}}" href="#" class="delete-btn"><i class="fa fa-trash"></i></a>
	            </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
@section('js')

<script type="text/javascript">
$(document).on('click','a.delete-btn',function(){
           var id = $(this).data('id');
           var path  = "{{url('blogs/delete/placeholder')}}"; 
            var url  = path.replace('placeholder',id);
            $.ajax({
                url: url,
                type: 'GET',
                success : function(response){
                       if(response){
                        $('tr#'+id).remove();
                        swal({
                              title: "Record Deleted",
                              text: "You Record Delete Successfully",
                              icon: "success",
                              button: "Ok",
                            });
                       } 
                },
                error : function(response){
                      swal({
                         title: "Record Deleted",
                              text: "You Record not Deleted",
                              icon: "error",
                              button: "Ok",});  
                }
            });
    });
</script>
@endsection