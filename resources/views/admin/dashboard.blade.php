@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- Small box for total products -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalProducts }}</h3>
                    <p>Total Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="{{ route('admin.products.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Small box for total categories -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalCategories }}</h3>
                    <p>Total Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>
                <a href="{{ route('admin.categories.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Small box for total colors -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalColors }}</h3>
                    <p>Total Colors</p>
                </div>
                <div class="icon">
                    <i class="fas fa-palette"></i>
                </div>
                <a href="{{ route('admin.colors.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Small box for total sizes -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalSizes }}</h3>
                    <p>Total Sizes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ruler"></i>
                </div>
                <a href="{{ route('admin.sizes.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
