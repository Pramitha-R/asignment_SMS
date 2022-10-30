<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'AppointmentId',
        'staff',
        'date',
        'time',
        'service',
        'serviceID',
        'staffID',
    ];
}
