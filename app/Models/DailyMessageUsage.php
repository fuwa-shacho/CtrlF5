<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyMessageUsage extends Model
{
    protected $fillable = [
        'used_date',
        'reload_message_id',
    ];

    protected $casts = [
        'used_date' => 'date',
    ];
}