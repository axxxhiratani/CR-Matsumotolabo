<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutin extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];
}
