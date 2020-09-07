<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    // protected $table = 'Receipe';
    protected $fillable = ['name', 'ingredients', 'category'];
}
