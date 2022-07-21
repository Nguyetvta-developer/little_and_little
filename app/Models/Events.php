<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Events extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $fillable = [
        
        'img',
        'img1',
        'img2',
        'title',
        'short_intro',
        'description',
        'end_intro',
        'price',
        'address',
        'start_date',
        'end_date',
        
    ];


}
