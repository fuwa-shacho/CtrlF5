<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyUsage extends Model
{
    protected $fillable = [
        'used_date',
        'count',
        'limit',
    ];

    protected $casts = [
        'used_date' => 'date',
    ];
}