
@extends('layouts.master')

@section('content')

<h1>Adaugă un nou task</h1>
<p class="lead">Adaugă mai jos titlul și descrierea task-ului.</p>
<hr>



{!! Form::open([
    'route' => 'tasks.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Titlu:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descriere:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

@include('partials.alerts.errors')



{!! Form::submit('Crează un nou task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
