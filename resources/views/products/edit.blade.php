<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MiniShop</title>
</head>
<body>
    <h1>Edit a product</h1>
    <a href="/products">View Products</a>
    @if ($errors->any())
        @foreach($errors->all() as $item)
            <div class="alert alert-danger">{{ $item }}</div>
        @endforeach
    @endif
    <form method="post" action="{{ route('products.update', ['products' => $products]) }}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Product Name" value="{{$products->name}}" />
        <input type="text" name="description" placeholder="Description" value="{{$products->description}}" />
        <input type="text" name="qty" placeholder="Quantity" value="{{$products->qty}}" />
        <input type="text" name="price" placeholder="Price" value="{{$products->price}}" />
        <input type="submit" value="Update" />
    </form>
</body>
</html>