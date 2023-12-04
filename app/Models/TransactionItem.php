<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionItem extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'transaction_id',
        'quantity',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
