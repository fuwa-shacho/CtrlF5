<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReloadMessage extends Model
{
    protected $fillable = [
        'category',
        'message',
        'emoji',
    ];
}