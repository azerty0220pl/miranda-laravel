<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_name',
        'room_type',
        'des',
        'cancel',
        'price',
        'offer'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    
    use HasFactory;
}
