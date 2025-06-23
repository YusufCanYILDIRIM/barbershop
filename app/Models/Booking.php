<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'mobile',
        'time',
        'date',
        'branch',
        'number_of_people',
        'comments',
    ];

}
