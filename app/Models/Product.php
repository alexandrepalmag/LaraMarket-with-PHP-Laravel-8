<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //Representation that one product pertence a uma loja
    public function store()
    {

        return $this->belongsTo(Store::class);
    }

    use HasFactory;
}
