<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME')}} @yield('title' , '-Everything in best Quality')</title>
    <link
      rel="shortcut icon"
      href="{{asset('frontend/images/faviIcon.png')}}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />
  </head>
  <body>

    <!-- For boxicon -->
     <a href="#banner" id="scrollToBanner" class="scroll-box d-none d-lg-flex">
          <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!-- For cursor -->
     <div class="cursor-sm d-lg-block d-none"></div>

    <!-- For cursor ends -->
    <!-- Header Section  -->
    <header>
      <section id="topHeader" class="d-none d-md-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <address>
                <span><i class="fa-solid fa-location-dot"></i></span>
                Store Location: Lincoln- 344, Illinois, Chicago, USA
              </address>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <select>
                <option>ENG</option>
                <option>BAN</option>
              </select>
              <select>
                <option>USD</option>
                <option>BDT</option>
              </select>
            </div>
          </div>
        </div>
      </section>
      <section id="mainHeader" class="d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <ul class="mainMenu">
                <li><a href="./index.html" class="active">Home</a></li>
                <li>
                  <a href="./shop.html"
                    >Shop
                    <span><i class="fa-solid fa-angle-down"></i></span>
                  </a>

                  <ul class="submenu">
                     <li><a href="#"><i class="fa-solid fa-shirt"></i> Men's Fashion</a></li>
                     <li><a href="#"><i class="fa-solid fa-person-dress"></i> Women's Fashion</a></li>
                     <li><a href="#"><i class="fa-solid fa-laptop"></i> Electronics</a></li>
                     <li><a href="#"><i class="fa-solid fa-child"></i> Kids</a></li>
                     <li><a href="#"><i class="fa-solid fa-ellipsis"></i> Others</a></li>
                  </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./about.html">About us</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt="" /></a>
            </div>
            <div class="col-lg-5 quickLinks">
              <a href="tel:2195550114"
                ><span><i class="fa-solid fa-phone-volume"></i></span> (219)
                555-0114</a
              >
              <ul class="">
                <li >
                  <a class="glassmenu" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li>
                  <a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a>
                </li>
                <li>
                  <a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-regular fa-user"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Mobile Menu -->
  <section id="mobilemenu" class="d-lg-none">
  <div class="container-fluid px-0">
    <div class="headsection">
      <div class="d-flex align-items-center justify-content-between w-100 px-3 py-2">
        <!-- Menu Button -->
        <div class="col-auto ps-0">
          <button class="btn btn-menu" data-bs-toggle="offcanvas" href="#offcanvasExample">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
        
        <!-- Logo - Centered -->
        <div class="col text-center">
          <a href="./index.html">
            <img src="{{asset('frontend/images/logo.png')}}" alt="Ecobazar" class="mobile-logo">
          </a>
        </div>
        
        <!-- Icons Group - Right Aligned -->
        <div class="col-auto pe-0">
          <div class="icon-group">
            <a href="#" class="glassmenu me-2"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Offcanvas Menu -->
 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">
  <div class="offcanvas-header">
    <div class="offcanvas-logo">
      <a href="./index.html">
        <img src="{{asset('frontend/images/logo.png')}}" alt="Logo" class="img-fluid">
      </a>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  
  <div class="offcanvas-body">
    <ul class="mobile-nav">
      <li class="nav-item">
        <a href="./index.html" class="nav-link">
          <span class="nav-icon"><i class="fa-solid fa-house"></i></span>
          <span class="nav-text">Home</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <div class="dropdown-header" data-bs-toggle="dropdown">
          <span class="nav-icon"><i class="fa-solid fa-store"></i></span>
          <span class="nav-text"><a href="./shop.html" style="color: var(--grey-scale--gray-scale-gray-–-900)">Shop</a>
            </span>
          <span class="dropdown-arrow"><i class="fa-solid fa-chevron-down"></i></span>
        </div>
        <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="#"><i class="fa-solid fa-shirt"></i> Men's Fashion</a></li>
          <li class="dropdown-item"><a href="#"><i class="fa-solid fa-person-dress"></i> Women's Fashion</a></li>
          <li class="dropdown-item"><a href="#"><i class="fa-solid fa-laptop"></i> Electronics</a></li>
          <li class="dropdown-item"><a href="#"><i class="fa-solid fa-child"></i> Kids</a></li>
          <li class="dropdown-item"><a href="#"><i class="fa-solid fa-ellipsis"></i> Others</a></li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <span class="nav-icon"><i class="fa-solid fa-blog"></i></span>
          <span class="nav-text">Blog</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="./contact.html" class="nav-link">
          <span class="nav-icon"><i class="fa-solid fa-envelope"></i></span>
          <span class="nav-text">Contact</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="./about.html" class="nav-link">
          <span class="nav-icon"><i class="fa-solid fa-info-circle"></i></span>
          <span class="nav-text">About Us</span>
        </a>
      </li>
    </ul>
    
    <div class="offcanvas-footer">
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <p class="copyright">© 2023 Your Brand. All rights reserved.</p>
    </div>
  </div>
</div>
</section>
      <!-- Mobile Menu Ends -->
    </header>

    <!-- Main -->
    <!-- Banner Slider Starts  -->
    <main>
      <section id="banner">
        <div class="bannerSlider">
          <div
            class="bannerSlide"
            style="background-image: url({{asset('frontend/images/BG.png')}})"
          >
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-lg-6 bannerImage">
                  <img
                    class="img-fluid"
                    src="{{asset('frontend/images/banner_image1.png')}}"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 bannerCnt">
                  <h4>Welcome to shopery</h4>
                  <h2>Fresh & Healthy<br />Organic Food</h2>
                  <h3>Sale up to <span>30% OFF</span></h3>
                  <p>Free shipping on all your order. we deliver, you enjoy</p>
                  <a class="btn btn-primary" href="./shop.html"
                    >Shop now
                    <span><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="bannerSlide"
            style="background-image: url({{asset('frontend/images/Header.png')}})"
          >
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-lg-6 bannerImage">
                  <img
                    class="img-fluid"
                    src="{{asset('frontend/images/Banner_image2-removebg-preview.png')}}"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 bannerCnt">
                  <h4>Welcome to shopery</h4>
                  <h2>Fresh & Healthy<br />Organic Food</h2>
                  <h3>Sale up to <span>30% OFF</span></h3>
                  <p>Free shipping on all your order. we deliver, you enjoy</p>
                  <a class="btn btn-primary" href="./shop.html"
                    >Shop now
                    <span><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="bannerSlide"
            style="background-image: url({{asset('frontend/images/BG.png')}})"
          >
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-lg-6 bannerImage">
                  <img
                    class="img-fluid"
                    src="{{asset('frontend/images/banner_image3.png')}}"
                    alt=""
                  />
                </div>
                <div class="col-lg-6 bannerCnt">
                  <h4>Welcome to shopery</h4>
                  <h2>Fresh & Healthy<br />Organic Food</h2>
                  <h3>Sale up to <span>30% OFF</span></h3>
                  <p>Free shipping on all your order. we deliver, you enjoy</p>
                  <a class="btn btn-primary" href="./shop.html"
                    >Shop now
                    <span><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="bannerleftArrow" class="leftArrow">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
        <div id="bannerrightArrow" class="rightArrow">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </section>

      <!--   Free Shopping Section -->
         <section id="Shopping">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 card1">
                <div class="cardImg">
                  <img src="{{asset('frontend/images/truck.png')}}" alt="">
                </div>
                <div class="cardCnt">
                  <h4>Free Shipping</h4>
                  <p>Free shipping with discount</p>
                </div>
              </div>
             <div class="col-lg-3 card2">
                <div class="cardImg">
                   <img src="{{asset('frontend/images/headphone.png')}}" alt="">
                </div>
                <div class="cardCnt">
                  <h4>Great Support 24/7</h4>
                  <p>Instant access to Contact</p>
                </div>
              </div>
              <div class="col-lg-3 card3">
                <div class="cardImg">
                   <img  src="{{asset('frontend/images/bag2.png')}}" alt="">
                </div>
                <div class="cardCnt">
                  <h4>100% Sucure Payment</h4>
                  <p>We ensure your money is save</p>
                </div>
              </div>
            <div class="col-lg-3 card4">
                <div class="cardImg">
                   <img  src="{{asset('frontend/images/package.png')}}" alt="">
                </div>
                <div class="cardCnt">
                  <h4>Money-Back Guarantee</h4>
                  <p>30 days money-back</p>
                </div>
              </div>
            </div>
          </div>
         </section>
      <!--   Free Shopping Section Ends -->


      <!-- Featured Products -->
       <section id="featured">
        <div class="container">
          <div class="heading d-flex justify-content-between align-items-center">
             <h2>
             Featured Products
          </h2>
          <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="featuredProducts">
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="productCard">
                  <div class="productThumb">
                    <div class="label">
                      Sale 50%
                    </div>
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/apple.png')}}" alt=""></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="#" class="productTitle">Green Apple</a>
                    <p>$14.99 <del>$20.99</del></p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./product_details.html"><img class="img-fluid" src="{{asset('frontend/images/cabbage.png')}}" alt=""></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./product_details.html" class="productTitle">Chanise Cabbage</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/capsicum.png')}}" alt=""></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="#" class="productTitle">Green Capsicum</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/okra.png')}}" alt=""></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="#" class="productTitle">Okra</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>
               <div class="col-lg-3 col-6">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/capsicum.png')}}" alt=""></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="#" class="productTitle">Green Capsicum</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
       </section>

      <!-- Features products ends -->

      <!-- Product categories -->
      <section id="productCategory">
        <div class="container">
          <div class="heading2 d-flex justify-content-between align-items-center">
            <h2>Shop by Top Categories</h2>
            <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <div class="categoryCard">
            <div class="col-lg-2 ">
                <div class="categoriesCards">
                   <a href="#"><img class="img-fluid" src="{{asset('frontend/images/vegetables.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Vegetables</h4>
                 <p>165 Products</p>
              </div>
            </div>

                </div>

                 
             <div class="col-lg-2">
                <div class="categoriesCards">
                  <a href="#"><img class="img-fluid" src="{{asset('frontend/images/fruits 1.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Fresh Fruit</h4>
                 <p>137 Products</p>
              </div>
            </div>
                </div>
                  
             <div class="col-lg-2">
                <div class="categoriesCards">
                  <a href="#"><img class="img-fluid" src="{{asset('frontend/images/fish 1.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Fish</h4>
                 <p>34 Products</p>
              </div>
            </div>
                </div>
                  
             <div class="col-lg-2">
                <div class="categoriesCards">
                  <a href="#"><img class="img-fluid" src="{{asset('frontend/images/meat 1.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Meat</h4>
                 <p>165 Products</p>
              </div>
            </div>
                </div>
                  
             <div class="col-lg-2">
                <div class="categoriesCards">
                  <a href="#"><img class="img-fluid" src="{{asset('frontend/images/soft-drink 1.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Water and Drinks</h4>
                 <p>48 Products</p>
              </div>
            </div>
                </div>
                  
             <div class="col-lg-2">
                <div class="categoriesCards">
                  <a href="#"><img class="img-fluid" src="{{asset('frontend/images/snacks 1.png')}}" alt=""></a>
                
              <div class="categoryCnt">
                 <h4>Snacks</h4>
                 <p>165 Products</p>
              </div>

                </div>
                  
            </div>
            
            
           
               
                  
             

          </div>
          </div>
          

      
    
      </section>


      <!-- Product categories ends -->


      <!-- Food Store -->
       <section id="foodstore">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 foodstoreImg d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{asset('frontend/images/foodstoreimg.png')}}" alt="">
          </div>
          <div class="col-lg-6 foodstoreCnt fade-up">
            <h4>100% Trusted<br>Organic Food Store</h4>
            <div class="row">
              <div class="col-lg-1 child1Img"><img src="{{asset('frontend/images/Check.png')}}" alt=""></div>
              <div class="col-lg-11 child1Cnt"> <p class="p1">Healthy & natural food for lovers of healthy food.</p></div>
            </div>
            <p class="p2">Ut quis tempus erat. Phasellus euismod bibendum magna non tristique. Pellentesque semper vestibulum elit sed condimentum. Nunc pretium fermentum interdum. </p>
            <div class="row">
              <div class="col-lg-1 child2Img"><img src="{{asset('frontend/images/Check.png')}}" alt=""></div>
              <div class="col-lg-11 child2Cnt"><p class="p3">Every day fresh and quality products for you.</p></div>

            </div>
            <p class="p4">Maecenas vehicula a justo quis laoreet. Sed in placerat nibh, a posuere ex. Morbi sem neque, aliquam sed orci et, rhoncus lobortis felis. Sed vestibulum nisl sit amet sapien.</p>
             <a class="btn btn-primary" href="./shop.html">Shop Now <i class="fa-solid fa-arrow-right"></i></a> 
          </div>

          </div>
          
        </div>
       </section>


      <!-- Food Store ends -->

      <!-- Counter section -->
       <section id="Counter">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="counter1">
                <h5 class="count">37</h5>
                <p>Years of Hard Work</p>
              </div>
            </div>
             <div class="col-lg-3 col-6 mb-4 mb-lg-0">
              <div class="counter1">
                <h5 class="count">500000</h5>
                <p>Happy Customer</p>
              </div>
            </div>
             <div class="col-lg-3 col-6">
              <div class="counter1">
                <h5 class="count">28</h5>
                <p>Qualified Team Member</p>
              </div>
            </div>
             <div class="col-lg-3 col-6">
              <div class="counter1">
                <h5 class="count">750000</h5>
                <p>Monthly Orders</p>
              </div>
            </div>

          </div>
        </div>
       </section>

       <!-- Counter section ends -->


       <!-- Two banner section -->
        <section id="twobanner">
          <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 TwoBanner">
                <a href="./shop.html"><img src="{{asset('frontend/images/1stbanner.png')}}" alt="" class="img-fluid"></a>
              </div>
               <div class="col-lg-6 TwoBanner">
                <a href="./shop.html"><img src="{{asset('frontend/images/2ndbanner.png')}}" alt="" class="img-fluid"></a>
              </div>
            </div>
          </div>
        </section>
       <!-- Two banner section ends -->


        <!-- Seller Product Cards -->
      <section id="sellerProduct">
        <div class="container">
          <div class="heading d-flex justify-content-between align-items-center">
             <h2>
             Best Seller Products
          </h2>
          <a href="#">View All <i class="fa-solid fa-arrow-right"></i></a>
          </div>

          <div class="featuredProducts">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <div class="label">
                      Sale 50%
                    </div>
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/apple.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
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
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./product_details.html"><img class="img-fluid" src="{{asset('frontend/images/cabbage.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./product_details.html" class="productTitle">Chanise Cabbage</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/lettuce.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./shop.html" class="productTitle">Green Lettuce</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/Chilli.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./shop.html" class="productTitle">Green Chili</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>
               <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/corn.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./shop.html" class="productTitle">Corn</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <div class="productCard">
                  <div class="productThumb">
                    <a href="./product_details.html"><img class="img-fluid" src="{{asset('frontend/images/cabbage.png')}}" alt="" style="width: 248px; border-radius: 8px 8px 0px 0px;"></a>

                  
                   <div class="quickLinks">
                    <ul>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
                  </div>
                  </div>
                 
                  <div class="productCnt">
                    <a href="./product_details.html" class="productTitle">Chanise Cabbage</a>
                    <p>$14.99</p>
                    <div class="rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star empty"></i>
                    </div>
                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
       </section>


        <!-- Seller Product Cards -->

        <!-- Small Cards -->
        <section id="SmallCards">
  <div class="container">
    <div class="row justify-content-center ml-7">
      <div class="col-lg-8 order-2 order-lg-1">
        <div class="row ">
          <!-- Hot Deals Card -->
          <div class="col-md-4 mb-3">
            <h4>Hot Deals</h4>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/apple1.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Apple</h5>
                    <p class="mb-1">$14.99</p>
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
               <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/orange.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Malta</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/small_lettuce.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Lettuce</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
           
          </div>

         
          <div class="col-md-4 mb-3">
            <h4>Best Seller</h4>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/eggplant.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Eggplant</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/small_okra.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Capsicum</h5>
                    <p class="mb-1">$14.99 <del>$20.99</del></p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/tomato.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Tomatos</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
          </div>

         <div class="col-md-4 mb-3">
            <h4>Top Rated</h4>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/potatos.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Big Potatos</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/small_corn.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Corn</h5>
                    <p class="mb-1">$14.99 <del>$20.99</del></p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="./shop.html"><img src="{{asset('frontend/images/coliflower.png')}}" class="img-fluid" alt="Green Apple"></a>
                  </div>
                  <div class="col-8 CardCnt1">
                    <h5 class="mb-1">Cauliflower</h5>
                    <p class="mb-1">$14.99</p>
                    <div class="text-warning">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                  </div>
                </div>
                <div class="quickLinks">
                    <ul class="d-flex gap-3">
                      <li><a href="./shopping_cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                      <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                      <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                    </ul>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
      <div class="col-lg-4 order-1 order-lg-2 SmallCardImg">
        <div class="position-relative">
          <a href="./shop.html"><img src="{{asset('frontend/images/hotDeals_banner.png')}}" class="img-fluid" alt="Hot Deals"></a> 
        </div>
      </div> 
    </div>
  </div>
        </section>
        <!-- Small Cards ends -->


        <!-- Latest News-->
         <section id="NewsCards">
          <div class="container">
            <h2>BLOG</h2>
              <h5>Latest News</h5>
            <div class="row">
              <div class="col-lg-4 cards">
                <div class="cardImg">
                  <a href="#"><img src="{{asset('frontend/images/newsImage1.png')}}" class="img-fluid" alt=""></a>
                </div>
                
                <div class="cardCnt">
                  <div class="row">
                    <div class="col-4 food">
                     <span><i class="fa-solid fa-tag"></i>Food</span>
                    </div>
                     <div class="col-4 admin">
                      <span><i class="fa-solid fa-user-tie"></i>By Admin</span>
                    </div>
                     <div class=" col-4 comment">
                      <span><i class="fa-solid fa-message"></i>65 Comments</span>
                    </div>
                  </div>
                  <p>Curabitur porttitor orci eget neque accumsan venenatis. Nunc fermentum.</p>
                  <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="label">
                  <h3>18</h3>
                  <p>Nov</p>
                </div>

              </div>
              <div class="col-lg-4 cards">
                <div class="cardImg">
                  <a href="#"><img src="{{asset('frontend/images/newsCard2.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="cardCnt">
                  <div class="row">
                    <div class="col-4 food">
                     <span><i class="fa-solid fa-tag"></i>Food</span>
                    </div>
                     <div class="col-4 admin">
                      <span><i class="fa-solid fa-user-tie"></i>By Admin</span>
                    </div>
                     <div class="col-4 comment">
                      <span><i class="fa-solid fa-message"></i>65 Comments</span>
                    </div>
                  </div>
                  <p>Curabitur porttitor orci eget neque accumsan venenatis. Nunc fermentum.</p>
                  <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="label">
                  <h3>23</h3>
                  <p>Jan</p>
                </div>

              </div>
              <div class="col-lg-4 cards">
                <div class="cardImg">
                  <a href="#"><img src="{{asset('frontend/images/newsCard3.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="cardCnt">
                  <div class="row">
                    <div class="col-4 food">
                     <span><i class="fa-solid fa-tag"></i>Food</span>
                    </div>
                     <div class="col-4 admin">
                      <span><i class="fa-solid fa-user-tie"></i>By Admin</span>
                    </div>
                     <div class=" col-4 comment">
                      <span><i class="fa-solid fa-message"></i>65 Comments</span>
                    </div>
                  </div>
                  <p>Curabitur porttitor orci eget neque accumsan venenatis. Nunc fermentum.</p>
                  <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="label">
                  <h3>18</h3>
                  <p>Nov</p>
                </div>

              </div> 
              

            </div>
          </div>
         </section>
        <!-- Latest News ends -->

        <!-- Customer reviews  -->
         <section id="CustomerReviews">
          <div class="container">
            <h2>Testimonial</h2>
            <h4>What Our Customer Says</h4>
            <div class="arrows">
              <a href="#" id="prev"><i class="fa-solid fa-arrow-left"></i></a>
              <a href="#" id="next"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="mainCnt">
              <div class="row review-slider">
              <div class="col-lg-3 col-12 reviews1">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review1.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Robert Fox</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 reviews2">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review2.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Dianne Russell</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 reviews3">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review3.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Eleanor Pena</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 reviews1">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review1.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Robert Fox</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 reviews2">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review2.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Dianne Russell</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-12 reviews3">
                <img src="{{asset('frontend/images/Testimonial.png')}}" class="img-fluid" alt="">
                <p class="p1">Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('frontend/images/review3.png')}}" alt="">
                  </div>
                  <div class="col-2 reviewer">
                    <h5>Eleanor Pena</h5>
                    <p>Customer</p>
                  </div>
                  <div class="col-6 stars">
                     <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              
              

              </div>
             
            </div>
          </div>
         </section>
        <!-- Customer rev ends -->

        <!-- Steps section  -->
         <section id="Steps">
          <div class="container">
            <div class="heading">
              <div class="row">
                <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/steps.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/mango-1.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/food network.png')}}" class="img-fluid" alt=""></a>
                </div>
               <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/food.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/bookoff-corporation-logo.png')}}" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-2 col-4 logo">
                  <a href="#"><img src="{{asset('frontend/images/gseries.png')}}" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="Card1">
                    <a href="#"><img src="{{asset('frontend/images/location1.png')}}" alt=""></a>
                    <h5>Our Location</h5>
                    <p>1901 Thornridge Cir. Shiloh, Washington DC 20020, United States</p>

                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="Card1">
                    <a href="#">
                      <img src="{{asset('frontend/images/call1.png')}}" alt="">
                    </a>
                    <h5>Call Us 24/7</h5>
                    <a href="3035550105">
                      <p>(303) 555-0105</p>
                    </a>
                    

                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card2">
                    <a href="#"><img src="{{asset('frontend/images/email1.png')}}" alt=""></a>
                    <h6>Subscribe Newsletter</h6>
                    <form action="">
                      <input type="email" placeholder="Your email address" required>
                      <button>Subscribe</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>
        <!-- Steps section ends -->


















      <!-- Search Menu bar -->
       <section class="searchMenu">
         <button class="closeSearch"><i class="fa-solid fa-xmark"></i></button>
        <div class="searchArea">
            <input type="text" placeholder="Search here....">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="results">
            <div class="row">
                <div class="col-lg-3">
                    <div class="productCard my-3">
                        <div class="productThumb">
                            <div class="quickLinks">
                                <ul>
                                    <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                </ul>

                            </div>
                            <div class="label">
                                Sale 50% 
                            </div>
                            <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/apple.png')}}" alt=""></a>
                            
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
                            <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="productCard my-3">
                        <div class="productThumb">
                            <div class="quickLinks">
                                <ul>
                                    <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                </ul>

                            </div>
                            
                            <a href="./product_details.html"><img class="img-fluid" src="{{asset('frontend/images/cabbage.png')}}" alt=""></a>
                            
                        </div>
                        
                        <div class="productCnt">
                            <a href="./product_details.html" class="productTitle">Chanise Cabbage</a>
                            <p>$14.99</p>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star empty"></i>

                            </div>
                            <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="productCard my-3">
                        <div class="productThumb">
                            <div class="quickLinks">
                                <ul>
                                    <li><a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                </ul>

                            </div>
                            <a href="./shop.html"><img class="img-fluid" src="{{asset('frontend/images/capsicum.png')}}" alt=""></a>
                            
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
                            <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>
                </div>
               
               
               
            </div>
        </div>
       </section>
      <!-- Search Menu Bar ends -->
    </main>

    <!-- Footer for desktop -->
     <footer>
      <section id="DekstopFooter">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 logo">
              <a href="#"><img src="{{asset('frontend/images/FooterLogo.png')}}" alt=""></a>
              <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magn.</p>
              <div class="row">
                <div class="col-3 quickLinks"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></div>
                <div class="col-3 quickLinks"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                <div class="col-3 quickLinks"><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></div>
                <div class="col-3 quickLinks"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
              </div>
            </div>
            <div class="col-lg-2 account">
              <h4>My Account</h4>
              <a href="#">My Account</a> <br>
              <a href="#">Order History</a> <br>
              <a href="./shopping_cart.html">Shoping Cart</a> <br>
              <a href="./wishlist.html">Wishlist</a>
            </div>
            <div class="col-lg-2 help">
              <h4>Helps</h4>
              <a href="./contact.html">Contact</a> <br>
               <a href="#">Faqs</a> <br>
                <a href="#">Terms & Condition</a> <br>
                 <a href="#">Privacy Policy</a>
            </div>
            <div class="col-lg-2 proxy">
              <h4>Proxy</h4>
              <a href="./about.html">About</a> <br>
              <a href="./shop.html">Shop</a> <br>
              <a href="./product_details.html">Product</a> <br>
              <a href="./billing Information.html">Track Order</a>
            </div>
            <div class="col-lg-3 apps">
              <h5>Download Mobile App</h5>
              <div class="row">
                <div class="col-6 stores">
                  <a href="#"><img src="{{asset('frontend/images/App Store.png')}}" class="img-fluid" alt=""></a>
                </div>
                 <div class="col-6 stores1">
                  <a href="#"><img src="{{asset('frontend/images/Google Play.png')}}" class="img-fluid" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row EndFooter">
            <div class="col-lg-6">
              <a href="#"><h2>Ecobazar eCommerce © 2021. All Rights Reserved</h2></a>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-2 me-2">
                  <a href="#"><img src="{{asset('frontend/images/Method=ApplePay.png')}}" alt=""></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"><img src="{{asset('frontend/images/Method=Visa.png')}}" alt=""></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"><img src="{{asset('frontend/images/Method=Discover.png')}}" alt=""></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"><img src="{{asset('frontend/images/Method=Mastercard.png')}}" alt=""></a>
                </div>
                <div class="col-2">
                  <a href="#"><img src="{{asset('frontend/images/Cart.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     </footer>
    <!-- Footer for deskt ends -->
    <!-- Banner slider ends -->

    <!-- Main Ends -->

    <!-- Footer for responsive  -->
    <footer>
      <section id="mobileFooter" class="d-lg-none">
        <div class="container">
          <ul>
            <li>
              <a href="./shop.html">
                <span><i class="fa-solid fa-store"></i></span>
                Shop
              </a>
            </li>
            <li>
              <a href="./wishlist.html">
                <span><i class="fa-regular fa-heart"></i></span>
                Wishlist
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="fa-regular fa-user"></i></span>
                My Account
              </a>
            </li>
          </ul>
        </div>
      </section>
    </footer>
    <!-- Footer Ends -->

    <!-- Header Section ends -->

    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>
  </body>
</html>
