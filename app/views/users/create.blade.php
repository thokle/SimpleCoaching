@extends('master')
@section('header')
@stop
@section('content')
<div id="content">


    <table>
        {{ Form::open(array('action' => 'UsersController@store')) }}

        <tr><td>{{ Form::label('Title') }}</td><td>{{ Form::input('text','title')}}</td></tr>
        <tr><td>{{ Form::label('Firstname') }}</td><td>{{ Form::input('text','firstname')}}</td></tr>
        <tr><td>{{ Form::label('Middelname') }}</td><td>{{ Form::input('text','middelname')}}</td></tr>
        <tr><td>{{ Form::label('Lastname') }}</td><td>{{ Form::input('text','lastname')}}</td></tr>
        <tr><td>{{ Form::label('Street') }}</td><td>{{ Form::input('text','street')}}</td></tr>
        <tr><td>{{ Form::label('email') }}</td><td>{{ Form::input('email','email')}}</td></tr>

        <tr><td>{{ Form::label('Username') }}</td><td>{{ Form::input('text','username')}}</td></tr>
        <tr><td>{{ Form::label('Password') }}</td><td>{{ Form::input('password','password')}}</td></tr>
      <tr><td>  {{ Form::submit('Create User') }}</td></tr>
        {{Form::close() }}
    </table>
</div>
@stop
