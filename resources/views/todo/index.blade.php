@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
    <button type="button" class="ml-auto btn m-1 btn-dark">Add Task</button>
</div>
<div class="card-body ">
    @foreach($todos as $todo)
    <div class="card ">
        <div class="d-flex ">
            <button type="button" class="btn btn-primary m-1" disabled>{{ $todo->id }}</button>
            <button type="button"
                class="mr-auto btn m-1 btn-light  btn-block text-left font-weight-bold text-capitalize" disabled>
                {{$todo->title }}
            </button>
            <button type="button" class="btn custom-button btn-primary m-1">Show</button>
            <button type="button" class="btn custom-button btn-success m-1">Edit</button>
            <form action="{{ route('destroy',$todo->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn custom-button btn-danger m-1" value="delete">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
