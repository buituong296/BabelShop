@extends('adminlte::page')

@section('content')
    <h1>Add New Size</h1>
    <form action="{{ route('admin.sizes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Size Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
