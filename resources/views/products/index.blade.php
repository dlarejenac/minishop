<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop</title>
</head>
<body>
    <h1>Products</h1>
    <a href="/products/create">Add Product</a>
    @if ($products->count() > 0)
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Edit</th>
        </tr>
            @foreach ($products as $item) 
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{route('products.edit' , ['products' => $item])}}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{route('products.destroy', ['products' => $item])}}">
                            @csrf
                            @method ('delete')    
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach       
    </table>
    @endif
</body>
</html>