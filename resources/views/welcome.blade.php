@extends('layout')

@section('title', 'Welcome')

@section('content')

    <h1>{{ $foo }}</h1>
    <h2>Hello world!!</h2>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection
