@extends('product.master')
@section('content')
                    <h1 class="text-center">Product Entry</h1>
                    
                  @include('product.error')

                    <form action="{{ ROUTE('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="details">Detalis:</label>
                        <textarea name="details" cols="30" class="form-control" rows="5" placeholder="Enter Details"></textarea>
                    </div>
                    <div>
                        <input type="file" class="form-control btn btn-primary" placeholder="Name" name="photo"> 
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
@endsection