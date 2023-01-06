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
protected $casts = [
    'id' => 'string',
    'property_type' => 'array|string',
    'emptype' => 'array|string',
];
    public function bills()
    {
        return $this->belongsTo(Bill::class);
    }
}
