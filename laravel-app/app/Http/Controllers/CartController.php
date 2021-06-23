<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //


    public function index(){

       $cart = "Panier";


            $arraypanier = [
                'cart' => $cart,

            ];

            return view('cart', $arraypanier);
        }
//        echo "Panier";


}
