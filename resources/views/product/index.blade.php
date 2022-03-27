<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Product View</title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center">Product List</h1>
                <a href="{{ URL('products/create') }}" class="btn btn-success float-right m-20" style="margin-bottom: 20px">New Product</a>
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
                                <button class="btn btn-info btn-sm">Edit</button>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>