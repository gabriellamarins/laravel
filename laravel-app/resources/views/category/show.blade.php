@extends('layout')
@section('content')



{{$category->name}}

{{--    @foreach ($categories as $category)--}}
{{--        --}}{{--        {{$product->name}}--}}
{{--        --}}{{--        <li>{{$product->description}}</li>--}}
{{--        <div class="col">--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <img class="card-img-top" src="{{$category -> product->image}}" alt="Card image cap">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 >{{$category ->product->name}}</h5>--}}
{{--                    <p >{{$category ->product->description}}</p>--}}
{{--                    <p >{{$category ->product->price}} € </p>--}}
{{--                    @if($category ->product->quantity > 0)--}}
{{--                        <a href="/product/{{$category->product->id}}" class="btn btn-primary">Acheter</a>--}}

{{--                        <p> Porduit Indisponible</p>--}}
{{--                    @endif--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}
{{--        </div>--}}
{{--        </div>--}}

@endsection
