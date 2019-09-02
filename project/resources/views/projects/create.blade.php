@extends('layout')

@section('title','Create Project')

@section('content')
    <h1 class="title">Create a New Project </h1>

    <form action="/projects" method="POST">
        @csrf 
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Project Title">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Project Description"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>
    </form>
@endsection