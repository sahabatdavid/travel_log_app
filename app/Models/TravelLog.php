<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'location',
        'temperature'
    ];
}
