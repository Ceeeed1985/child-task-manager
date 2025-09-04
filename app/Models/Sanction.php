<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'points',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
