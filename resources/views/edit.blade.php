@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
<form method="post" action="/todos/{{$todo->id}}">
            @csrf
            @method('PUT')

            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value=" {{ $todo->title }}">
            </div>

            <div class="form-group">
                <label for="content">What to do?</label>
                <input type="text" class="form-control" name="content" id="content" placeholder="Enter title" value=" {{ $todo->content }}">
                {{-- <textarea type="text" class="form-control" name="content" id="content" rows="3" placeholder="Enter todo" value=" {{ $todo->content }}"></textarea> --}}
            </div>

            <div class="form-group">
                    <label for="due">When needs it to be done?</label>
                    <input type="text" class="form-control" name="due" id="due" placeholder="When needs it to be done?" value=" {{ $todo->due }}">
            </div>



            <button type="submit" class="btn btn-default">Update</button>
        </form>
@endsection