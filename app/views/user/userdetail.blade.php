@extends('layout.base')

@section('title')
	User Detail - PhoneBook
@stop

 @section('content')
 	@parent
 	{{ $data->name }}
 	{{ $data->lastname }}
 @stop