<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = '=order';
    protected $fillable = [
        
        'customer_name',
        'customer_phone',
        'customer_email',
        'totalQty',
        'totalPrice',
        'event_id',
        'date'
       
        
    ];

}
