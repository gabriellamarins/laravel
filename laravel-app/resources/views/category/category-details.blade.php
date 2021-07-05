@extends('layout')
@section('content')



<h1>
    {{$category->name}}
    </h1>
<div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach ($category as $cat)
{{--        {{$cat->name}}--}}
{{--        @php(   dd($cat))--}}
@foreach($category -> products as $product)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 >{{$product->name}}</h5>
                    <p >{{$product->description}}</p>
                    <p >{{$product->price}} € </p>
                    @if($product->quantity > 0)
                        <a href="/product/{{$product->id}}" class="btn btn-primary">Acheter</a>
                    @else
                        <p> Porduit Indisponible</p>
                        @break
                    @endif


                </div>
            </div>
        </div>

    @endforeach
                @break
            @endforeach
        </div>
</div>



@endsection
