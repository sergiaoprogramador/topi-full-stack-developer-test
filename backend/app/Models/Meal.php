<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $table = 'meals';

    protected $casts = [
        'tags' => 'object',
        'ingredients' => 'object',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
