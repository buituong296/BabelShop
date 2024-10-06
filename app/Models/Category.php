<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Thêm thuộc tính fillable
    protected $fillable = ['name']; // Thêm 'name' vào đây
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
