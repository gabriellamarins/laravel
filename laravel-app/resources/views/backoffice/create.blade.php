@extends('layout')
@section('content')

<html lang="">

<h1>
    Back Office
</h1>

<form method="post" action="{{route('backoffice.store')}}">
    @csrf
    <b>Produit</b>
    <input type="texte" name="name"> <br><br>

    <b>Description</b>
    <input type="texte" name="description"> <br><br>

    <b>Prix</b>
    <input type="texte" name="price"> <br><br>

    <b>Image</b>
    <input type="texte" name="image"> <br><br>

    <b>Weight</b>
    <input type="texte" name="weight"> <br><br>

    <b>Quantity</b>
    <input type="texte" name="quantity"> <br><br>

    <b>Available</b>
    <input type="texte" name="available"> <br><br>

      <b>Category</b>
    <input type="texte" name="category_id"> <br><br>





    <input type="submit" value="envoyer"> <br><br>

</form>

@endsection
