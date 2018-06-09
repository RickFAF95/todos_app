@extends('layouts.master')
@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    <h4><a href="{{ route('todos.show', ['id' => $todo->id]) }}">{{ $todo->title }}</a>
                    <span class="badge badge-danger">{{ $todo->due }}</span>
                        @if(!$todo->completed)
                            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="badge badge-success">Mark as completed &nbsp;&nbsp;<i class="fas fa-calendar-check"></i></a>
                        @else
                            <span class="badge badge-info">Completed</span>
                        @endif
                    </h4>

                </li>
            @endforeach
        </ul>
    @endif
@endsection