@extends('adminlte::page')

@section('content')
    <h1>Colors List</h1>
    <a href="{{ route('admin.colors.create') }}" class="btn btn-primary">Add New Color</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colors as $color)
                <tr>
                    <td>{{ $color->id }}</td>
                    <td>{{ $color->name }}</td>
                    <td>
                        <a href="{{ route('admin.colors.edit', $color->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.colors.destroy', $color->id) }}" method="POST" style="display:inline-block;">
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
