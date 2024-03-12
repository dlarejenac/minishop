<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
</head>
<body>
    <h1>Edit a product</h1>
    <a href="/products">View Products</a>
    <form method="post" action="{{ route('products.update', ['products' => $products]) }}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="-- Click to Edit Product Name --" value="{{$products->name}}" />
        <input type="text" name="description" placeholder="-- Click to Edit Product Description --" value="{{$products->description}}" />
        <input type="text" name="qty" placeholder="-- Click to Edit Product Quantity --" value="{{$products->qty}}" />
        <input type="text" name="price" placeholder="-- Click to Edit Product Price --" value="{{$products->price}}" />
        <input type="submit" value="-- Click to update --" />
    </form>
</body>
</html>