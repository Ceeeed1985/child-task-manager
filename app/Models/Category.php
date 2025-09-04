<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Sanction;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function sanctions(){
        return $this->hasMany(Sanction::class);
    }
}
