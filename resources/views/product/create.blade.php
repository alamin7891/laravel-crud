<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Add New Product</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1 class="text-center">Product Entry</h1>
                    <form action="{{ ROUTE('products.store') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="details">Detalis:</label>
                        <textarea name="details" cols="30" class="form-control" rows="10" placeholder="Enter Details"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            <div class="col-md-2"></div>
      </div>
    </div>
</body>
</html>