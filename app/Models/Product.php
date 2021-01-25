<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];
    protected $hidden = [];

    public function galleries()
    {
        // return $this->hasMany(ProductGallery::class,'products_id')
    }
}
