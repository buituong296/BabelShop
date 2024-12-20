<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'user_id',
        'address',
        'city',
        'district',
        'commune',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
