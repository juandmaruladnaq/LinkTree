@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ver red social</h1>
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><i class="far fa-hand-point-left"></i> Volver</a>
    <table class="table table-striped table-hover">
        <tr>
            <th scope="col" style="width: 200px">Id</th>
            <td>{{ $red->id }}</td>
        </tr>
        <tr>
            <th scope="col">Etiqueta</th>
            <td>{{ $red->label }}</td>
        </tr>
        <tr>
            <th scope="col">Enlace</th>
            <td>{{ $red->url }}</td>
        </tr>
        <tr>
            <th scope="col">Propietario</th>
            <td>{{ $red->owner->name }}</td>
        </tr>
        <tr>
            <th scope="col">Creado en</th>
            <td>{{ $red->created_at ?? "Desconocida" }}</td>
        </tr>
        <tr>
            <th scope="col">Actualizado en</th>
            <td>{{ $red->updated_at ?? "Desconocida"  }}</td>
        </tr>
    </table>

    <div class="btn-group" role="group" aria-label="Red options">
        <a href="{{ route('redes.edit', $red->id) }}" class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></a>
        <form action="{{ route('redes.destroy', $red->id) }}" method="post"
            onsubmit="return confirm('¿Esta seguro que desea remover el enlace?')">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" title="Remover"><i class="fas fa-trash"></i></button>
        </form>
    </div>
</div>
@endsection