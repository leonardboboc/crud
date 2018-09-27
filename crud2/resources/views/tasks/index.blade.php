@extends('layouts.master')

@section('content')

<h1>Lista Task-urilor</h1>
<p class="lead">Aici este o listă cu toate task-urile tale. <a href="{{ route('tasks.create') }}">Adaugi un task nou?</a></p>
<hr>

@foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Vezi Task</a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editează Task</a>
    </p>
    <hr>
@endforeach

@endsection
