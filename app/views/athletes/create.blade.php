@extends('master')
@section('header')
@stop
@section('content')
<div id="content">


    <table>
  {{ Form::open(array('action' => 'AthletesController@store')) }}

@extends('masterform')
{{ Form::submit('Create Athlte') }}
        {{Form::close() }}
    </table>
</div>
@stop
