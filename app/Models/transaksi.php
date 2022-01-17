<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'userid',
        'alamatkirim',
        'status',
        'total_harga'
    ];
    use HasFactory;
}
