@extends('layouts.app')
@section('title' , 'All Customers')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 text-right">
    		<a href="{{url('customer/create')}}" class="btn btn-primary">Add Customer</a>
    	</div>
    	<div class="clearfix"></div>
    	<br><br><br>
        <div class="col-md-12">
             <table class="table table-striped table-bordered display" id="customer-tbl" style="width:100%">
            	<thead>
            		<tr>
            			<th>Customer Name</th>
            			<th>Phone Number</th>
            			<th>Paid</th>
            			<!-- <th>Unpaid</th> -->
            			<th>Action</th>
            		</tr>
            	</thead>
            	<tbody>
        		 	@foreach($customers as $customer)
                        <tr id="{{$customer->id}}">
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->phone_no}}</td>
                            <td>{{$customer->paid == 1 ? 'Yes' : 'No'}}</td>
                            <!-- <td>{{$customer->unpaid}}</td> -->
                            <td><a href="{{url('customer/show', [$customer->id])}}"><i class="fa fa-eye"></i></a>
                            	<a href="{{url('customer/edit', [$customer->id])}}"><i class="fa fa-edit"></i></a>
                        	<a data-id="{{$customer->id}}" href="#" class="delete-btn"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- {{url('customer', [$customer->id])}} -->
<script type="text/javascript">

    $(document).on('click','a.delete-btn',function(){
           var id = $(this).data('id');
           var path  = "{{url('customer/delete/placeholder')}}"; 
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