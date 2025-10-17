@extends('layouts.app')

@section('content')
<div>
    <h2>Agregar Habilidad</h2>

    <form action="{{ route('ability.store') }}" method="POST">
        @csrf
        <div>
            <label>Descripción</label>
            <br>
            <textarea name="descripcion" rows="5" cols="50"></textarea>
        </div>
        <br>
        <button type="submit">Guardar</button>
        <a href="{{ route('ability.index') }}">Volver</a>
    </form>
</div>
@endsection