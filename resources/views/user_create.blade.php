@extends('master')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
    {{session()->get('message')}}

@endif

<form action="{{route('users.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="text" name="email" placeholder="Your Email">
    <input type="text" name="password" placeholder="Your Password">
    <button type="submit">Create</button>
</form>



@endsection
