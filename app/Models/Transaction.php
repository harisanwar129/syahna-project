<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $table = 'transactions';
    protected $fillable = ['id', 'uuid', 'name', 'email', 'number', 'address', 'transactions_total', 'transactions_status'];
    // protected $guarded = [''];
    protected $hidden = [];



    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
