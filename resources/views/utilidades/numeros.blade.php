@extends('layouts.app')

@section('content')
<div class="card col-md-6 mx-auto mt-4">
    <div class="card-header">Par o Impar</div>
    <div class="card-body">
        <form action="/procesar-numeros" method="POST">
            @csrf
            <div class="mb-3">
                <label>Escribe un número:</label>
                <input type="number" name="numero" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Comprobar</button>
        </form>

        @if(isset($resultado))
            <div class="alert alert-info mt-3">{{ $resultado }}</div>
        @endif
    </div>
</div>
@endsection