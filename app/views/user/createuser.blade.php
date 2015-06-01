@extends('layout.base')

@section('content')
	{{Form::open(array('url' => 'user/create'))}}
		
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name')}}
		{{ Form::label('lastname', 'Last name') }}
		{{ Form::text('lastname')}}
		{{ Form::label('dni', 'DNI') }}
		{{ Form::text('dni')}}
		{{ Form::label('password', 'Password')}}
		{{ Form::password('password') }}
		{{ Form::submit('Create') }}

	{{Form::close()}}
@stop