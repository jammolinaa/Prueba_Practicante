@extends('layouts.app')
@section('content')
   <div class="container">
        <h1>Editar Task</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="pastas">Pastas:</label>
                <input type="text" class="form-control" id="pasta" name="pastsa"
                    value="{{ old('pastas', $categoria->pastas) }}" required>
            </div>

            <div class="form-group">
                <label for="granos">Gramos:</label>
                <input type="text" class="form-control" id="gramos" name="granos"
                    value="{{ old('granos', $categoria->granos) }}" required>
            </div>

            <div class="form-group">
                <label for="harinas">Harinas:</label>
                <input type="text" class="form-control" id="harinas" name="harinas"
                    value="{{ old('harinas', $categoria->harinas) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Task</button>
        </form>

        <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-3">Regresar</a>
    </div>

@endsection
