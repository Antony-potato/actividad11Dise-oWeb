@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <section class="contact-form">
        <h1>Contacto</h1>
        <p>
            Este formulario es una simulacion para la actividad. Su objetivo es mostrar una tercera
            vista heredada usando la misma plantilla Blade principal.
        </p>

        <form>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" placeholder="Escribe tu nombre">
            </div>

            <div class="form-group">
                <label for="correo">Correo electronico</label>
                <input id="correo" name="correo" type="email" placeholder="nombre@ejemplo.com">
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escribe aqui tu mensaje"></textarea>
            </div>

            <button type="button">Enviar</button>
        </form>
    </section>
@endsection
