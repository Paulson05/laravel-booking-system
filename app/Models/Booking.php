<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function room(){
        return $this->belongsTo(Room::class);
    }
}
