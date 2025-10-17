 @extends('layouts.app')

@section('content')
<div>
    <h2>Editar Habilidad</h2>

    <form action="{{ route('ability.update', $ability) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Descripción</label>
            <br>
            <textarea name="descripcion" rows="5" cols="50">{{ $ability->descripcion }}</textarea>
        </div>
        <br>
        <button type="submit">Actualizar</button>
        <a href="{{ route('ability.index') }}">Volver</a>
    </form>
</div>
@endsection