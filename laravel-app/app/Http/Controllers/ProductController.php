<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        echo "Liste des Produits";
//
    }

    public function show($id){
        echo "Fiche du Produit". $id;
//
    }


}
