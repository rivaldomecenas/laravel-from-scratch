@extends('layout')

@section('content')
    
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id}}">
        {{ method_field('PATCH') }}
        @csrf 
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" placeholder="Description">{{ $project->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Update Project</button>
            </div>
        </div>
    </form>
    <form action="/projects/{{$project->id }}" method="POST">
        {{ method_field('DELETE') }}
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>
@endsection