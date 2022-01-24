<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffPayment extends Model
{
    protected $guarded = [];
    protected $table = 'staff_payments';
    use HasFactory;
    public function staff(){
        return $this->belongsTo(Staff::class, 'staff_id');
    }

}
