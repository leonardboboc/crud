
@extends('layouts.master')

@section('content')

<h1>Editare "{{ $task->title }}"</h1>
<p class="lead">Editează și salvează task-ul, sau <a href="{{ route('tasks.index') }}">mergi înapoi la toate task-urile.</a></p>
<hr>

@include('partials.alerts.errors')



{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Titlu:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descriere:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Updatează Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
