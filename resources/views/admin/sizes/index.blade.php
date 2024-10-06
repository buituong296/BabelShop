@extends('adminlte::page')

@section('content')
    <h1>Sizes List</h1>
    <a href="{{ route('admin.sizes.create') }}" class="btn btn-primary">Add New Size</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sizes as $size)
                <tr>
                    <td>{{ $size->id }}</td>
                    <td>{{ $size->name }}</td>
                    <td>
                        <a href="{{ route('admin.sizes.edit', $size->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.sizes.destroy', $size->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
