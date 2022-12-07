<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'category',
        'host_name',
        'location',
        'ticket_type',
        'total_ticket',
        'section_seat',
        'benefit',
        'wallet',
        'percentage',
    ];
}
