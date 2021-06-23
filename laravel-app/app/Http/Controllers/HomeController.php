<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
public function index(){

    $test = "Je fais un test.";
    $test2 = "alguma coisa";

    $arraytest = [
        'test' => $test,
        'test2'=> $test2,
    ];

//    echo "Home Page";
        return view('home', $arraytest);
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
