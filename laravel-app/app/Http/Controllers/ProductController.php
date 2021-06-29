<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;



class ProductController extends Controller
{
    //
    public function index(){
//        echo "Liste des Produits";


        $products = Product::all()
        ->sortBy('price');




        return view('product-lis', ['products' => $products]);


    }

    public function show($id){


        $products = Product::find($id);


                return view('product-details', ['product' =>$products]);


    }




}
