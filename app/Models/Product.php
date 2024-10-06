<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
// app/Models/Product.php

protected $fillable = ['name', 'description', 'price', 'image', 'color_id', 'size_id', 'category_id']; // Thêm category_id
public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
