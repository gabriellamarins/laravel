<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
//        echo "Liste des Produits";

        $listeproduits = "Liste des Produits";


        $arraylisteproduits = [
            'listeproduits' => $listeproduits,

        ];

        return view('product-lis', $arraylisteproduits);
    }

    public function show($id){
 //       echo "Fiche du Produit". $id;
//
        $id;
        $infoproduit = "Fiche du Produit";


        $arrayinfoproduit = [
            'infoproduit' => $infoproduit,
            'id'=> $id,
        ];

        return view('product-details', $arrayinfoproduit);

    }




}
