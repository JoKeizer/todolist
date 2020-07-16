@extends('layouts.app')

@section('content')
    <h1>Create new Todo</h1>
    <form method="post" action="/todos">
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value=" {{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="content">What to do?</label>
                <input type="text" class="form-control" name="content" id="content" placeholder="Enter title" value=" {{ old('content') }}">

                {{-- <textarea type="text" class="form-control" name="content" id="content" rows="3" placeholder="Enter content" value=" {{ old('content') }}"></textarea> --}}
            </div>

            <div class="form-group">
                    <label for="due">When needs it to be done?</label>
                    <input type="text" class="form-control" name="due" id="due" placeholder="When needs it to be done?" value=" {{ old('due') }}">
                </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
@endsection