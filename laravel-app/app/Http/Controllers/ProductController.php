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



        $listeproduits = "Liste des Produits";
//        $products = DB::select('select * from products');


        return view('product-lis', ['products' => $products]);

    }

    public function show($id){
 //       echo "Fiche du Produit". $id;
//
        $products = Product::find($id);
//            ->take(5)
//            ->get();



////        $infoproduit = "Fiche du Produit";
//        $product = DB::select('select * from products where id=:product_id', ['product_id'=>$id]);

//dd($product[0]->name);
//        $arrayinfoproduit = [
//            'infoproduit' => $infoproduit,
//            'id'=> $id,
//        ];

//        return view('product-details', ['product' =>$products[0]]);
                return view('product-details', ['product' =>$products]);


    }




}
