@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
</div>
<div class="card-body ">
    <form action="{{ route('todo.update',$todo->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{old('title',$todo->title)}}" name="title"></input>
            @error('title')
            <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{ old('description',$todo->description) }}</textarea>
            @error('description')
            <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status">
                <option value=0 @if($todo->status==0) selected='selected'@endif>Pending</option>
                <option value=1 @if($todo->status==1) selected='selected'@endif>Completed</option>
            </select>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn custom-button btn-primary mt-4 ">Submit</button>
            <a type="button" href="{{ route('todo.index')}}"
                class=" btn custom-button btn-secondary ml-2 mt-4 ">Back</a>
        </div>
    </form>
</div>

@endsection
