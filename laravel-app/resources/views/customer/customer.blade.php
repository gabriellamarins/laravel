@extends('layout')
@section('content')


    <h1>Détails du Client {{$customer->id}}</h1>

    <br>
    <br>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
{{--                    <img class="card-img-top" src="{{}}" alt="Card image cap">--}}
                    <div class="card-body">
                        <h5 class="{{$customer->first_name}}">{{$customer->first_name}}</h5>
                        <p class="{{$customer->last_name}}">{{$customer->last_name}}</p>
                        <p class="{{$customer->address}}">{{$customer->address}}</p>
                        <p class="{{$customer->city}}">{{$customer->city}}</p>
                        <p class="{{$customer->PC}}">{{$customer->PC}}</p>
                        <a href="#" class="btn btn-primary">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection
