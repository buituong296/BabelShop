@extends('adminlte::page')

@section('content')
    <h1>Edit Size</h1>
    <form action="{{ route('admin.sizes.update', $size->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Size Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $size->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
