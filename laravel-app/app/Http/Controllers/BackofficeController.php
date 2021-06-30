<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all()
            ->sortBy('price');

        return view('backoffice', ['products' => $products]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $newproduct = new Product();

        $newproduct->name = $request->input('name');
        $newproduct->description = $request->input('description');
        $newproduct->price = $request->input('price');
        $newproduct->image = $request->input('image');
        $newproduct->weight = $request->input('weight');
        $newproduct->quantity = $request->input('quantity');
        $newproduct->available = $request->input('available');
        $newproduct->category_id = $request->input('category_id');

        $newproduct->save();

        return redirect(route('backoffice.index'));

    }






//        $backoffice = [
//            'backofficeresult' => [
//                'produit' => $request->input('product'),
//                'prix' => $request->input('price'),
//                'categorie' => $request->input('categories'),
//            ],
//        ];




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('backoffice.destroy');
    }
}
