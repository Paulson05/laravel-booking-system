<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monday extends Model
{
    use HasFactory;
    protected $table = 'mondays';
    protected  $guarded = [];
}
