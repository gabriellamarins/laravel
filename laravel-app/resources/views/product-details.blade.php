@extends('layout')
@section('content')

{{--    @foreach ($product as $info)--}}

{{--        --}}{{--        {{$product->name}}--}}
{{--        --}}{{--        <li>{{$product->description}}</li>--}}

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
<div class="col">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="{{$product->name}}">{{$product->name}}</h5>
            <p class="{{$product->description}}">{{$product->description}}</p>
            <p class="{{$product->price}}">{{$product->price}} € </p>
            <a href="#" class="btn btn-primary">Acheter</a>
        </div>
    </div>
</div>
    </div>
</div>


{{--    @endforeach--}}

@endsection






{{--<html lang="">--}}

{{--<h1>--}}
{{--    Affichage du texte dans product-details blade (la product details view)--}}
{{--</h1>--}}


{{--<h1>--}}
{{--    Infos du Produit:--}}

{{--</h1>--}}
{{--{{$infoproduit. ' '. $id}}--}}


{{--</html>--}}
