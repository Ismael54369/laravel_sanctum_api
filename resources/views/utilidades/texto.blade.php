@extends('layouts.app')

@section('content')
<div class="card col-md-6 mx-auto mt-4">
    <div class="card-header">Herramienta de Texto</div>
    <div class="card-body">
        <form action="/procesar-texto" method="POST">
            @csrf
            <div class="mb-3">
                <label>Escribe una frase:</label>
                <input type="text" name="cadena" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning">Convertir a Mayúsculas</button>
        </form>

        @if(isset($resultado))
            <div class="alert alert-info mt-3">{{ $resultado }}</div>
        @endif
    </div>
</div>
@endsection