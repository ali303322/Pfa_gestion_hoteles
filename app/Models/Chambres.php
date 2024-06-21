<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambres extends Model
{
    protected $fillable = [
        'hotel_id',
        'room_number',
        'type',
        'price',
        'availability',
        'capacity',
        'image_url',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotels::class);
    }
}
