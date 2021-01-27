<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $table = 'transaction_details';
    protected $fillable = ['id', 'transactions_id', 'products_status'];
    // protected $guarded = [''];
    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public  function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
