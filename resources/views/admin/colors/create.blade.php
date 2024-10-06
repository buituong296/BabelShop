@extends('adminlte::page')

@section('content')
    <h1>Add New Color</h1>
    <form action="{{ route('admin.colors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Color Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
