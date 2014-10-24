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
{{ Form::open(array('url' => '/para', 'method' => 'POST')) }}

{{ Form::label('search','Enter number of paragraph you would like to generate') }}

{{ Form::text('NoOfParagraphs'); }}

{{ Form::submit('Search');}}

{{ Form::close() }}

@stop

@section('result')
@if(isset($paragraphs))
{{$paragraphs}}
@endif
@stop
@section('back')
<a href="/"> Home</a>
@stop

