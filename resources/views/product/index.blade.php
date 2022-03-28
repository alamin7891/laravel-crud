@extends('product.master')
@section('content')
                <h1 class="text-center">Product List</h1>
                <a href="{{ URL('products/create') }}" class="btn btn-success float-right m-20" style="margin-bottom: 20px">New Product</a>

                @include('product.success')

                <table class="table table-striped table-bordered table-hover table-md p-5">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <form action="{{ ROUTE('products.destroy', $product->id) }}" method="post">
                                <a class="btn btn-primary btn-sm" href="{{ ROUTE('products.show', $product->id) }}" >Show</a>
                                <a class="btn btn-info btn-sm" href="{{ route('products.edit', $product->id)}}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
@endsection