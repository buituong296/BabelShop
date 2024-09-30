@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $product->name }}</h3>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
            <p>Trạng thái: {{ $product->status === 'in_stock' ? 'Còn hàng' : 'Hết hàng' }}</p>

            @php
                $variations = json_decode($product->variations);
            @endphp

            <p>Kích thước:
                @if(isset($variations->sizes) && is_array($variations->sizes))
                    {{ implode(', ', $variations->sizes) }}
                @else
                    Chưa có kích thước
                @endif
            </p>

            <p>Màu sắc:
                @if(isset($variations->colors) && is_array($variations->colors))
                    {{ implode(', ', $variations->colors) }}
                @else
                    Chưa có màu sắc
                @endif
            </p>

            <a href="{{ route('products.index') }}" class="btn btn-primary">Quay lại</a>
        </div>
    </div>
</div>
@endsection

