<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $casts = [
        'artists' => 'array',
        'writers' => 'array',
    ];

    protected $fillable = [
        'title',
        'price',
        'series',
        'sale_date',
        'thumb',
        'type',
        'artists',
        'writers',
        'description',
    ];
}
