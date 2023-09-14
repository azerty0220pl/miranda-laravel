<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'type',
        'description'
    ];
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user() {
        return $this->hasMany(User::class, 'user_id');
    }
}