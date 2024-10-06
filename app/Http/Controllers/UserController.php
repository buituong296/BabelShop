<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Models\Color;
use App\Models\Size;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::with('size', 'color', 'category')->get(); // Lấy tất cả sản phẩm với kích thước, màu sắc và danh mục
        return view('user.home', compact('products'));
    }

    public function create()
    {
        $sizes = Size::all(); // Lấy tất cả kích thước
        $colors = Color::all(); // Lấy tất cả màu sắc
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('admin.products.create', compact('sizes', 'colors', 'categories')); // Chuyển danh mục sang view
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'size_id' => 'required|exists:sizes,id',
        'color_id' => 'required|exists:colors,id',
        'category_id' => 'required|exists:categories,id',
        'description' => 'nullable|string', // Thêm dòng này
        'image' => 'image|nullable',
    ]);

    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->size_id = $request->size_id;
    $product->color_id = $request->color_id;
    $product->category_id = $request->category_id;
    $product->description = $request->description; // Thêm dòng này

    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }

    $product->save();
    return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
}


    public function edit(Product $product)
    {
        $sizes = Size::all();
        $colors = Color::all();
        $categories = Category::all(); // Lấy danh mục
        return view('admin.products.edit', compact('product', 'sizes', 'colors', 'categories')); // Chuyển danh mục sang view
    }

    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'size_id' => 'required|exists:sizes,id',
        'color_id' => 'required|exists:colors,id',
        'category_id' => 'required|exists:categories,id',
        'description' => 'nullable|string', // Thêm dòng này
        'image' => 'image|nullable',
    ]);

    $product->name = $request->name;
    $product->price = $request->price;
    $product->size_id = $request->size_id;
    $product->color_id = $request->color_id;
    $product->category_id = $request->category_id;
    $product->description = $request->description; // Thêm dòng này

    if ($request->hasFile('image')) {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->image = $request->file('image')->store('products', 'public');
    }

    $product->save();
    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
}

    public function destroy(Product $product)
    {
        // Xóa ảnh cũ nếu có
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
