@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
</div>
<div class="card-body ">
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label><br>
            <input type="text" class="form-control" value="{{old('title')}}" name="title"></input>
        </div>
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea class="form-control" name="description">{{ old('description') }}</textarea>
        </div>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="status">Status</label>
        <select class="form-control" name="status">
            <option value=0>Pending</option>
            <option value=1>Completed</option>
        </select>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn custom-button btn-primary mt-4 ">Submit</button>
            <button type="button" class="btn custom-button btn-secondary ml-2 mt-4 ">Back</button>
        </div>
    </form>
</div>
@endsection
