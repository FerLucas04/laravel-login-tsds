@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de Tarea</h1>
    <p><strong>ID:</strong> {{ $tarea->id }}</p>
    <p><strong>Nombre:</strong> {{ $tarea->nombre }}</p>
    <p><strong>Creado:</strong> {{ $tarea->created_at }}</p>
    <p><strong>Modificado:</strong> {{ $tarea->updated_at }}</p>
    <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
