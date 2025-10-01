<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('master/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('master/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/style.css') }}">
</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="pr-4 col-md d-flex topper align-items-center">
                            <div class="mr-2 icon d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="pr-4 col-md d-flex topper align-items-center">
                            <div class="mr-2 icon d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="pr-4 col-md-5 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Minishop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="PageCreateNewDepartment" class="nav-link">New Department</a>
                    </li>
                    <li class="nav-item active"><a href="PageCreateNewCategory" class="nav-link">New Category</a></li>
                    <li class="nav-item active"><a href="PageCreateNewProduct" class="nav-link">New Product</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Catalog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="ShowAllDepartments">Show all Departments</a>
                            <a class="dropdown-item" href="PageShowDepartments">Details Departments</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="PageShowDataUser-{{ Auth::user()->id }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item cta cta-colored"><a href="ShowAllProductCart" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li>
                    <li class="nav-item cta cta-colored">
                        <a href="PageSearch" class="nav-link">
                            <span class="icon-search"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('master/images/bg_6.jpg') }}">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="text-center col-md-9 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Shop</span>
                    </p>
                    <h1 class="mb-0 bread">Edit Product Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="mb-5 col-lg-6 ftco-animate">
                    <a href="images/product-1.png" class="image-popup prod-img-bg">
                        @if (!empty($image))
                            <img src="{{ asset('uploads/images/' . $image) }}" class="img-fluid" alt="Colorlib Template"></a>  
                        @else
                            <img src="{{ asset('uploads/images/1758200856.png') }}" class="img-fluid" alt="Colorlib Template"></a>  
                        @endif
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $product->name }}</h3>
                    <div class="rating d-flex">
                        <p class="mr-4 text-left">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="mr-4 text-left">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                    style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span
                                    style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                    <p class="price"><span>Price {{$product->price}}</span></p>
                    <p>Quantity {{$product->quantity}}</p>
                    {{-- <p style="color: #000;">{{ $product->stock }} piece available</p> --}}

                    {{-- <div class="mt-4 row">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <div class="gap-3 d-flex">
                        <!-- فورم Add to Cart -->
                        <form action="AddProductToCart-{{ $product->id }}" method="POST"
                            class="gap-3 d-flex flex-column">
                            @csrf

                            <!-- التحكم في الكمية -->
                            <div class="mx-auto input-group" style="max-width: 200px;">
                                <button type="button" class="btn btn-outline-secondary quantity-left-minus"
                                    data-type="minus">
                                    <i class="ion-ios-remove"></i>
                                </button>

                                <input type="text" id="quantity" name="quantity"
                                    class="text-center form-control" value="1" min="1" max="100">

                                <button type="button" class="btn btn-outline-secondary quantity-right-plus"
                                    data-type="plus">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </div>

                            <!-- زرارين جنب بعض -->
                            <div class="gap-2 d-flex justify-content-center">
                                <button type="submit" name="action" value="add_to_cart"
                                    class="btn-custom btn-black">
                                    Add to Cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-md">
                    <div class="mb-4 ftco-footer-widget">
                        <h2 class="ftco-heading-2">Minishop</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="mt-5 ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-4 ftco-footer-widget ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4 ftco-footer-widget">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="mr-4 list-unstyled mr-l-5 pr-l-3">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-4 ftco-footer-widget">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="mb-3 block-23">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('master/js/jquery.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('master/js/popper.min.js') }}"></script>
    <script src="{{ asset('master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('master/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('master/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('master/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('master/js/aos.js') }}"></script>
    <script src="{{ asset('master/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('master/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('master/js/scrollax.min.js') }}"></script>
    <script
        src="{{ asset('master/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}">
    </script>
    <script src="{{ asset('master/js/google-map.js') }}"></script>
    <script src="{{ asset('master/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>
