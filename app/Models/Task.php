<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'category_id', 'user_id', 'due_date', 'completed'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}