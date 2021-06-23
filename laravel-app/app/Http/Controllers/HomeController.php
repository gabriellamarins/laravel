<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
public function index(){

    $test = "Home page";


    $arraytest = [
        'test' => $test,

    ];

//    echo "Home Page";
        return view('homepage', $arraytest);
    }

//    public function show(){
//
//    }
//
//    public function store(){
////
//    }
//
//    public function edit(){
//    }
//
//    public function update(){
////
//    }
//
//    public function destroy(){
////
//    }
}
