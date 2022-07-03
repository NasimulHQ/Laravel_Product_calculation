<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = 
    [
        'date',
        'billNo',
        'customerId',
        'totalDiscount',
        'totalBillAmount',
        'dueAmount',
        'paidAmount',
    ];
}
