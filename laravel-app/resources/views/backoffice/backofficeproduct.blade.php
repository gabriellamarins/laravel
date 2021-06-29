@extends('layout')
@section('content')

<html lang="">

<h1>
    Back Office
</h1>

<form method="get" action="/backoffice/product">
    @csrf
    <b>Produit</b>
    <input type="texte" name="product"> <br><br>

    <b>Prix</b>
    <input type="texte" name="price"> <br><br>

    <b>Catégorie</b>
    <input type="texte" name="categories"> <br><br>
    <input type="submit" value="envoyer"> <br><br>

</form>

@endsection
