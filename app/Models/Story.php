<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'name',
        'image',
        'bio',
        'facebook',
        'instagram',
        'whatsapp'
    ];
}
