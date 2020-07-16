@extends('layouts.app')

@section('content')
<div class="align-right"><a class="btn btn-default" href="/">Go back</a>
</div>
    <h1>{{ $todo->title }}</h1>
    <p class="text-white">{{ $todo->content}}</p>
    <div class="due-date-white"><span>Due date: </span><span class="badge badge-danger">{{ $todo->due }}</span></div>
    <form method="post" action="/todos/{{ $todo->id }}">
        @csrf
        @method('DELETE')
    <button type="submit" class="btn btn-warning mt-2 float-right">Delete</button>
    </form>

    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-secondary mt-2">Edit</a>



@endsection

