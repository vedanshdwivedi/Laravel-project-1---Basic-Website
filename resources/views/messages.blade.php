
@extends('layouts.app')

@section('content')
	<h1>Messages</h1>
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item list-group-item-action">Name: {{$message->name}}</li>
				<li class="list-group-item list-group-item-action">Email: {{$message->email}}</li>
				<li class="list-group-item list-group-item-action">Message: {{$message->message}}</li>
			</ul>
			<br>
		@endforeach
	@endif
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection
