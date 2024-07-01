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

    public function favorites()
    {
        return $this->hasMany(favorites::class , 'id_hotel');
    }

    public function favoredByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
