@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@endsection

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter category name" required>
        </div>
        <button type="submit" class="btn btn-success">Add Category</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
