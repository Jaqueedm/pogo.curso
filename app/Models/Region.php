<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    public function pokemones()
    {
        return $this->hasMany('App\Models\Pokemone');
    }
}
