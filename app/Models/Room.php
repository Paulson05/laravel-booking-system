<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected  $table = 'rooms';
    protected $guarded = [];
    function Roomtype(){
        return $this->belongsTo(RoomType::class,'room_type_id');
    }
}
