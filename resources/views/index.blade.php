@extends('layouts.app')

@section('content')
    <h1 class="header">Todos</h1>
    <div class="to-do-container">
            @if(count($todos) > 0)
        @foreach ($todos as $todo)
        <div class="card m-2">
                <h2><a href="todos/{{ $todo->id }}">{{ $todo->title }}</a></h2>
                <p>{{ $todo->content }}</p>
                <div class="due-date"><span>Due date: </span><span class="badge badge-danger">{{ $todo->due }}</span></div>
            </div>
        @endforeach
    @endif
@endsection

</div>

