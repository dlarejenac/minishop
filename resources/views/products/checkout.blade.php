<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="resources/styles.css">
    <title>Document</title>
</head>
<body>



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

    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="bold mb-0 text-black">Checkout</h3>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                        </span>Grey</p>
                                </div>

                                <div class="col-md-3 col-lg-2 col-xl-2 pr-3">
                                    <h5 class="mb-0 text-center">Unit Price</h5>
                                    <h5 class="mb-0 text-center">$499.00</h5>
                                </div>


                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex ">
                                    <h6 >Quantity</h6>
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class=" col-md-1 col-lg-1 col-xl-1 text-end flex-fill ">
                                        <h5 class="text-center">Item Subtotal</h5>
                                        <h5 class="text-center ">$1000.00</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                        </span>Grey</p>
                                </div>

                                <div class="col-md-3 col-lg-2 col-xl-2 pr-3">
                                    <h5 class="mb-0 text-center">Unit Price</h5>
                                    <h5 class="mb-0 text-center">$499.00</h5>
                                </div>


                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex ">
                                    <h6 >Quantity</h6>
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class=" col-md-1 col-lg-1 col-xl-1 text-end flex-fill ">
                                        <h5 class="text-center">Item Subtotal</h5>
                                        <h5 class="text-center ">$1000.00</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color:
                                        </span>Grey</p>
                                </div>

                                <div class="col-md-3 col-lg-2 col-xl-2 pr-3">
                                    <h5 class="mb-0 text-center">Unit Price</h5>
                                    <h5 class="mb-0 text-center">$499.00</h5>
                                </div>


                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex ">
                                    <h6 >Quantity</h6>
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                <input id="form1" min="0" name="quantity" value="2" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class=" col-md-1 col-lg-1 col-xl-1 text-end flex-fill ">
                                        <h5 class="text-center">Item Subtotal</h5>
                                        <h5 class="text-center ">$1000.00</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center pt-3">
                                            <h6 class="mb-3 flex-fill  pt-3">Total Item:</h6>
                                            <h6 class="mb-3 flex-fill  pt-3">5</h6>
                                            <h6 class="mb-3 flex-fill  pt-3">Total Price:</h6>
                                            <h6 class="mb-3 flex-fill  pt-3">P655.20</h6>
                                            <button type="button" class="btn btn-dark btn-block btn-lg py-2">Place Order</button>

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


<footer class="bg-black text-white py-3">
    <div class="container text-center">
        <p>Footer</p>
    </div>
</footer>

</body>
</html>
