<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtube extends Model
{
    protected $table = 'yt';

    protected $fillable = [
        'link',
        'title',
        'likes'
    ];
}
