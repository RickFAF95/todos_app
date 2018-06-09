@extends('layouts.master')
@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('title') }}
        {{ Form::bsTextArea('content') }}
        {{ Form::bsText('due') }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection