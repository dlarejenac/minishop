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
    <form action="/products" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="quantity" placeholder="quantity">
        <input type="text" name="price" placeholder="price">
        <button type="submit">Add</button>
    </form>
</body>
</html>