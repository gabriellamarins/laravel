@extends('layout')
@section('content')



{{--{{$category->name}}--}}

    @foreach ($categories as $category)
                {{$category->name}}
{{--@php(dd ($category))--}}
        @endforeach


@endsection
