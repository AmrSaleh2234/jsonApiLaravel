<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rating'];

    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
