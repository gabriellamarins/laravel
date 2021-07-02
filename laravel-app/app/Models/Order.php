<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function customer() {
        return $this->belongsTo(Customer::class); //select * from user where project_id = x
    }

//    public function customer() {
//        return $this->belongsTo('App\Models\Customer');
//    }
}
