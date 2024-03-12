@extends('products.index')

@section('content')
 

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
                    <a href="{{route('products.edit' , ['products' => $item])}}">Configure Here!</a>
                </td>

                <td>
                    <form method="post" action="{{route('products.destroy', ['products' => $item])}}">
                        @csrf
                        @method ('delete')    
                        <input type="submit" value="-- Delete Product Inventory! --" />
                    </form>
                </td>
            </tr>
        @endforeach       
</table>
@endsection