<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'book_order',
        'check_in',
        'check_out',
        'request',
        'request',
        'room'
    ];

    use HasFactory;
}
