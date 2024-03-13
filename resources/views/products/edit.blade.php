<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MiniShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="resources/styles.css">
</head>
    <!-- <h1>Edit a product</h1>
    <a href="/products">View Products</a>
    @if ($errors->any())
        @foreach($errors->all() as $item)
            <div class="alert alert-danger">{{ $item }}</div>
        @endforeach
    @endif
    <form method="post" action="{{ route('products.update', ['products' => $products]) }}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Product Name" value="{{$products->name}}" />
        <input type="text" name="description" placeholder="Description" value="{{$products->description}}" />
        <input type="text" name="qty" placeholder="Quantity" value="{{$products->qty}}" />
        <input type="text" name="price" placeholder="Price" value="{{$products->price}}" />
        <input type="submit" value="Update" />
    </form> -->

<style>
    .carousel {
        position: relative;
    }

    .carousel-item img {
        object-fit: cover;
    }

    #carousel-thumbs {
        background: rgba(255, 255, 255, .3);
        bottom: 0;
        left: 0;
        padding: 0 50px;
        right: 0;
    }

    #carousel-thumbs img {
        border: 5px solid transparent;
        cursor: pointer;
    }

    #carousel-thumbs img:hover {
        border-color: rgba(255, 255, 255, .3);
    }

    #carousel-thumbs .selected img {
        border-color: #fff;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
    }

    @media all and (max-width: 767px) {
        .carousel-container #carousel-thumbs img {
            border-width: 3px;
        }
    }

    @media all and (min-width: 576px) {
        .carousel-container #carousel-thumbs {
            position: absolute;
        }
    }

    @media all and (max-width: 576px) {
        .carousel-container #carousel-thumbs {
            background: #ccccce;
        }
    }

    .form-container {
        background-color: #f0f0f0;
        /* Your desired background color */
        padding: 10%;
        /* Add padding for spacing */
        padding-left: 5%;
    }

    /* Optional: Style the form fields */
    .form-control {
        font-size: 16px;
        color: #333;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
        width: 100%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .carou {
        padding-left: 10%;
    }
    .descriptions {
     padding-inline-start: 25%;
    }
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
                                <button class="btn bg-dark text-white" type="submit">Search</button>  
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

    <div class="carou container mt-5"> <!-- Added mx-auto for centering -->
        <div class="row">
            <div class="col-lg-8 mx-auto"> <!-- Adjust the column width as needed -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Carousel items here -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-slide-number="0">
                                    <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="1">
                                    <img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="2">
                                    <img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="3">
                                    <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="4">
                                    <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="5">
                                    <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="6">
                                    <img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="7">
                                    <img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="8">
                                    <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="9">
                                    <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-100"
                                        alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/"
                                        data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Navigation -->
                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row mx-0">
                                        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected"
                                            data-target="#myCarousel" data-slide-to="0">
                                            <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="1">
                                            <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="2">
                                            <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="3">
                                            <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="4">
                                            <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="5">
                                            <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row mx-0">
                                        <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="6">
                                            <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="7">
                                            <img src="https://source.unsplash.com/_snqARKTgoc/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="8">
                                            <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2"
                                            data-target="#myCarousel" data-slide-to="9">
                                            <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/"
                                                class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-2 px-1 py-2"></div>
                                        <div class="col-2 px-1 py-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form col-lg-4">
                <a href="">
                    <h4>EDIT</h4>
                </a><br>
                <div class="border rounded p-4" style="background-color: #ccc;">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="" style="width: 100%; height: 30px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Description</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="" style="width: 100%; height: 30px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="" style="width: 100%; height: 30px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputMessage" class="form-label">Price</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="" style="width: 100%; height: 30px;">
                        </div>
                        <button type="submit" class="btn btn-primary d-block mx-auto" style="background-color: black; width: 200px;">UPDATE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="descriptions">
        <h3>Beautiful Places</h3>
        <h4>P60.00</h4>
        <h7>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a
        </h7><br><br>
        <div>
            <h7>Quantity</h7>
            <button onclick="decrementQuantity()">-</button>
            <input type="text" id="quantityInput" value="1" style="width: 50px; text-align: center;">
            <button onclick="incrementQuantity()">+</button>
        </div><br>
        <div>
            <button onclick="decrementQuantity()" style="padding: 8px 16px; margin-right: 10px;">ADD PRODUCT</button>
            <button onclick="incrementQuantity()" style="padding: 8px 16px; background-color: black; color: white;">BUY NOW</button>
        </div><br>
        <h4>Related Products</h4>
    </div>


    <!-- Carousel Navigation -->


    <section class="pt-5">
        <div class="container">
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
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
                                    <a href="#" class="btn btn-dark">VIEW</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white py-3">
        <div class="container text-center">
            <p>Footer</p>
        </div>
    </footer>

    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll()
                    .addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll()
                    .addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding', '0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-' + id + ']').addClass('selected');
        });
        // when user swipes, go next or previous
        $('#myCarousel').swipe({
            fallbackToMouseEvents: true,
            swipeLeft: function(e) {
                $('#myCarousel').carousel('next');
            },
            swipeRight: function(e) {
                $('#myCarousel').carousel('prev');
            },
            allowPageScroll: 'vertical',
            preventDefaultEvents: false,
            threshold: 75
        });

        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>