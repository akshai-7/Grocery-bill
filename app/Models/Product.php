<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

protected $fillable = [
    'bill_id','productname','price','qty','subtotal','tax','taxamount','total'
];

    public function bills()
    {
        return $this->belongsTo(Bill::class);
    }
}
