@extends('product.master')

@section('content')

<div>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->detail }}</p>
    <p><img src="$product->detail }}"</p>
</div>
<a href="{{ URL('products') }}">Back to product list</a>
@endsection