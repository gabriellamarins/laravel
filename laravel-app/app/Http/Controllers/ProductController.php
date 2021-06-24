<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
//        echo "Liste des Produits";

        $listeproduits = "Liste des Produits";
        $products = DB::select('select * from products');
//dd($products); le var dump de laravel
//
//        $arraylisteproduits = [
//            'listeproduits' => $listeproduits,
//
//
//
//        ];


 //      return view('product.index', ['products' => $products]);
        return view('product-lis', ['products' => $products]);
    }

    public function show($id){
 //       echo "Fiche du Produit". $id;
//

//        $infoproduit = "Fiche du Produit";
        $product = DB::select('select * from products where id=:product_id', ['product_id'=>$id]);

//dd($product[0]->name);
//        $arrayinfoproduit = [
//            'infoproduit' => $infoproduit,
//            'id'=> $id,
//        ];

        return view('product-details', ['product' =>$product[0]]);

    }




}
