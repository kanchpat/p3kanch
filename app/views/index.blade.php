@extends('_master')

@section('title')
Welcome to Developer Tools
@stop

@section('head')
Developer Tools
<br>
-Kanchana Santhanakrishnan
@stop

@section('content')
<br>Lorem Ipsum Generator and fabricator for random users.<br>
@stop

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
