@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>Edit Product</h1>
@stop

@section('content')
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="size_id">Size</label>
            <select name="size_id" class="form-control" required>
                @foreach($sizes as $size)
                    <option value="{{ $size->id }}" {{ $product->size_id == $size->id ? 'selected' : '' }}>{{ $size->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="color_id">Color</label>
            <select name="color_id" class="form-control" required>
                @foreach($colors as $color)
                    <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label> <!-- Thêm danh mục -->
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@stop
