<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saturday extends Model
{
    use HasFactory;
    protected $table = 'saturdays';
    protected $guarded = [];
}
