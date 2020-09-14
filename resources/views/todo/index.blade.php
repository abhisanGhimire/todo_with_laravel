@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
    <a type=" button" href="{{ route('todo.create') }}" class=" btn m-1 btn-dark ml-auto">Add Task</a>
</div>
<div class="card-body ">
    @include('todo.flash')
    @foreach($todos as $todo)
    <div class="card mt-2">
        <div class="d-flex ">
            <button type="button" class="btn btn-primary m-1" disabled>{{ $number++ }}</button>
            <button type="button"
                class="mr-auto btn m-1 btn-light  btn-block text-left font-weight-bold text-capitalize" disabled>
                @if($todo->status==1)<s> {{$todo->title }}</s>
                @else
                {{$todo->title }}
                @endif
            </button>
            <a type="button" href="{{ route('todo.show',$todo->id) }}"
                class="btn custom-button btn-primary m-1">Show</a>
            <a type="button" href="{{ route('todo.edit',$todo->id) }}"
                class="btn custom-button btn-success m-1">Edit</a>
            <form action="{{ route('todo.destroy',$todo->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn custom-button btn-danger m-1" value="delete">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
