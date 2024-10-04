<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShadowStock extends Model
{
    use HasFactory;

    protected $fillable = ['quantity'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class); 

    }
}
