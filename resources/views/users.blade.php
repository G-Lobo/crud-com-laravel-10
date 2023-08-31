@extends('master')

@section('content')

<h2>Users</h2>

<a href="{{route('users.create')}}">Create User</a>

<hr>

<ul>
    @foreach ($users as $user)
        <li>{{$user->name}} │
            <a href="{{route('users.edit',['user' => $user->id])}}">Edit</a> │
            <a href="{{route('users.show', ['user' =>$user->id])}}">Show</a>
        </li>
    @endforeach
</ul>


@endsection
