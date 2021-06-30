@extends('layout')
@section('content')


<html lang="">

<h1>
    Back Office
</h1>
<br>
<br>
<br>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">


        @foreach ($products as $product)
            {{--        {{$product->name}}--}}
            {{--        <li>{{$product->description}}</li>--}}
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="{{$product->name}}">{{$product->name}}</h5>
                        <p class="{{$product->description}}">{{$product->description}}</p>
                        <p class="{{$product->price}}">{{$product->price}} € </p>
                        <a href="/product/{{$product->id}}" class="btn btn-primary">Acheter</a>
                        <a href="{{route('backoffice.create')}}" class="btn btn-primary">Supprimer ce produit</a>
                    </div>

                </div>

            </div>

        @endforeach
    </div>
</div>
    <a href="{{route('backoffice.create')}}" class="btn btn-primary">Ajouter un nouveau produit</a>






</html>

@endsection
