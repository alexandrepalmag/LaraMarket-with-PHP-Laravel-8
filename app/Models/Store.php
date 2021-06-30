<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    //Representation that a store belongs to a user.
    public function user()
    {

        $this->belongsTo(User::class);
    }
}
