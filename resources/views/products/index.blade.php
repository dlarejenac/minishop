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
<!--
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
                        <a href="{{ route('products.edit', ['products' => $item]) }}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('products.destroy', ['products' => $item]) }}">
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
-->
<style>
    .bg-black {
        background: url('https://media.discordapp.net/attachments/955303580817035304/1217034065585242152/headers.png?ex=66028e4c&is=65f0194c&hm=edc681f3cb3ba8fd8b9af0fbfcbf499d1893358cfd79ff061baa9775785416b6&=&format=webp&quality=lossless') no-repeat center center fixed;
        background-size: cover;
    }

    .text-white {
        color: white;
    }

    .py-3 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .bg-brown {
        background-color: #52382A;
    }
</style>

<body>

    <!-- Header -->
        <header class="bg-black text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">MINISHOP</h3>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <nav>
                        <form class="d-flex">
                            <div class="input-group">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn bg-dark text-white" type="button">Search</button>
                            </div>

                        </form>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- End Header -->
    <section class="pt-5">
        <div class="container mb-4">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-2">
                </div>
                <!-- MINISHOP CARDS -->
                <div class="col-md-9">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>


                        <!-- Card 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                                <div class="card-body text-center">
                                    <h5 class="card-title">PROCUDT NAME</h5>
                                    <p class="card-text">Price: P0.00</p>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                    <a href="#" class="btn btn-dark">Add to Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg-brown text-white py-3">
        <div class="container text-center">
            <p>Footer</p>
        </div>
    </footer>
    <!-- Add your JavaScript links or scripts here -->

</body>

</html>
