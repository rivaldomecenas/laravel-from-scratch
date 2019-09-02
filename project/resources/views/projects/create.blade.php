@extends('layout')

@section('title','Create Project')

    <h1>Create a New Project </h1>

    <form action="/projects" method="POST">
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