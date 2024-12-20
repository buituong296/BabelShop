<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Traits\Searchable;

class ColorController extends Controller
{
    use Searchable;
    public function index(Request $request)
    {
        $query = $request->input('query'); // Lấy từ khóa tìm kiếm từ request
        $colors = $this->search(Color::class, $query, ['name', 'value']); // Dùng trait
        return view('admin.colors.index', compact('colors', 'query'));
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
        ]);

        Color::create($request->all());

        return redirect()->route('colors.index')
            ->with('success', 'Color created successfully.');
    }

    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|min:2|max:255',
        ]);

        // Lấy bản ghi cần xóa
        $color = Color::findOrFail($id);

        // Xóa bản ghi cũ
        $color->delete();

        // Thêm bản ghi mới với dữ liệu đã cập nhật
        Color::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('colors.index')
            ->with('success', 'Cập nhật màu sắc thành công!');
    }


    public function destroy(Color $color)
    {
        $color->delete();

        return redirect()->route('colors.index')
            ->with('success', 'Color deleted successfully.');
    }
}
