<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalColors = Color::count();
        $totalSizes = Size::count();

        return view('admin.dashboard', compact('totalProducts', 'totalCategories', 'totalColors', 'totalSizes'));
    }
}

