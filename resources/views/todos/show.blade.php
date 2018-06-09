@extends('layouts.master')
@section('content')
    <a class="btn btn-outline-primary" href="/">Go Back</a>
    <h1><br>
        <a href="todo/{{$todo->id}}">{{ $todo->title }}</a>
    </h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->content }}</p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-outline-info">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'my-2 mr-5']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection