<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    //
    public function index(){
//        echo "Liste des Produits";


        $products = Product::all()
        ->sortBy('price');




        return view('product.product-lis', ['products' => $products]);


    }

    public function show($id){


        $products = Product::find($id);


                return view('product.product-details', ['product' =>$products]);


    }


    public function store(Request $request)
    {

        $validator= Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer|gt:0',

        ]);
if ($validator->fails()) {
    return redirect(route('backoffice.create')->withErrors($validator)->withInput('Les champs signalé son obligatoire'));
}

}
}
