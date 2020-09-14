@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
</div>
<div class="card-body ">
    <form>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{ $todo->title }}" class="form-control" readonly></input>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" readonly>{{ $todo->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" value="{{$todo->readablestatus}}" class="form-control" readonly></input>
        </div>

        <div class="d-flex justify-content-center">
            <a type="button" href="{{ route('todo.edit',$todo->id) }}"
                class="btn custom-button btn-primary mt-4 ">Edit</a>
            <a type="button" href="{{ route('todo.index')}}"
                class=" btn custom-button btn-secondary ml-2 mt-4 ">Back</a>
        </div>
    </form>
</div>
@endsection
