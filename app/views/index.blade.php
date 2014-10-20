@extends('_master')

@section('title')
Welcome to Developer Tools
@stop

@section('head')
Developer Tools
@stop

@section('content')
They are intended for the purpose to assist Developers with mock up information.<br>
User Generator - Generates User information including Profile and address <br>
Paragraph Generator - Generates paragraph information<br>
Password Generator - Generates password</br>
@stop

@section('buttons')
{{ Form::open(array('url' => '/', 'method' => 'POST')) }}
{{ Form::submit('User Generator'); }}
{{ Form::hidden('Users',1); }}
{{ Form::close() }}
{{ Form::open(array('url' => '/', 'method' => 'POST')) }}
{{ Form::submit('Paragraph Generator'); }}
{{ Form::hidden('Paragraph',1); }}
{{ Form::close() }}
{{ Form::submit('Password Generator'); }}
{{ Form::hidden('Password',1); }}
{{ Form::close() }}
@stop
