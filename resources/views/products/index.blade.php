@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">
  
    <img style="width: 100%; height: 450px;" src="{{url('/images/logos.JPG')}}" alt="">
    <div class="d-flex flex-row  justify-content-around" style="width:100%; margin-top: 25px; margin-bottom: 25px;">
      <a href="/products/create">
        <button type="button" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i> Add product</button>
      </a>
      <form action="/" method="get">
        <div class="input-group">
          <input type="text" name="search" id="" placeholder="Search the product">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
    <div class="d-flex flex-wrap justify-content-around" style="">
    @foreach ($products as $product)
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" style="height: 300px;" src="{{$product->logo ? asset('storage/'. $product->logo) : asset('/images/no-image.png')}}" alt="Card image cap">
            <div class="card-body">
              <div class="d-flex justify-content-between" style="">
                <h5 class="card-title">{{$product->name}}</h5>
                <h5 class="card-text">{{$product->brand}}</h5>
              </div>
              <p class="card-text">
                {{$product->description}}
              </p>
              <div class="d-flex justify-content-between" style="">
                <p class="card-text">{{$product->category}}</p>
                <p class="card-text">{{$product->price}}</p>
              </div>
              @foreach ($users as $user)
                  @if ($user->id == $product->user_id)
                    <div class="d-flex justify-content-between" style="">
                      <small>This product was created by {{$user->name}}</small>
                    </div>
                  @endif
              @endforeach
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
         @endforeach
    </div>
</div> 
@endsection
