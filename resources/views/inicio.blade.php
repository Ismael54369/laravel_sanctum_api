@extends('layouts.app') @section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">¡Hola! Bienvenido a mis Prácticas</h1>
    
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            Esta es una aplicación desarrollada como parte de mis <strong>ejercicios de clase de Laravel</strong>. 
            Aquí iré recopilando las distintas herramientas que vayamos programando.
            Actualmente, el proyecto cuenta con una calculadora funcional que realiza las 4 operaciones básicas.
        </p>
        
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="/calculadora" class="btn btn-primary btn-lg px-4 gap-3">
                Ir a la Calculadora
            </a>
            
            <a href="#" class="btn btn-outline-secondary btn-lg px-4">
                Ver documentación (Próximamente)
            </a>
        </div>
    </div>
</div>
@endsection