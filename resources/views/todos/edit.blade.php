@extends('layouts.master')
@section('content')
    <a class="btn btn-outline-primary" href="{{ route('todos.show', ['id' => $todo->id]) }}">Go Back</a>
    <h1><br>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('title', $todo->title) }}
    {{ Form::bsTextArea('content', $todo->content) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection