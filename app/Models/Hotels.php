<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'rating',
        'phone_number',
        'email',
        'website',
        'image_url',
    ];

    public function rooms()
    {
        return $this->hasMany(Chambres::class);
    }
}
