<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    // protected $table = 'Receipe';
    protected $fillable = ['name', 'ingredients', 'category','author_id'];

    public function categories()
    {
        return $this->belongsto(Category::class,'category');
    }
}
