@extends('_master')

@section('title')
Welcome to Developer Tools
@stop

@section('head')
Developer Tools
@stop

@section('errors')
@if($errors->has())
@foreach ($errors->all() as $error)
{{$error}}
@endforeach
@endif
@stop

@section('content')
{{ Form::open(array('url' => '/user', 'method' => 'POST')) }}

{{ Form::label('search','Enter number of users you would like to generate') }}

{{ Form::text('UserEntry'); }}

{{ Form::label('details','Details included') }}
{{ Form::label('profile','Profile') }}
{{ Form::checkbox('Profile','1'); }}
{{ Form::label('address','Address') }}
{{ Form::checkbox('address','1'); }}

{{ Form::submit('Search'); }}

{{ Form::close() }}
@stop

@section('result')
@if(isset($dataReturn))
{{$dataReturn}}
@endif
@stop
@section('back')
<a href="/"> Home</a>
@stop