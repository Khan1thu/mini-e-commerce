@extends('layouts.app')

@section('content')
<form  action={{url('products/'.$product->id)}} method="POST" class="d-flex flex-column justify-content-center align-items-center background-color:red;" enctype="multipart/form-data">
    @method("PUT")
    {{csrf_field()}}
    <div class="form-group" >
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="{{$product->name}}">
    </div>   
    
    <div class="form-group">
        <label for="brand">brand</label>
        <input type="text" class="form-control" name="brand" id="brand" placeholder="Enter your brand" value="{{$product->brand}}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" value="{{$product->description}}"></textarea>
    </div>

    <div class="form-group">
        <label for="category">Example select</label>
        <select class="form-control" name="category" id="category">
          <option>Fashion</option>
          <option>Food</option>
          <option>Technology</option>
          <option>Books</option>
          <option>Another Things</option>
        </select>
    </div>

    <div class="form-group">
        <label for="price">price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Enter your price" value="{{$product->price}}">
    </div>

    <div class="mb-3">
        <label for="logo" class="form-label">Upload your file</label>
        <input class="form-control" type="file" name="logo"/>
      </div>
    <input type="submit" value="List Product"          class="btn btn-primary"> 
    
</form>
@endsection
