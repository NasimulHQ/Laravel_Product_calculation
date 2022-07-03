<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProduct extends Model
{
    use HasFactory;
    protected $table = 'inventory_products';
    protected $fillable =
    [
        'inventoryId',
        'productId',
        'rate',
        'qty',
        'discount',
    ];
}
