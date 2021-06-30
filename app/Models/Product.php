<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];

    //Representation that one product pertence a uma loja
    public function store()
    {

        return $this->belongsTo(Store::class);
    }

    // Representation that one product can belong to many categories
    public function categories()
    {

        return $this->belongsToMany(Category::class);
    }

    use HasFactory;
}
