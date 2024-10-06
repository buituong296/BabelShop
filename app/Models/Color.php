<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    // Thêm thuộc tính fillable
    protected $fillable = ['name']; // Chỉ định các thuộc tính cho phép mass assignment
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
