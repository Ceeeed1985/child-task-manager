<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'points',
        'initiative_points',
        'is_initiative',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
