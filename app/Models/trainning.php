<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainning extends Model
{
    use HasFactory;

    protected $table = 'flight'; // de tro thang vao bang flight
    protected $fillable = [
        'title',
        'priority',
        'done',
    ];
}
