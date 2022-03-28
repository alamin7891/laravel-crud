<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <a href="{{ URL('products') }}" class="btn btn-info">Go to Product List</a>
            </div>
        </div>
        
    </body>
</html>
