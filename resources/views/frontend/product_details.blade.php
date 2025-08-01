<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoBazar</title>
    <link rel="shortcut icon" href="./images/faviIcon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
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
              <a href="./index.html">
                <img src="./images/logo.png" alt="" />
              </a>
            </div>
            <div
              class="col-lg-5 links d-flex justify-content-center align-items-center"
            >
              <form action="">
                <input type="text" placeholder="Search" />
                <button>Search</button>
                <i class="fa-solid fa-magnifying-glass"></i>
              </form>
            </div>
            <div class="col-lg-4 quickLinks">
              <ul>
                <li>
                  <a href="./wishlist.html"
                    ><i class="fa-regular fa-heart"></i
                  ></a>
                </li>
                <li>
                  <a href="./shopping_cart.html"
                    ><i class="fa-solid fa-bag-shopping"></i
                  ></a>
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
                <li><a href="#">Pages</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./about.html">About us</a></li>
              </ul>
            </div>
            <div class="col-lg-5 quickLinks">
              <a href="tel:2195550114"
                ><span><i class="fa-solid fa-phone-volume"></i></span> (219)
                555-0114</a
              >
            </div>
          </div>
        </div>
      </section>
      <!-- Bottom header ends -->
      

      <!-- Mobile Header -->
  <section id="mobileHeaderShop" class="d-lg-none">
  <div class="mobile-top-bar">
    <button
      class="btn menu-toggle"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasTop"
      aria-controls="offcanvasTop"
    >
      <i class="fa-solid fa-bars"></i>
    </button>
    <a href="./index.html" class="logo">
      <img src="./images/logo.png" alt="Ecobazar Logo" />
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
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
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
      

      <!-- Mobile header ends -->
       <!-- Background header -->
      <section id="backgroundHeader" >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <a href="./index.html">
                <i class="fa-solid fa-house"></i>
              </a>
              <a href="#"><span> Category > Vegetables > Chinese Cabbage</span> </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Background Header ends -->
   
    </header>
    <section id="mobileSidemenuShop" class="d-lg-none">
    <!-- Header section ends -->
    <!-- sidemenu for mobile -->
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-8">
            
          </div>
        </div>

        <div
          class="offcanvas offcanvas-start"
          data-bs-scroll="true"
          data-bs-backdrop="false"
          tabindex="-1"
          id="offcanvasScrolling"
          aria-labelledby="offcanvasScrollingLabel"
        >
          <div class="offcanvas-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
  <!-- Logo -->
  <a href="./index.html">
    <img src="./images/logo.png" alt="Logo" style="height: 40px;" />
  </a>

  <!-- Close Button -->
  <button
    type="button"
    class="btn btn-light rounded-circle shadow-sm"
    data-bs-dismiss="offcanvas"
    aria-label="Close"
    style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; background-color: white; color: black; border: 1px solid grey; :hover { background-color: var(--branding-success); :hover i { color: white; } }"
  >
    <i class="fa-solid fa-xmark"></i>
  </button>
</div>

          <div class="offcanvas-body">
            <div class="accordion" id="accordionExample1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button custom"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne1"
                      aria-expanded="true"
                      aria-controls="collapseOne1"
                    >
                      All Categories
                    </button>
                  </h2>
                  <div
                    id="collapseOne1"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample1"
                  >
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
                    <button
                      class="accordion-button custom"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne2"
                      aria-expanded="false"
                      aria-controls="collapseOne2"
                    >
                      Price
                    </button>
                  </h2>
                  <div
                    id="collapseOne2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample2"
                  >
                    <div class="accordion-body">
                      <input
                        type="range"
                        id="brightness"
                        name="brightness"
                        min="50"
                        max="1500"
                      />
                      <h3>Price: <span>50 — 1,500</span></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion" id="accordionExample3">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button custom"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne3"
                      aria-expanded="false"
                      aria-controls="collapseOne3"
                    >
                      Rating
                    </button>
                  </h2>
                  <div
                    id="collapseOne3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample3"
                  >
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
                    <button
                      class="accordion-button custom"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne4"
                      aria-expanded="false"
                      aria-controls="collapseOne4"
                    >
                      Popular Tag
                    </button>
                  </h2>
                  <div
                    id="collapseOne4"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample4"
                  >
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
              <img src="./images/shopBanner.png" class="img-fluid" alt="" />
            </div>
            <h6>Sale Products</h6>
            <div class="card mt-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-4 CardImg1">
                    <a href="#"
                      ><img
                        src="./images/shopRedCapsicum.png"
                        alt="Green Apple"
                    /></a>
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
                    <a href="#"
                      ><img src="./images/shopMango.png" alt="Green Apple"
                    /></a>
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
                    <a href="#"
                      ><img
                        src="./images/shopGreenCapsicum.png"
                        alt="Green Apple"
                    /></a>
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
   

    <!-- Sidemenu for mobile ends -->

    <main>
        <!-- Product Details -->
        <section id="productDetailsShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-2 order-2 order-lg-1">
                                <div class="productThumbSlider">
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image2.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image3.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image4.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image2.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image3.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 order-1 order-lg-2">
                                <div class="productGallerySlider">
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image2.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image3.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image4.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image2.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image3.png" alt="">
                                    </div>
                                    <div class="slider">
                                        <img class="img-fluid" src="./images/Product Image4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-8">
                                <h5>Chinese Cabbage</h5>
                            </div>
                            <div class="col-2">
                                <span class="instock">In Stock</span>
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
                                        <p>2,51,594</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row d-flex price">
                            <div class="col-6 d-flex">
                                <del>$48.00</del>
                                <h6>$17.28</h6>
                            </div>
                            <div class="col-6 d-flex">
                                <a href="#">64% Off</a>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-4 d-flex brand align-items-center justify-content-center">
                                <h3>Brand:</h3>
                                <img src="./images/brand.png" class="img-fluid" alt="">
                            </div>
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
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla varius
                                magna a consequat pulvinar. </p>
                            <div class="row d-flex">
                                <div class="col-2">
                                    <div class="counter">
                                        <button class="decrementBtn">-</button>
                                        <input class="quality" type="number" value="1" />
                                        <button class="incrementBtn">+</button>
                                    </div>
                                </div>
                                <div class="col-8 d-flex cartSection">
                                    <a href="./shopping_cart.html">
                                        Add to Cart <i class="fa-solid fa-bag-shopping"></i>
                                    </a>
                                </div>
                                <div class="col-2 d-flex cartSection2">
                                    <a href="./wishlist.html"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
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
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Additional Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                            aria-selected="false">Customer Feedback</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 descriptionCnt">
                                <p>Sed commodo aliquam dui ac porta. Fusce ipsum felis, imperdiet at posuere ac, viverra
                                    at mauris. Maecenas tincidunt ligula a sem vestibulum pharetra. Maecenas auctor
                                    tortor lacus, nec laoreet nisi porttitor vel. Etiam tincidunt metus vel dui interdum
                                    sollicitudin. Mauris sem ante, vestibulum nec orci vitae, aliquam mollis lacus. Sed
                                    et condimentum arcu, id molestie tellus. Nulla facilisi. Nam scelerisque vitae justo
                                    a convallis. Morbi urna ipsum, placerat quis commodo quis, egestas elementum leo.
                                    Donec convallis mollis enim. Aliquam id mi quam. Phasellus nec fringilla elit. <br> <br> <br>
                                    Nulla mauris tellus, feugiat quis pharetra sed, gravida ac dui. Sed iaculis, metus
                                    faucibus elementum tincidunt, turpis mi viverra velit, pellentesque tristique neque
                                    mi eget nulla. Proin luctus elementum neque et pharetra. <br> <br>  </p>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/tikmark.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11">
                                        <p>100 g of fresh leaves provides.</p>
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/tikmark.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11">
                                        <p>Aliquam ac est at augue volutpat elementum.</p>
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/tikmark.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11">
                                        <p>Quisque nec enim eget sapien molestie.</p>
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <div class="col-1">
                                        <img src="./images/tikmark.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-11">
                                        <p>Proin convallis odio volutpat finibus posuere.</p> 
                                    </div>
                                </div> <br>
                                <p>Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla blandit eros non turpis lobortis iaculis at ut massa. </p>
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
                                    <p>Vegetables,  Healthy,<span>Chinese,</span> Cabbage, Green Cabbage,</p>
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
                                    
                                    <p>Keep the soil evenly moist for the healthiest growth. If the sun gets too hot, Chinese cabbage tends to "bolt" or go to seed; in long periods of heat, some kind of shade may be helpful. Watch out for snails, as they will harm the plants.</p>
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
                                    
                                    <p>200+ Canton Pak Choi Bok Choy Chinese Cabbage Seeds Heirloom Non-GMO Productive Brassica rapa VAR. chinensis, a.k.a. Canton's Choice, Bok Choi, from USA
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
                                    <a href="./shop.html"><img class="img-fluid" src="./images/apple.png" alt=""></a>


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
                                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/shopCoauliflower.png" alt=""></a>


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
                                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/capsicum.png" alt=""></a>


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
                                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="productCard">
                                <div class="productThumb">
                                    <a href="./shop.html"><img class="img-fluid" src="./images/okra.png" alt=""></a>


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
                                    <a href="./shopping_cart.html" class="cardBtn"><i class="fa-solid fa-bag-shopping"></i></a>

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
                                    <input type="email" name="" id="" placeholder="Your email address" />
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


    <!-- Footer for dekstop -->
    <footer>
        <section id="DekstopFooterShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 logo">
                        <a href="./index.html"><img src="./images/FooterLogo.png" alt="" /></a>
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
                                <a href="#"><img src="./images/Method=ApplePay.png" alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="./images/Method=Visa.png" alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="./images/Method=Discover.png" alt="" /></a>
                            </div>
                            <div class="col-2 me-2">
                                <a href="#"><img src="./images/Method=Mastercard.png" alt="" /></a>
                            </div>
                            <div class="col-2">
                                <a href="#"><img src="./images/Cart.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer for dekstop ends -->

    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>