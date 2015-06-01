@extends('layout.base')

@section('title')
	Contact List - PhoneBook
@stop

@section('content')
	@foreach($contacs as $contact)
		<p>{{ $contact }}</p>
	@endforeach
@stop