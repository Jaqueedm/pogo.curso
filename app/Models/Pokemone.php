<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemone extends Model
{
    use HasFactory;
    protected $guarded = ['status']; //status

    
    public function getRouteKeyName()
    {
        //return $this->getKeyName();
        return 'slug';
    }
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
