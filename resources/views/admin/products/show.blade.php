@extends('adminlte::page')

@section('content')
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <p><strong>Status:</strong> {{ $product->status }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
    </div>
@endsection
