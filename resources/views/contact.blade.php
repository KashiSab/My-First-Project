@extends('layouts.app')
@section('title' , 'Contact Page')
@section('content')
<div class="container">
	<h1>My Latest Blog</h1>
	@foreach ($blogs as $blog)
		<h2>{{ $blog->title }}</h2>
		<p>{{ $blog->text }}</p>
	@endforeach
</div>
@endsection
@section('js')

@endsection