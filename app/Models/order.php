<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [

        'card_holder',
        'credit_card_number',
        'title',
        'price',
    ];
    public $timestamps = false;
}
