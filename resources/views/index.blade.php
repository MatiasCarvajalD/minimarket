<!DOCTYPE html>
<html>
<head>
    <title>Productos - Minimarket Carolina</title>
</head>
<body>
    <h1>Productos</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
</body>
</html>
