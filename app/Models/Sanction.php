<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'points',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
