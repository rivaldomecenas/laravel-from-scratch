@extends('layout')

@section('content')
    <h1>Edit Project </h1>

    <form action="/projects/{project}" method="POST">
        @csrf 
        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>
        <div>
            <textarea name="description" placeholder="Project Description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection