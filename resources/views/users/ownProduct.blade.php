@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">These are your product</h1>

    @foreach ($products as $product)
        @if ($product->user_id == Auth::user()->id)
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" style="height: 300px;" src="{{$product->logo ? asset('storage/'. $product->logo) : asset('/images/no-image.png')}}" alt="Card image cap">
            <div class="card-body">
              <div class="d-flex justify-content-between" style="width:100%;">
                <h5 class="card-title">{{$product->name}}</h5>
                <h5 class="card-text">{{$product->brand}}</h5>
              </div>
              <p class="card-text">
                {{$product->description}}
              </p>
              <div class="d-flex justify-content-between" style="width:100%;">
                <p class="card-text">{{$product->category}}</p>
                <p class="card-text">{{$product->price}}</p>
              </div>
              <div class="d-flex flex-column justify-content-around align-items-start" >
                <a href="{{url('products/'.$product->id)}}" class="btn btn-primary">View Details</a>
                @if ($product->user_id == auth()->id())
                  <form action={{url('products/'. $product->id)}} method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">Delete The Product</button>
                  </form>
                @endif
              </div>
              
            </div>
          </div>
        @endif        
    @endforeach
@endsection