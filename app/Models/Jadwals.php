<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nohp',
        'confirmDate',
        'confirmJam',
        'confirmService',
        'confirmPrice',
    ];
}
