@extends('layout')
@section('content')

<h1>Modifier un produit:</h1>


    <form action ="{{route ('backoffice.update', $product->id)}}" method="post">
            @csrf
            @method('PUT')


            <b>Produit</b>
            <input type="texte" class="'form-control" id=""  name="name" placeholder="Nom" value="{{$product->name}}"> <br><br>

            <b>Description</b>
            <input type="texte" class="'form-control" id="" name="description" value="{{$product->description}}"><br><br>

            <b>Prix</b>
            <input type="texte" class="'form-control" id="" name="price" value="{{$product->price}}"> <br><br>

            <b>Image</b>
            <input type="texte" class="'form-control" id="" name="image" value="{{$product->image}}" ><br><br>

            <b>Weight</b>
            <input type="texte" class="'form-control" id="" name="weight" value="{{$product->weight}}"> <br><br>

            <b>Quantity</b>
            <input type="texte" class="'form-control" id=""  name="quantity" value="{{$product->weight}}"> <br><br>

            <b>Available</b>
            <input type="texte" class="'form-control" id=""  name="available" value="{{$product->available}}"> <br><br>

            <b>Category</b>
            <input type="texte" class="'form-control" id="" name="category_id" value="{{$product->category}}"> <br><br>


        <button type="submit" class="btn btn-primary">Sauvegarder les changements</button>
    </form>




@endsection



{{--{{route('backoffice.destroy')}}--}}
