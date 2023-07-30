<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'voltage',
        'brand_id',
        'value',
        'main_image'
    ];


    public function images()
    {
        return $this->morphMany(Image::class, 'image_morph');
    }
}
