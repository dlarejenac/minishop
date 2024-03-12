<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
</head>
<body>
    <h1>Create</h1>
    <a href="/products">View Products</a>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="description" placeholder="Description" />
        <input type="text" name="qty" placeholder="Quantity" />
        <input type="text" name="price" placeholder="Price" />
        <input type="submit" value="Add Product" />
    </form>
</body>
</html>