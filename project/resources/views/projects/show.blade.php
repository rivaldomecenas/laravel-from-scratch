@extends('layout')

@section('title','Project')

@section('content')

    <h1 class="title" > {{ $project->title }} </h1>

    <div class="content">
        {{ $project->description }}
    </div>

    <p>
        <a class="button" href="/projects/{{$project->id}}/edit">Edit</a>
    </p>

@endsection