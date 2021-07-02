@extends('layout')
@section('content')

<html lang="">

<h1>
    Back Office
</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>ERROR</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('backoffice.store')}}">
    @csrf
    <b>Produit</b>
    <input type="texte" name="name" required> <br><br>

    <b>Description</b>
    <input type="texte" name="description"> <br><br>

    <b>Prix</b>
    <input type="number" min="1" name="price" required> <br><br>

    <b>Image</b>
    <input type="texte" name="image"> <br><br>

    <b>Weight</b>
    <input type="number" name="weight" required> <br><br>

    <b>Quantity</b>
    <input type="number" min="1" name="quantity" required> <br><br>

    <b>Available</b>
    <input type="number" min="0" max="1" name="available" required> <br><br>

      <b>Category</b>
    <input type="number" min="1" name="category_id" required> <br><br>





    <input type="submit" value="envoyer"> <br><br>

</form>







@endsection
