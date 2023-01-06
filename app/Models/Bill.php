<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
        'property_type' => 'array|string',
        'emptype' => 'array|string',
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'bill_id','id');
    }
}

