@extends('todo.main')

@section("content")
<div class="card-header d-flex justify-content-center">
    <h3>Todo with Laravel</h3>
</div>
<div class="card-body ">
    <button type="button" class="d-flex justify-content-center btn mt-3  btn-primary  btn-block " disabled>
        Todo with Laravel is an application that allows to manage a list of tasks to do
    </button>
    <button type="button" class="d-flex justify-content-center btn mt-3 btn-light  btn-block" disabled>
        It performs adding, updating,
        deleting
        and toggling state of each task
    </button>
    <button type="button" class="d-flex justify-content-center mt-3  btn  btn-success  btn-block" disabled>
        It has minimalistic design and basic functionality
    </button>
</div>

@endsection
@section('justforwelcome')
<div class="container align-middle mt-5">

    <div class="card">
        <div class="alert alert-success mt-3 d-flex justify-content-center">
            <a href="{{ route('todo.index') }}"> Click here to visit a demo version of the application </a>
        </div>
    </div>
</div>
@endsection
