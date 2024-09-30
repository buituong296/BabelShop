@extends('layouts.app')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <th>Kích thước</th>
                            <th>Màu sắc</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                            width="100">
                                    @else
                                        <span>Chưa có hình ảnh</span>
                                    @endif
                                </td>
                                <td>{{ $product->status === 'in_stock' ? 'Còn hàng' : 'Hết hàng' }}</td>
                                <!-- Hiển thị kích thước (sizes) -->
                                <td>
                                    @php
                                        $variations = json_decode($product->variations, true);
                                    @endphp

                                    @if (!empty($variations['sizes']))
                                        {{ implode(', ', $variations['sizes']) }}
                                    @else
                                        Không có kích thước
                                    @endif
                                </td>

                                <!-- Hiển thị màu sắc (colors) -->
                                <td>
                                    @if (!empty($variations['colors']))
                                        {{ implode(', ', $variations['colors']) }}
                                    @else
                                        Không có màu sắc
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Chi tiết</a>
                                    <form action="{{ route('products.changeStatus', $product->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Chuyển trạng thái</button>
                                    </form>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
