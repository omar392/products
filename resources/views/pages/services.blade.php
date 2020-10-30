@extends('layout.app')
@section('content')
    <h1>Welcome To Services Page</h1>
    @foreach ($products as $product)
        <div class="well">
        <h1><a href="/show/{{$product->id}}">{{$product->product_name}}</a></h1>
        <h3>{{$product->product_price}}</h3>
      {{--  <p>{{$product->product_description}}</p>
        <h4>{{$product->created_at}}</h4>--}}
        <hr>
        </div>
    @endforeach
    {{$products->links()}}
@endsection