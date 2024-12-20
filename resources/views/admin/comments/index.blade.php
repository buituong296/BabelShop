@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1 class="fw-bold">TỔNG QUAN ĐÁNH GIÁ</h1>
@stop

@section('content')
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Đánh giá</th>
                        {{-- <th>Lượt đánh giá</th> --}}
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name}}</td>
                            <td>
                                <span><img src="{{ asset('storage/' . $product->image) }}" width="100" alt=""></span>
                            </td>
                            <td>
                               
                                <div class="d-flex gap-1 fs-sm">
                                    @if (isset($product->rating) && $product->rating > 0)
                                        @php
                                            $fullStars = floor($product->rating);
                                            $halfStar = $product->rating - $fullStars >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - $fullStars - $halfStar;
                                        @endphp
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <i class="fas fa-star text-warning"></i>
                                        @endfor
                                        @if ($halfStar)
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        @endif
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="far fa-star text-body-tertiary opacity-75 text-warning"  ></i>
                                        @endfor
                                    @else
                                        <span>Chưa có đánh giá</span>
                                    @endif
                                </div>
                                
                            </td>
                            {{-- <td>
                                {{ $commentTotal}} đánh giá
                            </td> --}}
                            <td>    
                                <a href="{{route('comment.list',$product->id)}}" class="btn btn-info btn-sm">Xem</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
