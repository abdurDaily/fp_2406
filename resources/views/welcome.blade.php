@extends('frontend.layout')

@section('frontend_content')
<!-- =====  banner section start  ===== -->

<section id="banner">
    <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="sliders">

            <!-- 1 -->
            <div class="slides">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 banner-img">
                        <img src="{{ asset('frontend/assets/images/banner/img1.png') }}" alt="banner image"
                            class="img-fluid">
                        <div class="offer">
                            <p>70%</p>
                            <p>Off</p>
                        </div>
                    </div>
                    <div class="col-xl-6 contains">
                        <p>Welcome to Shopery</p>
                        <h4>Fresh & Healthy Organic Food</h4>
                        <p>Free shipping on all your order. we deliver, you enjoy</p>
                        <a href="#">Shop Now &nbsp;&nbsp;&rarr;</a>
                    </div>
                </div>

            </div>

            <!-- 2 -->

            <div class="slides">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 banner-img">
                        <img src="{{ asset('frontend/assets/images/banner/img2.png') }}" alt="banner image"
                            class="img-fluid">
                        <div class="offer">
                            <p>70%</p>
                            <p>Off</p>
                        </div>
                    </div>
                    <div class="col-xl-6 contains">
                        <p>Welcome to Shopery</p>
                        <h4>Fresh & Healthy Organic Food</h4>
                        <p>Free shipping on all your order. we deliver, you enjoy</p>
                        <a href="#">Shop Now &nbsp;&nbsp;&rarr;</a>
                    </div>
                </div>

            </div>
            <!-- 3 -->

            <div class="slides">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 banner-img">
                        <img src="{{ asset('frontend/assets/images/banner/img3.png') }}" alt="banner image"
                            class="img-fluid">
                        <div class="offer">
                            <p>70%</p>
                            <p>Off</p>
                        </div>
                    </div>
                    <div class="col-xl-6 contains">
                        <p>Welcome to Shopery</p>
                        <h4>Fresh & Healthy Organic Food</h4>
                        <p>Free shipping on all your order. we deliver, you enjoy</p>
                        <a href="#">Shop Now &nbsp;&nbsp;&rarr;</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- =====  banner section end    ===== -->

<section id="service">
    <div class="container" data-aos="flip-left">
        <div class="services row">
            <!-- 1 -->
            <div class="box col-xl-3 col-md-6 col-sm-6">
                <span>
                    <iconify-icon icon="carbon:delivery" width="32" height="32"></iconify-icon>
                </span>
                <h5>Free Shipping</h5>
                <p>Free shipping with discount</p>
            </div>

            <!-- 2 -->
            <div class="box col-xl-3 col-md-6 col-sm-6">
                <span>
                    <iconify-icon icon="ix:support" width="32" height="32"></iconify-icon>
                </span>
                <h5>Great Support 24/7</h5>
                <p>Instant access to Contact</p>
            </div>

            <!-- 3 -->
            <div class="box col-xl-3 col-md-6 col-sm-6">
                <span>
                    <iconify-icon icon="ion:bag-check-outline" width="32" height="32"></iconify-icon>
                </span>
                <h5>100% Secure Payment</h5>
                <p>We ensure your money is save</p>
            </div>

            <!-- 4 -->
            <div class="box col-xl-3 col-md-6 col-sm-6">
                <span>
                    <iconify-icon icon="solar:box-broken" width="32" height="32"></iconify-icon>
                </span>
                <h5>Money-Back Guarantee</h5>
                <p>30 days money-back guarantee</p>
            </div>

        </div>
    </div>
</section>


<!-- =====  categories section start  ===== -->


<section id="categories">
    <div class="container">

        <h5>Introducing Our Products</h5>

        <!-- buttons -->
        <div class="buttons">
            <button class="category-button active" data-filter="all">All</button>
            <button class="category-button" data-filter="cat-1">Vegetable</button>
            <button class="category-button" data-filter="cat-2">Fruit</button>
            <button class="category-button" data-filter="cat-3">Meat & Fish</button>
            <button class="category-button" data-filter="cat-4">View All</button>
        </div>
        <!-- buttons -->


        <!-- divs -->
        <div class="filter-box row ">
            <!-- <div class="filter cat-1 row"> -->


            @forelse ($products as $product)

            {{-- @dd($product->images[0]->image) --}}



            <div class="product_child col-xl-3 col-lg-4 col-sm-4  filter cat-1">
                <div class="img-box">
                    <img src="http://127.0.0.1:8000/storage/product/product-1761799484.bannerImg.png" alt="product4"
                        class="img-fluid">

                    <div class="preview_icons">
                        <ul>
                            <li>
                                <a data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                    data-bs-placement="left" data-bs-title="Add to Wishlist" href="#"><span>
                                        <iconify-icon icon="ion:heart-outline" width="24" height="24">
                                        </iconify-icon>
                                    </span></a>

                            </li>
                            <li><a data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                    data-bs-placement="left" data-bs-title="See More" href="#"><span>
                                        <iconify-icon icon="solar:eye-linear" width="24" height="24"></iconify-icon>
                                    </span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex box align-items-center justify-content-between">
                    <div class="contains">
                        <h4>{{ $product->title }}</h4>
                        <b>{{ $product->price }}</b>


                        <div class="icons">
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9733;</span>
                            <span>&#9734;</span>
                        </div>
                    </div>
                    <div class="cart">
                        <span>
                            <a href="{{ route('addto.cart', $product->id) }}">
                                <iconify-icon icon="heroicons:shopping-bag" width="24" height="24"></iconify-icon>

                            </a>
                        </span>
                    </div>
                </div>
            </div>

            @empty

            @endforelse



        </div>


        <!-- divs -->

    </div>
</section>

<!-- =====  categories section end    ===== -->
@endsection