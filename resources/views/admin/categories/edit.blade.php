@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
    <h1>Edit Category</h1>
@endsection

@section('content')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
