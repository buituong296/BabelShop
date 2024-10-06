<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function index() {
        $sizes = Size::all();
        return view('admin.sizes.index', compact('sizes'));
    }

    public function create() {
        return view('admin.sizes.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
        ]);
        Size::create($request->all());
        return redirect()->route('admin.sizes.index')->with('success', 'Size added successfully');
    }

    public function edit(Size $size) {
        return view('admin.sizes.edit', compact('size'));
    }

    public function update(Request $request, Size $size) {
        $request->validate([
            'name' => 'required|min:2',
        ]);
        $size->update($request->all());
        return redirect()->route('admin.sizes.index')->with('success', 'Size updated successfully');
    }

    public function destroy(Size $size) {
        $size->delete();
        return redirect()->route('admin.sizes.index')->with('success', 'Size deleted successfully');
    }
}
