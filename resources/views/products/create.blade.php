@extends('layouts.app')

@section('title', 'Thêm sản phẩm')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm sản phẩm</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="image">Hình ảnh:</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="status">Trạng thái:</label>
                    <select class="form-control" name="status" id="status" required>
                        <option value="in_stock">Còn hàng</option>
                        <option value="out_of_stock">Hết hàng</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="size">Kích thước:</label>
                    <input type="text" class="form-control" name="size[]" placeholder="Kích thước 1" required>
                    <input type="text" class="form-control mt-2" name="size[]" placeholder="Kích thước 2" required>
                </div>

                <div class="form-group">
                    <label for="color">Màu sắc:</label>
                    <input type="text" class="form-control" name="color[]" placeholder="Màu sắc 1" required>
                    <input type="text" class="form-control mt-2" name="color[]" placeholder="Màu sắc 2" required>
                </div>

                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</div>
@endsection
