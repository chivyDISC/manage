@extends('layout')

@section('content')
    <h1>Edit Project</h1>
    <form action="/projects/{{$project->id}}" method="POST" >
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        Name:
        <input type="text" name="name" value="{{ $project->name }}">
        Content:
        <input type="text" name="content" value="{{ $project->content }}">
        Start:
        <input type="text" name="start" value="{{ $project->start }}">
        End:
        <input type="text" name="end" value="{{ $project->end }}">
        <button>Update</button>
    </form>
@endsection