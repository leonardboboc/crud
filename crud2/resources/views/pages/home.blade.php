

@extends('layouts.master')

@section('content')

<h1>Pagina Principală</h1>
<p class="lead">Aplicație Web pentru gestionare task-uri.</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">Vezi Task-uri</a>
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Adaugă un nou Task</a>

@endsection

