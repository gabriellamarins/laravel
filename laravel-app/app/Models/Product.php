<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
//   protected $primaryKey = 'product_id';

    protected $fillable = [
        'id', 'name',  'description','price',
    ];



    public function category() {
        return $this->belongsTo( Category::class, 'category_id', 'id');

    }

public function orders() {
        return $this->belongsToMany(Orders::class);
}


//public function orderAsProduct() {
//        return $this->belongsToMany(Orders::class);
//}


}
