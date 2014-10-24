@extends('_master')

@section('title')
Welcome to Developer Tools
@stop

@section('head')
Developer's Best Friend
<br>
-Kanchana Santhanakrishnan
@stop

@section('content')
<br>Lorem Ipsum Generator - Filler text created randomly &&
<br>Fabricator for random users<br>
@stop

//Submit buttons using the Form laravel
@section('buttons')
{{ Form::open(array('url' => '/', 'method' => 'POST')) }}
{{ Form::submit('User Fabricator'); }}
{{ Form::hidden('Users',1); }}
{{ Form::close() }}
<br>
<br>
{{ Form::open(array('url' => '/', 'method' => 'POST')) }}
{{ Form::submit('Lorem Ipsum Generator'); }}
{{ Form::hidden('Paragraph',1); }}
{{ Form::close() }}
@stop
