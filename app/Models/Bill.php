<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class,'bill_id','id');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($user) {
             $user->product()->delete();

        });
    }
}

