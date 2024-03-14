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
    <header class="bg-black text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/products" class="mb-0 h3 text-decoration-none">MINISHOP</a>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <nav>
                        <form class="d-flex">
                            <div class="input-group">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn bg-dark text-white" type="button"><i class="bi bi-search"></i> Search</button>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="bold mb-0 text-black">My Cart</h3>
                    </div>
                    @if ($cartItems->count() > 0)
                        @foreach ($cartItems as $item)
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">{{ $item->product->name }}</p>
                                            <p><span class="text-muted">Description: </span>{{ $item->product->description }}<span class="text-muted"></p>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <h6>Quantity</h6>
                                            <button class="btn btn-link px-2">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                        <input id="form1" disabled min="0" name="quantity" value="{{ $item->product->qty }}" type="number"
                                                class="form-control form-control-sm" />

                                            <button class="btn btn-link px-2">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2">
                                            <h5 class="mb-0">Price: P{{ $item->product->price }}</h5>
                                        </div>
                                        
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <form method="post" action="{{ route('cart.destroy', ['item' => $item]) }}">
                                                @csrf
                                                @method ('delete')
                                                <button class="btn btn-danger" style="width: 100px;" type="submit"><i class="bi bi-trash-fill"></i> Delete</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif                  
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex flex-row mb-3">
                                            <h6 class="mb-3 flex-grow-1">Total Item:</h6>
                                            <h6 class="mb-3 flex-fill">{{ $cartItems->count() }}</h6>
                                            <h6 class="mb-3 flex-fill">P{{ $cartTotalPrice }}</h6>                                         
                                            <button type="button" class="btn btn-warning btn-block btn-lg">Check Out</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- Footer -->
<footer class="bg-brown text-white py-5">
    <div class="container text-center">
        <p>Footer</p>
    </div>
</footer>
</html>