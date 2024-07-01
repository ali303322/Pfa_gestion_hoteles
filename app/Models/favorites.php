<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorites extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        'id_hotel',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotels::class, 'id_hotel');
    }
}
