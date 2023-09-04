<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{   
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message_subject',
        'message',
        'sent',
        'archived',
        'seen'
    ];
    
    use HasFactory;
}
