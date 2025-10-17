@extends('layouts.app') 

@section('content')
    <div>
        <h2>Lista de Habilidades</h2>
        <br>

        <a href="{{ route('ability.create') }}">Agregar Nueva</a>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ability as $ability)
                    <tr>
                        <td>{{ $ability->codigo }}</td>
                        <td>{{ $ability->descripcion }}</td>
                        <td>
                            <a href="{{ route('ability.edit', $ability) }}">Editar</a>
                            <form action="{{ route('ability.destroy', $ability) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection