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
        'carImage',
        'published',
        'category_id',
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function vendor()
    {
        return $this->belongsToMany(Vendor::class);
    }

}
