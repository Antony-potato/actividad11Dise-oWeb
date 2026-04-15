@extends('layouts.app')

@section('title', 'Fotos')

@section('content')
    <section class="panel">
        <h1>Fotos</h1>
        <p>
            Esta seccion representa una galeria de fotos. Se incluyen bloques visuales de ejemplo
            para mostrar como una vista hija puede cambiar completamente el contenido central sin
            repetir la estructura general del sitio.
        </p>

        <div class="grid">
            <article class="card">
                <h2>Galeria 1</h2>
                <p>Imagen destacada de muestra para la actividad.</p>
            </article>
            <article class="card">
                <h2>Galeria 2</h2>
                <p>Espacio reservado para contenido fotografico adicional.</p>
            </article>
            <article class="card">
                <h2>Galeria 3</h2>
                <p>Ejemplo de tarjeta con descripcion breve de una foto.</p>
            </article>
        </div>
    </section>
@endsection
