@extends('layouts.app')

@section('content')

<<div class="container">
    <h1>Mis redes</h1>
    <a type="button" class="btn btn-primary mb-4 mt-2" href="{{ route('reds.create') }}"><i class="far fa-plus-square"></i> Crear Red Social</a>
    <table class="table table-striped table-hover">
        <tr>
            <th scope="col">Código</td>
            <th scope="col">Etiqueta</td>
            <th scope="col">URL</td>
            <th scope="col">Opciones</td>
        </tr>

        @foreach ($reds as $red)
            <tr>
                <td>{{ $red->id }}</td>
                <td>{{ $red->label }}</td>
                <td><a href="{{ $red->url }}">{{ $red->url }}</a></td>
                <td>
                    <div class="btn-group" role="group" aria-label="red options">
                        <a href="{{ route('reds.show', $red->id) }}" class="btn btn-info" title="Ver"><i class="far fa-eye"></i></a>
                        <a href="{{ route('reds.edit', $red->id) }}" class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></a>
                        <form action="{{ route('reds.destroy', $red->id) }}" method="post"
                            onsubmit="return confirm('¿Esta seguro que desea remover la red social?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" title="Remover"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
{{-- 
    {{ $reds->reds() }} --}}
</div>

@endsection