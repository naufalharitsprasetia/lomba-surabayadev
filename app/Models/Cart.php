<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'cart_user_id', 'id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'cart_product_id', 'id');
    }
}
