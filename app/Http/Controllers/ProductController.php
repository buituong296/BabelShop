<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}

public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}

public function changeStatus($id)
{
    $product = Product::findOrFail($id);
    $product->status = $product->status === 'in_stock' ? 'out_of_stock' : 'in_stock';
    $product->save();

    return redirect()->route('products.index')->with('success', 'Trạng thái sản phẩm đã được cập nhật!');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa thành công!');
}

    public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:in_stock,out_of_stock',
        'size' => 'required|array',
        'color' => 'required|array',
    ]);

    $product = new Product();
    $product->name = $request->name;
    $product->status = $request->status;
    $product->variations = json_encode([
        'sizes' => $request->size,
        'colors' => $request->color,
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images/products', 'public');
        $product->image = $path;
    }

    $product->save();

    return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm thành công!');
}

}
