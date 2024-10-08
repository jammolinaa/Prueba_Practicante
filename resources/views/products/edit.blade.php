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

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('title', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="price">Body:</label>
                <input type="number" class="form-control" id="price" name="price"
                    value="{{ old('body', $product->price) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Products</button>
        </form>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Regresar</a>
    </div>

@endsection
