<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MiniShop</title>
</head>
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
    <header class="bg-black text-white py-3" >
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/products" class="mb-0 h3 text-decoration-none">MINISHOP</a>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <nav>
                        <form class="d-flex" action="{{ route('search') }}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input class="form-control me-2" type="text" name="query" placeholder="Search...">
                                <button class="btn bg-dark text-white" type="submit"><i class="bi bi-search"></i> Search</button>  
                                <a href="/cart" class="btn btn-warning position-relative">
                                <i class="bi bi-cart"></i>  My Cart
                                @if ($cartItems->count() > 0)
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $cartItems->count() }}
                                @endif
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                                </a>                            
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
                    <button class="btn btn-success mb-4" id="openModalBtn">+ Add Product</button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Your modal content here -->
                                @if ($errors->any())
                                    @foreach($errors->all() as $item)
                                        <div class="alert alert-danger">{{ $item }}</div>
                                    @endforeach
                                @endif
                                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                    <div class="mb-3">
                                        <label for="Product" class="form-label">Image</label>
                                        <input name="image" type="file" class="form-control" id="image" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Product" class="form-label">Product Name</label>
                                        <input name="name" type="text" class="form-control" id="product" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Quantity" class="form-label">Quantity</label>
                                        <input name="qty" type="text" class="form-control" id="quantity" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Product-Price" class="form-label">Product Price</label>
                                        <input name="price" type="text" class="form-control" id="productprice"
                                            aria-describedby="">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-dark me-2">Clear</button>
                                        <input type="submit" class="btn btn-success" value="Add Item"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MINISHOP CARDS -->
                <div class="col-md-9">
                    <div class="row">
                        @if (session('success-green'))
                            <div class="alert alert-success">{{ session('success-green') }}</div>
                            @php
                                session()->forget('success-green');
                            @endphp
                        @endif

                        @if (session('success-red'))
                            <div class="alert alert-danger">{{ session('success-red') }}</div>
                            @php
                                session()->forget('success-red');
                            @endphp
                        @endif
                        <!-- Card 1 -->
                        @if ($products->count() > 0)
                            @foreach($products as $item)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ $item->image }}">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $item->name }}</h5>
                                            <p class="card-text">Price: P{{ $item->price }}</p>
                                            <hr />
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-warning" href="{{route('products.edit' , ['products' => $item])}}" style="width: 100px;"><i class="bi bi-eye"></i> View</a>
                                                <div class="mx-1"></div>
                                                <form method="post" action="{{route('products.destroy', ['products' => $item])}}">
                                                    @csrf
                                                    @method ('delete')
                                                    <button class="btn btn-danger" style="width: 100px;" type="submit"><i class="bi bi-trash-fill"></i> Delete</button>
                                                </form>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <img src="https://www.skholla.in//images/no-product.png" />
                        @endif                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
<footer class="bg-brown text-white py-5">
    <div class="container text-center">
        <p>Footer</p>
    </div>
</footer>
</body>

<script>
    document.getElementById('openModalBtn').addEventListener('click', function() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.show();
    });
</script>

</html>