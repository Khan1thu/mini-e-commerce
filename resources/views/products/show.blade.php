@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">

</div>
    <div class="d-flex justify-content-around align-items-center">
        <div class="">
            <img src="{{$product->logo ? asset('storage/'. $product->logo) : asset('/images/no-image.png')}}" alt="Card image cap" style="width: 500px; height: 500px;">
        </div>
        <div class="d-flex flex-column justify-content-around">
                <h1>{{$product->name}}</h1>
                <small>made by {{$product->brand}}</small>
                <p>{{$product->description}}</p>
                <p>{{$product->category}}</p>
                <p>${{$product->price}}</p>
        </div>  
        <div>
            @if ($product->user_id == auth()->id())
            <a href={{ $product->id . "/edit"}} >            
                <button class="btn btn-primary">Edit the product</button>
            </a>
            @endif
            <button class="btn btn-primary">cart</button>
        </div>
    </div>
@endsection