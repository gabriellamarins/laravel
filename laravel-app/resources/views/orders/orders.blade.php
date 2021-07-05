@extends('layout')
@section('content')

    <h3>
        @foreach ($orders as $order)
            <p>{{$order->number}}</p>
            <a href="/orders/{{$order->id}}" class="btn btn-primary "> Détails</a>
            <br>
            <br>

        @endforeach
    </h3>















@endsection
