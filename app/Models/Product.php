<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Discount;
use App\Models\Inventory;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function discounts() : HasMany
    {
        return $this->belongsToMany(Discount::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);  

    }
    public function inventory(): HasOne
    {
       return $this->hasOne(Inventory::class);
    }

}
