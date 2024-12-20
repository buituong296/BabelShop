@extends('adminlte::page')

@section('content')
    <h1>DANH SÁCH MÀU SẮC</h1>
    <a href="{{ route('colors.create') }}" class="btn btn-primary">Thêm màu sắc</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên màu sắc</th>
                <th>Giá trị</th>
                <th>Màu sắc</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colors as $color)
                <tr>
                    <td>{{ $color->id }}</td>
                    <td>{{ $color->name }}</td>
                    <td>{{ $color->value }}</td>
                    <td><input type="color" class="row-3" value="{{ $color->value }}" disabled></td>
                    <td>
                        <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('colors.destroy', $color->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa màu sắc này?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
