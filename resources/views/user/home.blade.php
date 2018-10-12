@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User List</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead></thead>
                        <tbody>
                             @foreach($user as $us)
                            <tr>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td><a href="{{url('products/edit'.$us->id)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
