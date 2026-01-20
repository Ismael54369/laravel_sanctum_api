@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Gestión de Productos</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Código</th>
                            <th scope="col">Descripción</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col" class="text-center">Fecha Alta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todosLosProductos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                
                                <td class="fw-bold">{{ $producto->codigo }}</td>
                                
                                <td>{{ $producto->descripcion }}</td>
                                
                                <td class="text-end text-success fw-bold">
                                    {{ number_format($producto->precio, 2) }} €
                                </td>
                                
                                <td class="text-center">
                                    {{ $producto->created_at->format('d/m/Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($todosLosProductos->isEmpty())
                <div class="alert alert-warning text-center mt-3">
                    No hay productos registrados en la base de datos.
                </div>
            @endif

        </div>
    </div>
</div>
@endsection