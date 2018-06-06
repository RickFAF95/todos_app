@extends('layouts.master')
@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    <h4><a href="todo/{{$todo->id}}">{{ $todo->title }}</a>
                    <span class="badge badge-danger">{{ $todo->due }}</span></h4>
                </li>
            @endforeach
        </ul>
    @endif
@endsection