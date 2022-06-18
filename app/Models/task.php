<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $fillable=['clientId','client','completionDate','priority','taskType','taskDescription'];
    public $timestamps = false;

}
