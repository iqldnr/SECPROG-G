<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'uploader',
        'price',
        'stock',
        'description'
    ];
    public $timestamps = false;
}
