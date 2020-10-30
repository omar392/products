@extends('layout.app')
@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
        {{Session::put('success',null)}}
    </div>
@endif
<form action="{{URL('/saveproduct')}}" method="POST" class="form-horizontal">
@csrf
<div class="container">
<div class="form-group">
    <label>Product</label>
    <input type="text" name="product_name" placeholder="Product Name" class="form-control" required>
</div>
<div class="form-group">
    <label>Product Price</label>
    <input type="text" name="product_price" placeholder="Product Price" class="form-control" required>
</div>
<div class="form-group">
    <label>Product Description</label>
    <textarea name="product_description" cols="30" rows="10" class="form-control" required></textarea>
</div>
<input type="submit" value="Add Product" class="btn btn-primary">
</div>
</form>

@endsection