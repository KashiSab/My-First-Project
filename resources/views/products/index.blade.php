@extends('layouts.app')
@section('title' , 'All Products')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 text-right">
    		<a href="{{url('products/create')}}" class="btn btn-primary">Add Product</a>
    	</div>
    	<div class="clearfix"></div>
    	<br><br><br>
        <div class="col-md-12">
             <table class="table table-striped table-bordered display" id="product-tbl" style="width:100%">
            	<thead>
            		<tr>
            			<th>Product Name</th>
            			<th>Product Price</th>
            			<th>Product Quntity</th>
            			<th>Action</th>
            		</tr>
            	</thead>
            	<tbody>
        		 	@foreach($products as $product)
                        <tr id="{{$product->id}}">
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quntity}}</td>
                            <td><a href="{{url('products/show', [$product->id])}}"><i class="fa fa-eye"></i></a>
                            	<a href="{{url('products/edit', [$product->id])}}"><i class="fa fa-edit"></i></a>
                        	<a data-id="{{$product->id}}" href="#" class="delete-btn"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')

<script type="text/javascript">
$(document).on('click','a.delete-btn',function(){
           var id = $(this).data('id');
           var path  = "{{url('products/delete/placeholder')}}"; 
            var url  = path.replace('placeholder',id);
            $.ajax({
                url: url,
                type: 'GET',
                success : function(response){
                       if(response){
                        $('tr#'+id).remove();
                        swal({
                              title: "Record Delete",
                              text: "You Record Delete Successfully",
                              icon: "success",
                              button: "Ok",
                            });
                       } 
                },
                error : function(response){
                      swal({
                         title: "Record Delete",
                              text: "You Record not Deleted",
                              icon: "error",
                              button: "Ok",});  
                }
            });
    });
</script>
@endsection