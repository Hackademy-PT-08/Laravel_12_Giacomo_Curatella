<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Picture extends Model
{
    use HasFactory;

    public $fillable = ['title', 'description', 'image', 'price'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
