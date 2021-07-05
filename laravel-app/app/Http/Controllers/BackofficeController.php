<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
//       $request->validated();
        $validator= Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer|gt:0',

        ]);
        if ($validator->fails()) {
            return redirect(route('backoffice.create'))
                ->withErrors($validator)
                ->withInput();
        }




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
              $editproduct = Product::findOrFail($id);
                return view('backoffice.edit',['product'=> $editproduct]);
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

        $updateproduct = Product::findOrFail($id);

        $updateproduct->name = $request->input('name');
        $updateproduct->description = $request->input('description');
        $updateproduct->price = $request->input('price');
        $updateproduct->image = $request->input('image');
        $updateproduct->weight = $request->input('weight');
        $updateproduct->quantity = $request->input('quantity');
        $updateproduct->available = $request->input('available');
        $updateproduct->category_id = $request->input('category_id');

        $updateproduct->save();

        return redirect(route('backoffice.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $products = Product::remove($id);

        Product::findOrFail($id)->delete();

//        return redirect('backoffice.index') ->with('success', 'Produit Supprimé du Catalogue');

        return redirect() -> route('backoffice.index')->with('success', 'Produit Supprimé du Catalogue');


//        return view('backoffice.delete', ['product'=>$products]);
    }
}


