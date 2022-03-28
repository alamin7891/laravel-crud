@extends('product.master')
@section('content')
                    <h1 class="text-center">Product Entry</h1>
                    <form action="{{ ROUTE('products.update', $product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="details">Detalis:</label>
                        <textarea name="details" cols="10" class="form-control" rows="2">{{ $product->detail }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    </form>
@endsection