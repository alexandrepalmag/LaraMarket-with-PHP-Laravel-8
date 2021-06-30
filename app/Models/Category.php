<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'description', 'slug'];

    // Representation that one category can belong to many products
    public function products()
    {

        return $this->belongsToMany(Product::class);
    }

    use HasFactory;
}
