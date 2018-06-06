@extends('layouts.master')
@section('content')
    <a class="btn btn-outline-primary" href="/">Go Back</a>
    <h1><br>
        <a href="todo/{{$todo->id}}">{{ $todo->title }}</a>
    </h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
@endsection