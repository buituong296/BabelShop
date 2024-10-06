<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index() {
        $colors = Color::all();
        return view('admin.colors.index', compact('colors'));
    }

    public function create() {
        return view('admin.colors.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
        ]);
        Color::create($request->all());
        return redirect()->route('admin.colors.index')->with('success', 'Color added successfully');
    }

    public function edit(Color $color) {
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, Color $color) {
        $request->validate([
            'name' => 'required|min:2',
        ]);
        $color->update($request->all());
        return redirect()->route('admin.colors.index')->with('success', 'Color updated successfully');
    }

    public function destroy(Color $color) {
        $color->delete();
        return redirect()->route('admin.colors.index')->with('success', 'Color deleted successfully');
    }
}
