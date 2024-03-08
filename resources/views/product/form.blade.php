@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success')}}
    @php
    Session::forget('success')
    @endphp

</div>
@endif
@if(Session::has('userId'))
<form action="{{ route('productStore') }} " method="post">
    @csrf
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
  </div>

  <div class="form-group">
    <label for="product_price">Product Price</label>
    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
        <option value="">--Select--</option>
        @if($categories)
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ ucfirst($cat->name)}}</option>
        @endforeach
        @endif
      
      
    </select>
  </div>
  
  <div class="form-group">
    <label for="desc">Product Description</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="submit" value="Add Product">
  </div>

</form>
@else
<h1>You are not authorize: Please login</h1>
@endif

</div>
@endsection