@extends('layout')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du BackOffice</h2>
        </div>
        <div class="panel-body">
            <h3>Produit</h3>
            <p>valeur : <b>{{ $backofficeresult['product'] }}</b></p>

            <h3>Prix</h3>
            <p>valeur : <b>{{ $backofficeresult['price'] }}</b></p>

            <h3>Catégorie</h3>
            <p>valeur : <b>{{ $backofficeresult['categories'] }}</b></p>


        </div>
    </div>



@endsection
