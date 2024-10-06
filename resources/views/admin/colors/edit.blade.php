@extends('adminlte::page')

@section('content')
    <h1>Edit Color</h1>
    <form action="{{ route('admin.colors.update', $color->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Color Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $color->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
