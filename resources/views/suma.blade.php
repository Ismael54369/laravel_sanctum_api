@extends('layouts.app') @section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-white">
                <h4 class="mb-0">Calculadora</h4>
            </div>
            <div class="card-body">
                
                <form action="/hacer-calculo" method="POST">
                    @csrf <div class="mb-3">
                        <label class="form-label">Número 1:</label>
                        <input type="number" name="numero1" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Operación:</label>
                        <select name="operacion" class="form-select">
                            <option value="+">Sumar (+)</option>
                            <option value="-">Restar (-)</option>
                            <option value="*">Multiplicar (*)</option>
                            <option value="/">Dividir (/)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Número 2:</label>
                        <input type="number" name="numero2" class="form-control" required>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Calcular Resultado</button>
                        <a href="/" class="btn btn-outline-secondary">Volver al inicio</a>
                    </div>
                </form>

                @if(isset($resultado))
                    <div class="alert alert-success mt-4 text-center">
                        <h3>Resultado: {{ $resultado }}</h3>
                    </div>
                @endif

                @if(isset($error))
                    <div class="alert alert-danger mt-4 text-center">
                        {{ $error }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection