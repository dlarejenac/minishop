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
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    99+
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
                    <a class="btn btn-success mb-4" href="/products/create">+ Add Product</a>
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
                                        <img src="https://crvftco.com/cdn/shop/files/classic-dad-hat-black-right-side-64c71c72bd181_300x.jpg?v=1691452573" class="card-img-top"  alt="Product Image">
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
</html>