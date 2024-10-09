@extends('layouts.app')
@section('content')

<div class="container">
        <h1>Crear Nuevo tasks</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="pasta">Pastas:</label>
                <input type="text" class="form-control" id="pasta" name="pasta" value="{{ old('pasta') }}" required>
            </div>

            <div class="form-group">
                <label for="grano"> Granos:</label>
                <input class="form-control" id="grano" name="grano" rows="4">{{ old('grano') }}</input>
            </div>

            <div class="form-group">
                <label for="harinas"> Harinas:</label>
                <input class="form-control" id="harinas" name="harinas" rows="4">{{ old('harinas') }}</input>
            </div>

            <button type="submit" class="btn btn-primary">Guardar categorias</button>
        </form>

        <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Regresar</a>
    </div>

@endsection
