
@extends('master')
@section('content')
<table>
    @foreach($users as $user)

<tr><td>Title</td><td>{{ $user->title }}</td></tr>

<tr><td>Firstname</td><td>{{  $user->firstname }}</td></tr>

    <tr><td>Middelname</td><td>{{  $user->middelname }}</td></tr>

<tr><td>Lastname</td><td>{{ $user->lastname }}</td></tr>


    <tr><td>Email</td><td>{{ $user->email }}</td></tr>






    @endforeach
</table>

@stop