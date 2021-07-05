<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function customers() {
        return $this->belongsTo(Customer::class); //select * from user where project_id = x
    }

public function products () {
        return $this->hasMany(Product::class);
}



}
