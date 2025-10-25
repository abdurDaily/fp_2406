<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobazar | Home Page</title>
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon">

    <!-- =====  fonts  ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- =====  slick slider css  ===== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}">
    <!-- =====  aos css  ===== -->
    <link rel="stylesheet" href="{{ asset('frontend.assets/css/aos.css') }}">
    <!-- =====  venobox css  ===== -->
    <link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.min.css') }}" type="text/css" media="screen" />
    <!-- =====  venobox css  ===== -->
    <!-- =====  bootstrap cdn  ===== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- =====  custom css  ===== -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="./assets/css/responsive.css">


</head>

<body>

    <!-- =====  header 1 start  ===== -->


    <header>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="d-flex contains align-items-center">
                        <span class="location">
                            <iconify-icon icon="mynaui:location" width="20" height="20"></iconify-icon>
                        </span>
                        <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ">
                    <div class="d-flex second align-items-center ">
                        <div class="d-flex lang_money">
                            <div class="lang">
                                <select name="" id="">
                                    <option value="">ENG</option>
                                    <option value="">BN</option>
                                </select>

                            </div>
                            <div class="money">
                                <select name="" id="">
                                    <option value="">USD</option>
                                    <option value="">BDT</option>
                                </select>
                            </div>
                        </div>
                        <div class="sign-links">
                            <a href="#">Sign In</a>
                            <span class="or">/</span>
                            <a href="#">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- =====  header 1 end    ===== -->

    <!-- =====  heading section start  ===== -->
    <section id="heading">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-3 col-lg-3">
                    <a href="./index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo"
                            class="img-fluid"></a>
                </div>
                <div class="d-none d-xl-block d-lg-block col-xl-5 col-lg-5 search">
                    <form action="#">
                        <input type="text" placeholder="Search">

                        <span>
                            <iconify-icon icon="iconoir:search" width="24" height="24"></iconify-icon>
                        </span>
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="d-none d-xl-block d-lg-block col-xl-3 col-lg-3">
                    <div class="d-flex contains align-items-center justify-content-end" data-aos="zoom-out-left">
                        <a href="./assets/html/wishlist.html" class="text-decoration:none; color: black;"><span
                                class="wishlist">
                                <iconify-icon icon="gridicons:heart-outline" width="32" height="32"></iconify-icon>
                            </span></a>

                        <div class="d-flex contains_two  align-items-center">
                            <div class="cart">
                                <span class="bag">
                                    <iconify-icon icon="heroicons:shopping-bag" width="34" height="34"></iconify-icon>
                                </span>
                                <span class="two">2</span>
                            </div>
                            <div class="details">
                                <p>Shopping Cart</p>
                                <span>$57.00</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <button class="menu">
                <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <iconify-icon icon="ic:round-menu" width="24" height="24"></iconify-icon>
                </span>
            </button>

        </div>
    </section>
    <!-- =====  heading section end    ===== -->

    <!-- =====  offcanvas section start  ===== -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <div class="logo">
                <a href="./index.html"><img src="./assets/images/logo.png" alt="logo" class="img-fluid"></a>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="d-flex second align-items-center justify-content-center">
                <div class="d-flex lang_money">
                    <div class="lang">
                        <select name="" id="">
                            <option value="">ENG</option>
                            <option value="">BN</option>
                        </select>

                    </div>
                    <div class="money">
                        <select name="" id="">
                            <option value="">USD</option>
                            <option value="">BDT</option>
                        </select>
                    </div>
                </div>
                <div class="sign-links">
                    <a href="#">Sign In</a>
                    <span class="or">/</span>
                    <a href="#">Sign Up</a>
                </div>
            </div>

            <!-- navbar ul  -->
            <!-- dropdown button -->
            <!-- <div class="dropdown ps-5 pb-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span><iconify-icon icon="ic:round-menu" width="24" height="24"></iconify-icon></span>
                    <p>All Categories</p>
                    <span><iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div> -->
            <!-- dropdown button -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
                <!-- 1 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p>Home</p>
                        <span>
                            <iconify-icon icon="basil:plus-outline" width="24" height="24"></iconify-icon>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- 1 -->

                <!-- 2 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p>Shop</p>
                        <span>
                            <iconify-icon icon="basil:plus-outline" width="24" height="24"></iconify-icon>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- 2 -->


                <!-- 3 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p>Pages</p>
                        <span>
                            <iconify-icon icon="basil:plus-outline" width="24" height="24"></iconify-icon>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- 3 -->

                <!-- 4 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <p>Blog</p>
                        <span>
                            <iconify-icon icon="basil:plus-outline" width="24" height="24"></iconify-icon>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <!-- 4 -->

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <p>About Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <p>Contact Us</p>
                    </a>
                </li>


            </ul>






            <!-- location -->
            <!-- <div class="d-flex contains_three align-items-center">
                <span class="location"><iconify-icon icon="mynaui:location" width="20"
                        height="20"></iconify-icon></span>
                <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
            </div> -->





            <!-- <div class="search">
                <form action="#">
                    <input type="text" placeholder="Search">

                    <span><iconify-icon icon="iconoir:search" width="24" height="24"></iconify-icon></span>
                    <button type="submit">Search</button>
                </form>
            </div> -->

            <div class="d-flex contains align-items-center justify-content-center">
                <span class="wishlist">
                    <iconify-icon icon="gridicons:heart-outline" width="32" height="32"></iconify-icon>
                </span>
                <div class="d-flex contains_two  align-items-center">
                    <div class="cart">
                        <span class="bag">
                            <iconify-icon icon="heroicons:shopping-bag" width="34" height="34"></iconify-icon>
                        </span>
                        <span class="two">2</span>
                    </div>
                    <div class="details">
                        <p>Shopping Cart</p>
                        <span>$57.00</span>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- =====  offcanvas section end    ===== -->


    <!-- =====  nav section start  ===== -->


    <section id="nav">
        <nav class="navbar navbar-expand-lg d-none d-xl-block">
            <div class="container">
                <!-- =====  dropdown button  ===== -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span>
                            <iconify-icon icon="ic:round-menu" width="24" height="24"></iconify-icon>
                        </span>
                        <p>All Categories</p>
                        <span>
                            <iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon>
                        </span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./assets/html/vegetables.html">Vegetables</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <!-- =====  dropdown button  ===== -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
                        <!-- 1 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home&nbsp;
                                <span>
                                    <iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- 1 -->

                        <!-- 2 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop&nbsp;
                                <span>
                                    <iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- 2 -->


                        <!-- 3 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pages&nbsp;
                                <span>
                                    <iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- 3 -->

                        <!-- 4 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Blog&nbsp;
                                <span>
                                    <iconify-icon icon="ep:arrow-down" width="24" height="24"></iconify-icon>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>

                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- 4 -->

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Contact Us
                            </a>
                        </li>


                    </ul>

                    <div class="d-flex call align-items-center">
                        <span>
                            <iconify-icon icon="mingcute:phone-call-line" width="24" height="24"></iconify-icon>
                        </span>
                        <a href="tel:+(219) 555-0114">(219) 555-0114</a>
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <!-- =====  nav section end    ===== -->


    <!-- =====  mobile-footer section start  ===== -->

    <section id="mobile-footer" class="d-xl-none d-lg-none d-md-none">

        <!-- <div class="row justify-content-center align-items-center">
                <div class="box col-2">
                    <span><iconify-icon icon="streamline:shopping-bag-hand-bag-2" width="24" height="24"></iconify-icon></span>
                    <p class="mb-0">Cart</p>
                </div>
                <div class="box col-2">
                    <span><iconify-icon icon="bxs:offer" width="24" height="24"></iconify-icon></iconify-icon></span>
                    <p class="mb-0">Offers</p>
                </div>
                <div class="col-2 box">
                    <span><iconify-icon icon="tdesign:search" width="24" height="24"></iconify-icon></span>
                    <p class="mb-0">Search</p>
                </div>
            </div> -->

        <div class="d-flex justify-content-center align-items-center justify-content-between">
            <div class=" box">
                <a href="./index.html"><span>
                        <iconify-icon icon="ic:sharp-home" width="26" height="26"></iconify-icon>
                    </span></a>

                <p class="mb-0">Home</p>
            </div>
            <div class="box cart">
                <span>
                    <iconify-icon icon="heroicons:shopping-bag" width="26" height="26"></iconify-icon>
                </span>
                <span class="txt">2</span>
                <p class="mb-0">Cart</p>
            </div>
            <div class="box">
                <span class="search_icon">
                    <iconify-icon icon="tdesign:search" width="26" height="26"></iconify-icon>
                </span>
                <p class="mb-0">Search</p>
            </div>
            <div class="box ">
                <span>
                    <iconify-icon icon="bxs:offer" width="26" height="26"></iconify-icon>
                    </iconify-icon>
                </span>
                <p class="mb-0">Offers</p>
            </div>
            <div class=" box">
                <span>
                    <iconify-icon icon="tdesign:user-filled" width="26" height="26"></iconify-icon>
                </span>
                <p class="mb-0">Account</p>
            </div>


        </div>


    </section>
    <!-- =====  mobile-footer section end    ===== -->

    <!-- =====  search section start  ===== -->
    <div id="search-box">
        <div class="container">
            <span class="cross">
                <iconify-icon icon="codex:cross" width="24" height="24"></iconify-icon>
            </span>
            <form action="#">
                <input type="text" placeholder="e.g. Brinjal, tomato, etc.">
                <button type="submit" class="searchbtn">
                    <span>
                        <iconify-icon icon="tdesign:search" width="24" height="24"></iconify-icon>
                    </span>
                </button>
            </form>

        </div>
    </div>
    <!-- =====  search section end    ===== -->


    @yield('frontend_content')




    <button type="button" class="card_box_icon" data-bs-toggle="offcanvas" data-bs-target="#cart_offcanvasRight"
        aria-controls="cart_offcanvasRight">
        cart
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            0
            <span class="visually-hidden">unread messages</span>
        </span>
    </button>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="cart_offcanvasRight"
        aria-labelledby="cart_offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cart_offcanvasRightLabel">YOUR CART</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
            <div class="row">
                <div class="col-2">
                    image
                </div>
                <div class="col-8">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-2">
                    <a href="">delete</a>
                </div>
            </div>


        </div>
        <div class="text-center">
            <a href="#" class="btn btn-success   checkout ">Checkout</a>
        </div>
    </div>


    <!-- =====  footer section start  ===== -->

    <section id="footer">
        <div class="container">
            <img src="./assets/images/footer/Left.png" alt="left" class="img-fluid left">
            <img src="./assets/images/footer/right.png" alt="right" class="img-fluid right">

            <div class="row">
                <div class="about col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <h4>About Shoppery</h4>
                    <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna
                        congue nec.</p>
                    <p> <a href="tel:(219) 555-0114">(219) 555-0114</a> &nbsp;or &nbsp;<a
                            href="mailto:Proxy@gmail.com">Proxy@gmail.com</a> </p>
                </div>

                <div class="account one col-xl-2 col-lg-2  ">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>

                <!-- <div class="account two col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                <h4>Help</h4>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    
                </ul>
            </div> -->

                <div class="account two col-xl-2 col-lg-2  ">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms and Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>

                    </ul>
                </div>


                <!-- <div class="account three col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4">
                <h4>Proxy</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Product Details</a></li>
                    <li><a href="#">Track Order</a></li>
                </ul>
            </div> -->

                <div class="account three col-xl-2 col-lg-2   ">
                    <h4>Proxy</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Product Details</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>

                <div class="insta col-xl-3 col-lg-3">
                    <h4>Instagram</h4>
                    <div class="img-box">
                        <img src="{{ asset('frontend/assets/images/footer/1.png') }}" alt="image1">
                        <img src="{{ asset('frontend/assets/images/footer/2.png') }}" alt="image2">
                        <img src="{{ asset('frontend/assets/images/footer/3.png') }}" alt="image3">
                        <img src="{{ asset('frontend/assets/images/footer/4.png') }}" alt="image4">
                        <img src="{{ asset('frontend/assets/images/footer/5.png') }}" alt="image5">
                        <img src="{{ asset('frontend/assets/images/footer/6.png') }}" alt="image6">
                        <img src="{{ asset('frontend/assets/images/footer/7.png') }}" alt="image7">
                        <img src="{{ asset('frontend/assets/images/footer/8.png') }}" alt="image8">
                    </div>
                </div>




            </div>

            <div class="footer_two d-flex justify-content-between align-items-center">
                <div class="icons">
                    <span>
                        <iconify-icon icon="gg:facebook" width="24" height="24"></iconify-icon>
                    </span>
                    <span>
                        <iconify-icon icon="si:twitter-fill" width="24" height="24"></iconify-icon>
                    </span>
                    <span>
                        <iconify-icon icon="jam:pinterest" width="24" height="24"></iconify-icon>
                    </span>
                    <span>
                        <iconify-icon icon="basil:instagram-outline" width="24" height="24"></iconify-icon>
                    </span>
                </div>

                <p>Shopery eCommerce © 2021. All Rights Reserved</p>

                <div class="img-box">
                    <img src="{{ asset('frontend/assets/images/footer/apple.png') }}" alt="apple">
                    <img src="{{ asset('frontend/assets/images/footer/visa.png') }}" alt="visa">
                    <img src="{{ asset('frontend/assets/images/footer/discover.png') }}" alt="discover">
                    <img src="{{ asset('frontend/assets/images/footer/mastercard.png') }}" alt="mastercard">
                    <img src="{{ asset('frontend/assets/images/footer/securepayment.png') }}" alt="secure payment">
                </div>

            </div>

        </div>
    </section>

    <!-- =====  footer section end    ===== -->



    <!-- ===== JQUERY JS  ===== (Any js should be inside the jquery and custom script.js) -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/category-filter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hq-countdown-timer.min.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script type="text/javascript" src="venobox/venobox.min.js"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>