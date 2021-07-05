<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function customers() {
        return $this->belongsTo(Customer::class); //select * from user where project_id = x
    }

public function products () {
        return $this->belongsToMany(Product::class);
}



}
