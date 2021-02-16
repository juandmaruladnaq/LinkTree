@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar perfil</h1>
    @include('layouts.sub_form-errors')
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><i class="far fa-hand-point-left"></i> Volver</a>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="picture" class="form-label">url foto</label>
            <input type="picture" class="form-control" id="picture" name="picture" value="{{ old('picture', $user->picture ?? "") }}">
        </div>  
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection