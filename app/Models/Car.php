<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'carTitle',
        'carPrice',
        'description',
        'published'
    ];
}
