<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductGallery extends Model
{
    use SoftDeletes;
    protected $table = 'product_galeries';
    protected $fillable = ['id', 'products_id', 'photo', 'is_default'];
    // protected $guarded = [''];
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function getPhotoAttribute($value)
    {

        return url('storage/' . $value);
    }
}
