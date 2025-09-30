<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('master/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('master/css/owl.carousel.min.css') }}')}}">
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
                    <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span
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
                    <h1 class="mb-0 bread">Shop</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">
                        @foreach ($Products as $product)
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                                <div class="product d-flex flex-column">
                                    <a class="img-prod">
                                        @if (!empty($product->image))
                                            <img class="img-fluid"
                                                src="{{ asset('uploads/images/' . $product->image) }}"
                                                alt="Colorlib Template">
                                        @else
                                            <img class="img-fluid" src="{{ asset('master/images/bg_6.jpg') }}"
                                                alt="Colorlib Template">
                                        @endif
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="px-3 py-3 pb-4 text">
                                        <div class="d-flex">
                                            <div class="cat">
                                                <span>Lifestyle</span>
                                            </div>
                                            <div class="rating">
                                                <p class="mb-0 text-right">
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <h3>Nike Free RN 2019 iD</h3>
                                        <div class="pricing">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="pricing">
                                                <p class="price"><span>Price : {{ $product->price }}</span>
                                                    <span>Discount :
                                                        {{ $product->discount_price }}</span>
                                                </p>
                                                <p class="stock"><span>Stock : {{ $product->stock }}</span> <span>sku
                                                        :
                                                        {{ $product->sku }}</span></p>
                                            </div>

                                        </div>
                                        <p class="px-3 bottom-area d-flex">
                                            <a href="PageAddItemToCart-{{$product->id}}" class="py-2 mr-1 text-center add-to-cart"><span>Add to
                                                    cart
                                                    <i class="ml-1 ion-ios-add"></i></span></a>
                                            <a href="#" class="py-2 text-center buy-now">Buy now<span><i
                                                        class="ml-1 ion-ios-cart"></i></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-5 row">
                        <div class="text-center col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading">Categories</h2>
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">Men's Shoes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Sport</a></li>
                                                    <li><a href="#">Casual</a></li>
                                                    <li><a href="#">Running</a></li>
                                                    <li><a href="#">Jordan</a></li>
                                                    <li><a href="#">Soccer</a></li>
                                                    <li><a href="#">Football</a></li>
                                                    <li><a href="#">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">Women's Shoes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Sport</a></li>
                                                    <li><a href="#">Casual</a></li>
                                                    <li><a href="#">Running</a></li>
                                                    <li><a href="#">Jordan</a></li>
                                                    <li><a href="#">Soccer</a></li>
                                                    <li><a href="#">Football</a></li>
                                                    <li><a href="#">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">Accessories
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseThree">Clothing
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box-2">
                            <h2 class="heading">Price Range</h2>
                            <form method="post" class="colorlib-form-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price from:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">1</option>
                                                    <option value="#">200</option>
                                                    <option value="#">300</option>
                                                    <option value="#">400</option>
                                                    <option value="#">1000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price to:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">2000</option>
                                                    <option value="#">4000</option>
                                                    <option value="#">6000</option>
                                                    <option value="#">8000</option>
                                                    <option value="#">10000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-4 text-center col-md-8 heading-section ftco-animate">
                    <h2 class="mb-4">Follow Us On Instagram</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
        </div>
        <div class="px-0 container-fluid">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-5.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url(images/gallery-6.jpg);">
                        <div class="mb-4 icon d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
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

</body>

</html>
