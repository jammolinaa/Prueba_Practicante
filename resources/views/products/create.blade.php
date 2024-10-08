@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="title">CREAR NUEVO PRODUCTOS</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="">
                <label for="price">Price:</label>
                <input class="form-control" id="price" name="price" rows="4"></input>
            </div>

              <div class="d-flex mt-4">
                <button type="submit" class="btn btn-success">Guardar products</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
              </div>
        </form>
    </div>

@endsection
