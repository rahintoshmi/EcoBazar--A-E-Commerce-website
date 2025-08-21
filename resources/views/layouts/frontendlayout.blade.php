<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} @yield('title', '-Everything in best Quality')</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/faviIcon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <style>
      #searchResult{
        z-index: 999;
        top: 19%;
        width:271.4px;
        left: 29.4%;
      }
      #searchResult li a{
         font-size: 14px;
         color: #000;
         display: block;
         padding: 5px 0 ;
         border-bottom:1px solid #ccc;
      }
    </style>
</head>

<body>
    <!-- For cursor -->
    <div class="cursor-sm d-lg-block d-none"></div>
    <!-- For boxicon -->
    <a href="#banner" id="scrollToBanner" class="scroll-box d-none d-lg-flex">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!-- For cursor ends -->
    <!-- Header section -->
    <header>
        <!-- Top header -->
        <section id="topHeaderShop">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 address-container d-flex justify-content-start align-items-center">
                        <address>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            Store Location: Lincoln- 344, Illinois, Chicago, USA
                        </address>
                    </div>
                    <div class="col-md-6 d-none d-lg-flex justify-content-end align-items-center content">
                        <select>
                            <option>ENG</option>
                            <option>BAN</option>
                        </select>
                        <select>
                            <option>USD</option>
                            <option>BDT</option>
                        </select>
                        <a href="#">Sign In /Sign Up</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Header ends -->
        <!-- Main Header starts -->
        <section id="mainHeaderShop" class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-5 links d-flex justify-content-center align-items-center">
                        <form action="{{ route('frontend.shop') }}" method="GET">
                            @csrf
                            <input type="text" placeholder="Search" />
                            <button>Search</button>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <div class="position-absolute bg-white p-3 shadow" id="searchResult" style="display: none">
                          <ul>
                            <li><a href="">Product Title</a></li>
                            <li><a href="">Product Title</a></li>
                            <li><a href="">Product Title</a></li>
                            <li><a href="">Product Title</a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 quickLinks">
                        <ul>
                            <li>
                                <a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                            </li>
                            <a href="#" class="cartno"><span>3</span></a>
                            <div class="cartlines">
                                <p>Shopping cart:</p>
                                <h2>$57.00</h2>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Header ends -->
        <!-- Bottom header starts -->

        <section id="bottomHeaderShop" class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <ul class="mainMenu">
                            <li><a href="{{ url('/') }}" class="active">Home</a></li>
                            <li>
                                <a href="./shop.html">Shop
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </a>

                                <ul class="submenu">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('frontend.shop', $category->slug) }}"><img
                                                    src="{{ getImage($category->icon) }} "
                                                    alt="{{ $category->title }}"
                                                    width="30px">{{ $category->title }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                            <li><a href="./about.html">About us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 quickLinks">
                        <a href="tel:2195550114"><span><i class="fa-solid fa-phone-volume"></i></span> (219)
                            555-0114</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bottom header ends -->


        <!-- Mobile Header -->
        <section id="mobileHeaderShop" class="d-lg-none">
            <div class="mobile-top-bar">
                <button class="btn menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a href="./index.html" class="logo">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt="Ecobazar Logo" />
                </a>
                <div class="header-actions">
                    <a href="./wishlist.html" class="wishlist-icon">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="./shopping_cart.html" class="cart-icon">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="cart-badge">3</span>
                    </a>
                </div>
            </div>

            <div class="mobile-search-bar">
                <form class="search-form">
                    <input type="text" placeholder="Search organic products..." />
                    <button type="submit" class="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            <div class="offcanvas offcanvas-top mobile-menu" tabindex="-1" id="offcanvasTop">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="mobile-nav">
                        <ul class="nav-links">
                            <li><a href="./index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="./shop.html"><i class="fas fa-store"></i> Shop</a></li>
                            <li><a href="./categories.html"><i class="fas fa-list"></i> Categories</a></li>
                            <li><a href="./about.html"><i class="fas fa-info-circle"></i> About Us</a></li>
                            <li><a href="./contact.html"><i class="fas fa-envelope"></i> Contact</a></li>
                        </ul>

                        <div class="menu-divider"></div>

                        <ul class="nav-links">
                            <li><a href="./account.html"><i class="fas fa-user"></i> My Account</a></li>
                            <li><a href="./wishlist.html"><i class="fas fa-heart"></i> Wishlist</a></li>
                        </ul>

                        <div class="menu-divider"></div>

                        <div class="cart-summary">
                            <div class="cart-total">
                                <span>Cart Total:</span>
                                <strong>$57.00</strong>
                            </div>
                            <a href="./shopping_cart.html" class="btn view-cart-btn">View Cart</a>
                        </div>
                    </nav>
                </div>
            </div>
        </section>




        <section id="mobileSidemenuShop" class="d-lg-none">
            <!-- Header section ends -->
            <!-- sidemenu for mobile -->
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8">

                    </div>
                </div>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div
                        class="offcanvas-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                        <!-- Logo -->
                        <a href="./index.html">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo"
                                style="height: 40px;" />
                        </a>

                        <!-- Close Button -->
                        <button type="button" class="btn btn-light rounded-circle shadow-sm"
                            data-bs-dismiss="offcanvas" aria-label="Close"
                            style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; background-color: white; color: black; border: 1px solid grey; :hover { background-color: var(--branding-success); :hover i { color: white; } }">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <div class="offcanvas-body">
                        <div class="accordion" id="accordionExample1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button custom" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true"
                                        aria-controls="collapseOne1">
                                        All Categories
                                    </button>
                                </h2>
                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <form action="">
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Fresh Fruit (25) <span> (134)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Vegetables <span> (54)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Cooking <span> (134)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Snacks <span> (47)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Beverages <span> (43)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Beauty & Health <span> (38)</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="option" value="option1" />
                                                Bread & Bakery <span> (15)</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button custom" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne2" aria-expanded="false"
                                        aria-controls="collapseOne2">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseOne2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <input type="range" id="brightness" name="brightness" min="50"
                                            max="1500" />
                                        <h3>Price: <span>50 — 1,500</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button custom" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne3" aria-expanded="false"
                                        aria-controls="collapseOne3">
                                        Rating
                                    </button>
                                </h2>
                                <div id="collapseOne3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <input type="checkbox" name="" id="" />
                                                <label for="checkbox">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </label>
                                                <h4>5.0</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <input type="checkbox" name="" id="" />
                                                <label for="checkbox">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                </label>
                                                <h4>4.0 & up</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <input type="checkbox" name="" id="" />
                                                <label for="checkbox">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                </label>
                                                <h4>3.0 & up</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <input type="checkbox" name="" id="" />
                                                <label for="checkbox">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                </label>
                                                <h4>2.0 & up</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 d-flex">
                                                <input type="checkbox" name="" id="" />
                                                <label for="checkbox">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                    <i class="fa-solid fa-star empty"></i>
                                                </label>
                                                <h4>1.0 & up</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button custom" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne4" aria-expanded="false"
                                        aria-controls="collapseOne4">
                                        Popular Tag
                                    </button>
                                </h2>
                                <div id="collapseOne4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <a href="#">Healthy</a>
                                        <a href="#">Low fat</a>
                                        <a href="#">Vegetarian</a>
                                        <a href="#">Kid foods</a>
                                        <a href="#">Vitamins</a>
                                        <a href="#">Bread</a>
                                        <a href="#">Meat</a>
                                        <a href="#">Snacks</a>
                                        <a href="#">Tiffin</a>
                                        <a href="#">Launch</a>
                                        <a href="#">Dinner</a>
                                        <a href="#">Breackfast</a>
                                        <a href="#">Fruit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shopBanner">
                            <img src="{{ asset('frontend/images/shopBanner.png') }}" class="img-fluid"
                                alt="" />
                        </div>
                        <h6>Sale Products</h6>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4 CardImg1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/images/shopRedCapsicum.png') }}"
                                                alt="Green Apple" /></a>
                                    </div>
                                    <div class="col-8 CardCnt1">
                                        <h5 class="mb-1">Red Capsicum</h5>
                                        <p class="mb-1">$32.0 <del>$20.99</del></p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4 CardImg1">
                                        <a href="#"><img src="{{ asset('frontend/images/shopMango.png') }}"
                                                alt="Green Apple" /></a>
                                    </div>
                                    <div class="col-8 CardCnt1">
                                        <h5 class="mb-1">Chanise Cabbage</h5>
                                        <p class="mb-1">$24.0 <del>$20.99</del></p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4 CardImg1">
                                        <a href="#"><img
                                                src="{{ asset('frontend/images/shopGreenCapsicum.png') }}"
                                                alt="Green Apple" /></a>
                                    </div>
                                    <div class="col-8 CardCnt1">
                                        <h5 class="mb-1">Green Capsicum</h5>
                                        <p class="mb-1">$32.0 <del>$20.99</del></p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-footer">
                        <p>&copy; 2025 EcoBazar. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- Sidemenu for mobile ends -->
    @yield('main')




    <!-- Subscriber  -->
    <section id="subscriber">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h5>Subcribe our Newsletter</h5>
                    <p>
                        Pellentesque eu nibh eget mauris congue mattis mattis nec
                        tellus. Phasellus imperdiet elit eu magna.
                    </p>
                </div>
                <div class="col-lg-6">
                    <form action="">
                        <input type="email" name="" id="" placeholder="Your email address" />
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscriber ends -->
    </main>
    <!-- Footer for dekstop -->
    <footer>
        <section id="DekstopFooterShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 logo">
                        <a href="#"><img src="{{ asset('frontend/images/FooterLogo.png') }}"
                                alt="" /></a>
                        <p>
                            Morbi cursus porttitor enim lobortis molestie. Duis gravida
                            turpis dui, eget bibendum magn.
                        </p>
                        <div class="row">
                            <a href="tel:2195550114">(219) 555-0114 <span>or</span> Proxy@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-2 account">
                        <h4>My Account</h4>
                        <a href="#">My Account</a> <br />
                        <a href="./billing Information.html">Order History</a> <br />
                        <a href="./shopping_cart.html">Shoping Cart</a> <br />
                        <a href="./wishlist.html">Wishlist</a>
                    </div>
                    <div class="col-lg-2 help">
                        <h4>Helps</h4>
                        <a href="./contact.html">Contact</a> <br />
                        <a href="#">Faqs</a> <br />
                        <a href="#">Terms & Condition</a> <br />
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="col-lg-2 proxy">
                        <h4>Proxy</h4>
                        <a href="./about.html">About</a> <br />
                        <a href="./shop.html">Shop</a> <br />
                        <a href="#">Product</a> <br />
                        <a href="./billing Information.html">Track Order</a>
                    </div>
                    <div class="col-lg-3 apps">
                        <h4>Categories</h4>
                        <a href="#">Fruit & Vegetables</a> <br />
                        <a href="#">Meat & Fish</a> <br />
                        <a href="#">Bread & Bakery</a> <br />
                        <a href="#">Beauty & Health</a>
                    </div>
                </div>
                <div class="row EndFooter">
                    <div class="col-lg-6">
                        <a href="#">
                            <h2>Ecobazar eCommerce © 2021. All Rights Reserved</h2>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-2 me-2">
                                <a href="#"><img src="{{ asset('frontend/images/Method=ApplePay.') }}"
                                        alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="{{ asset('frontend/images/Method=Visa.') }}"
                                        alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="{{ asset('frontend/images/Method=Discover.') }}"
                                        alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="{{ asset('frontend/images/Method=Mastercard.') }}"
                                        alt="" /></a>
                            </div>
                            <div class="col-2">
                                <a href="#"><img src="{{ asset('frontend/images/Cart.') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer for dekstop ends -->

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <script>
        //*search Bar
        $('#mainHeaderShop input').keyup(function() {
            let searchValue = $(this).val()
            if(searchValue.length >=3){
              $('#searchResult').slideDown();
            }else{
              $('#searchResult').hide();
            }
        })
    </script>
</body>

</html>
