@extends('layouts.frontendlayout')
@section('title', $product->title ?? 'Product Page')
@section('main')


    <!-- Background header -->
    <section id="backgroundHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="./index.html">
                        <i class="fa-solid fa-house"></i>
                    </a>
                    <a href="#"><span>>{{ $product->title ?? 'Product' }}</span> </a>
                </div>
            </div>
        </div>
    </section>




    <main>
        <!-- Product Details -->
        <section id="productDetailsShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-2 order-2 order-lg-1">
                                <div class="productThumbSlider">
                                    @if($product->featured_img)
                                     <div class="slider">
                                        <img class="img-fluid" src="{{ getImage($product->featured_img) }}" alt="{{ $product->title }}">
                                    </div>
                                    @endif
                                    @if(count(json_decode($product->gall_img) ?? [] ) > 0)
                                    @foreach (json_decode($product->gall_img) as $gallImage)
                                    <div class="slider">
                                        <img class="img-fluid" src="{{ getImage($gallImage) }}" alt="{{ $product->title }}">
                                    </div>

                                    @endforeach

                                    @endif



                                </div>
                            </div>
                            <div class="col-lg-10 order-1 order-lg-2">
                                <div class="productGallerySlider">
                                    @if($product->featured_img)
                                     <div class="slider">
                                        <img class="img-fluid" src="{{ getImage($product->featured_img) }}" alt="{{ $product->title }}">
                                    </div>
                                    @endif
                                    @if(count(json_decode($product->gall_img) ?? [] ) > 0)
                                    @foreach (json_decode($product->gall_img) as $gallImage)
                                    <div class="slider">
                                        <img class="img-fluid" src="{{ getImage($gallImage) }}" alt="{{ $product->title }}">
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-8">
                                <h5>{{ $product->title }}</h5>
                            </div>
                            <div class="col-2">
                                <span class="{{ $product->stock ? 'instock' : 'outOfStock' }}">{{ $product->stock ? 'In Stock' : 'Out of Stock' }}</span>
                            </div>
                        </div>
                        <div class="row d-flex rating">
                            <div class="col-6 d-flex">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p>4 Review</p>
                            </div>
                            <div class="col-6">
                                <div class="row d-flex sku">
                                    <div class="col-2">
                                        <h4>SKU:</h4>
                                    </div>
                                    <div class="col-2">
                                        <p>{{ $product->sku }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row d-flex price">
                            <div class="col-6 d-flex">
                              @if($product->selling_price)
                              <del>{{ number_format($product->price,2) }}</del>
                              <h6>{{ number_format($product->selling_price,2) }}</h6>
                                @else
                                <h6>{{ number_format($product->price,2) }}</h6>
                              @endif
                            </div>
                            <div class="col-6 d-flex">
                                <a href="#">{{ ceil((100/$product->price)*($product->price - $product->selling_price)) }}% Off</a>
                            </div>
                        </div>
                        <div class="row d-flex">
                            {{-- <div class="col-4 d-flex brand align-items-center justify-content-center">
                                <h3>Brand:</h3>
                                <img src="./images/brand.png" class="img-fluid" alt="">
                            </div> --}}
                            <div class="col-8">
                                <div class="row d-flex">


                                    <div class="row d-flex items">
                                        <div class="col-4">
                                            <h2>Share item:</h2>
                                        </div>

                                        <div class="col-2 quickLinks d-flex justify-content-center align-items-center">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </div>
                                        <div class="col-2 quickLinks">
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </div>
                                        <div class="col-2 quickLinks">
                                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                        </div>
                                        <div class="col-2 quickLinks">
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <p>{!! $product->short_details !!} </p>
                            @if($product->stock)
                            <div class="row">
                                <form action="{{ route('frontend.addCart',$product->id) }}" class="d-flex gap-5">
                                <div class="col-2">
                                    <div class="counter">
                                        <button type="button" class="decrementBtn">-</button>
                                        <input class="quality" name="quantity" type="number" value="1" />
                                        <button type="button" class="incrementBtn">+</button>
                                    </div>
                                </div>
                                <div class="col-8 d-flex cartSection">
                                    <button type="submit" class="btn btn-primary">
                                        Add to Cart <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                                <div class="col-2 d-flex cartSection2">
                                    <a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                </div>
                                </form>


                            </div>
                             @endif
                            <h3 class="details">Category: <span class="details2">Vegetables</span></h3>
                            <div class="row d-flex">
                                <div class="col-2">
                                    <h3 class="detail1">Tag:</h3>
                                </div>
                                <div class="col-10"><span class="details2">Vegetables Healthy <span
                                            class="details3">Chinese</span> Cabbage Green Cabbage</span></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Product details ends -->

        <!-- Description  -->
        <section id="description">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">Descriptions</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Additional Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">Customer Feedback</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row">

                                <p>{!! $product->long_details !!}</P>


{{--
                            <div class="col-lg-6 descriptionImg">
                                <img src="./images/descriptionImg.png" class="img-fluid" alt="">
                                <div class="row d-flex">
                                    <div class="descriptionsm">
                                        <div class="row d-flex">
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionImg2.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>64% Discount</h5>
                                                        <p>Save your 64% money with us</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionIMg3.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>100% Organic</h5>
                                                        <p>100% Organic Vegetables</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row d-flex">
                            <div class="col-lg-6 Additional">
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Weight:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>03</p>
                                    </div>
                                </div> <br>
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Color:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>Green</p>
                                    </div>
                                </div> <br>
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Type:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>Organic</p>
                                    </div>
                                </div> <br>
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Category:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>Vegetables</p>
                                    </div>
                                </div> <br>
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Stock Status:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>Available (5,413)</p>
                                    </div>
                                </div> <br>
                                <div class="row d-flex">
                                    <div class="col-2">
                                        <h5>Tags:</h5>
                                    </div>
                                    <div class="col-10">
                                        <p>Vegetables, Healthy,<span>Chinese,</span> Cabbage, Green Cabbage,</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 descriptionImg">
                                <img src="./images/descriptionImg.png" class="img-fluid" alt="">
                                <div class="row d-flex">
                                    <div class="descriptionsm">
                                        <div class="row d-flex">
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionImg2.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>64% Discount</h5>
                                                        <p>Save your 64% money with us</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionIMg3.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>100% Organic</h5>
                                                        <p>100% Organic Vegetables</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="row d-flex">
                            <div class="col-lg-6 customerReview">
                                <div class="row d-flex">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./images/person1.png" alt="">
                                            </div>
                                            <div class="col-10 customerreviewCnt">
                                                <h5>Kristin Watson</h5>
                                                <div class="row d-flex">
                                                    <div class="rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <span>2 min ago</span>
                                    </div>

                                    <p>Duis at ullamcorper nulla, eu dictum eros.</p>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./images/person2.png" alt="">
                                            </div>
                                            <div class="col-10">
                                                <h5>Jane Cooper</h5>
                                                <div class="row d-flex">
                                                    <div class="rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star empty"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <span>30 Apr, 2021</span>
                                    </div>

                                    <p>Keep the soil evenly moist for the healthiest growth. If the sun gets too hot,
                                        Chinese cabbage tends to "bolt" or go to seed; in long periods of heat, some kind of
                                        shade may be helpful. Watch out for snails, as they will harm the plants.</p>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./images/person3.png" alt="">
                                            </div>
                                            <div class="col-10">
                                                <h5>Jacob Jones</h5>
                                                <div class="row d-flex">
                                                    <div class="rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <span>2 min ago</span>
                                    </div>

                                    <p> Vivamus eget euismod magna. Nam sed lacinia nibh, et lacinia lacus.</p>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="./images/person4.png" alt="">
                                            </div>
                                            <div class="col-10">
                                                <h5>Ralph Edwards</h5>
                                                <div class="row d-flex">
                                                    <div class="rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <span>2 min ago</span>
                                    </div>

                                    <p>200+ Canton Pak Choi Bok Choy Chinese Cabbage Seeds Heirloom Non-GMO Productive
                                        Brassica rapa VAR. chinensis, a.k.a. Canton's Choice, Bok Choi, from USA
                                    </p>
                                </div>
                                <a href="#">Load More</a>
                            </div>

                            <div class="col-lg-6 descriptionImg">
                                <img src="./images/descriptionImg.png" class="img-fluid" alt="">
                                <div class="row d-flex">
                                    <div class="descriptionsm">
                                        <div class="row d-flex">
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionImg2.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>64% Discount</h5>
                                                        <p>Save your 64% money with us</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 descriptionbg d-flex">
                                                <div class="row d-flex">
                                                    <div class="col-2">
                                                        <img src="./images/descriptionIMg3.png" alt="">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>100% Organic</h5>
                                                        <p>100% Organic Vegetables</p>
                                                    </div>
                                                </div>
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

        <!-- Description ends -->




        <!-- Related Products -->
        <section id="featured">
            <div class="container">
                <div class="heading d-flex justify-content-center align-items-center">
                    <h2>
                        Related Products
                    </h2>
                </div>

                <div class="featuredProducts">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <div class="label">
                                        Sale 50%
                                    </div>
                                    <a href="./shop.html"><img class="img-fluid" src="./images/apple.png"
                                            alt=""></a>


                                    <div class="quickLinks">
                                        <ul>
                                            <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="productCnt">
                                    <a href="./shop.html" class="productTitle">Green Apple</a>
                                    <p>$14.99 <del>$20.99</del></p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star empty"></i>
                                    </div>
                                    <a href="./shopping_cart.html" class="cardBtn"><i
                                            class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/shopCoauliflower.png"
                                            alt=""></a>


                                    <div class="quickLinks">
                                        <ul>
                                            <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="productCnt">
                                    <a href="./shop.html" class="productTitle">Chanise Cabbage</a>
                                    <p>$14.99</p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star empty"></i>
                                    </div>
                                    <a href="./shopping_cart.html" class="cardBtn"><i
                                            class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/capsicum.png"
                                            alt=""></a>


                                    <div class="quickLinks">
                                        <ul>
                                            <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="productCnt">
                                    <a href="./shop.html" class="productTitle">Green Capsicum</a>
                                    <p>$14.99</p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star empty"></i>
                                    </div>
                                    <a href="./shopping_cart.html" class="cardBtn"><i
                                            class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/okra.png"
                                            alt=""></a>


                                    <div class="quickLinks">
                                        <ul>
                                            <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="productCnt">
                                    <a href="./shop.html" class="productTitle">Ladies Finger</a>
                                    <p>$14.99</p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star empty"></i>
                                    </div>
                                    <a href="./shopping_cart.html" class="cardBtn"><i
                                            class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Related Products ends -->

        <!-- Subscriber  -->
        <section id="subscriber">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pe-6">
                        <h5>Subcribe our Newsletter</h5>
                        <p>
                            Pellentesque eu nibh eget mauris congue mattis mattis nec
                            tellus. Phasellus imperdiet elit eu magna.
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="">
                                    <input type="email" name="" id=""
                                        placeholder="Your email address" />
                                    <button>Subscribe</button>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-3 quickLinks">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </div>
                                    <div class="col-3 quickLinks">
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                    <div class="col-3 quickLinks">
                                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </div>
                                    <div class="col-3 quickLinks">
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscriber ends -->
    </main>
@endsection
