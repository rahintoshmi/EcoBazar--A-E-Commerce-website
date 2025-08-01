<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoBazar</title>
    <link
      rel="shortcut icon"
      href="./images/faviIcon.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/slick.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />
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
          <li><a href="#"><i class="fas fa-user"></i> My Account</a></li>
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
              <a href="#"><span> > Shopping cart > Checkout</span> </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Background Header ends -->
   
    </header>
    

    <main>
      <section id="billingInformation">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h6>Billing Information</h6>
              <div class="row d-flex">
                <div class="col-lg-4">
                  <label for="text"> First name </label>
                  <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Your first name"
                  />
                </div>
                <div class="col-lg-4">
                  <label for="text"> Last name </label>
                  <input
                    type="text"
                    name=""
                    id=""
                    placeholder="Your last name"
                  />
                </div>
                <div class="col-lg-4">
                  <label for="text">
                    Company Name <span>(optional)</span>
                  </label>
                  <input type="text" name="" id="" placeholder="Company name" />
                </div>
              </div>
              <label for="text">Street Address</label> <br />
              <input
                class="address"
                type="text"
                name=""
                id=""
                placeholder="text"
              />
              <div class="row">
                <div class="col-lg-4">
                  <label for="">Country / Region</label> <br />
                  <select name="" id="" placeholder="Select">
                    <option value="">Bangladesh</option>
                    <option value="">India</option>
                    <option value="">Pakistan</option>
                    <option value="">Nepal</option>
                    <option value="">Sri-Lanka</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <label for="">States</label> <br />
                  <select name="" id="" placeholder="Selects">
                    <option value="">Dhaka</option>
                    <option value="">Maharashtra</option>
                    <option value="">Punjab</option>
                    <option value="">Bagmati</option>
                    <option value="">Central</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <label for="">Zip Code</label> <br />
                  <input
                    type="number"
                    min="0"
                    max="99999"
                    placeholder="Zip Code"
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="Email">Email</label><br />
                  <input
                    type="email"
                    name=""
                    id=""
                    placeholder="Email Address"
                  />
                </div>
                <div class="col-lg-6">
                  <label for="number">Phone</label> <br />
                  <input
                    type="tel"
                    name="phone"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    title="Format: 123-456-7890"
                    placeholder="Phone number"
                  />
                </div>
              </div>
              <div class="row d-flex">
                <div class="col-1">
                  <input
                    type="checkbox"
                    name="Ship to a different address"
                    id=""
                  />
                </div>
                <div class="col-4"><p>Ship to a different address</p></div>
              </div>
              <hr>
              <h5>Additional Info</h5>
              <label for="text">Order Notes <span>(Optional)</span></label>
              <br />
              <input
                class="notes"
                type="text"
                name=""
                id=""
                placeholder="Notes about your order, e.g. special notes for delivery"
              />
            </div>
            <div class="col-lg-4 order">
              <h3>Order Summery</h3>
              <div class="row d-flex">
                <div class="col-8 d-flex align-items-center">
                  <img
                    src="./images/shoppingcartSmallgreenCapsicum.png"
                    class="img-fluid"
                    alt=""
                  />
                  <h4>Green Capsicum <span class="quantity">* 5</span></h4>
                </div>
                <div
                  class="col-4 d-flex align-items-center justify-content-end"
                >
                  <h2 class="subtotal">$70.00</h2>
                </div>
              </div>
              <div class="row d-flex">
                <div class="col-8 d-flex align-items-center">
                  <img
                    src="./images/shoppingcartSmallredCapsicum.png"
                    class="img-fluid"
                    alt=""
                  />
                  <h4>Red Capsicum <span class="quantity">* 5</span></h4>
                </div>
                <div
                  class="col-4 d-flex align-items-center justify-content-end"
                >
                  <h2 class="subtotal">$70.00</h2>
                </div>
              </div>
              <div class="row">
                <h1 class="d-flex align-items-center justify-content-between">
                  Subtotal: <span class="subtotal">$84.00</span>
                </h1>
              </div>
              <div class="row">
                <h1 class="d-flex align-items-center justify-content-between">
                  Shipping: <span class="free">Free</span>
                </h1>
              </div>
              <div class="row">
                <h1 class="d-flex align-items-center justify-content-between">
                  Total: <span class="subtotal">$100.00</span>
                </h1>
              </div>
              <h5>Payment Method</h5>
             <div class="payment">
                <input type="radio" name="Payment" id="Cash" checked>
                <label for="Cash">Cash on Delivery</label>
              </div>
              <div class="payment">
                <input type="radio" name="Payment" id="Paypal">
                <label for="Paypal">Paypal</label>
              </div>
              <div class="payment">
                <input type="radio" name="Payment" id="amazonPay">
                <label for="amazonPay">Amazon Pay</label>
              </div>
              
                <a href="#">Place Order</a>
            </div>
          </div>
        </div>
      </section>

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
                    <input
                      type="email"
                      name=""
                      id=""
                      placeholder="Your email address"
                    />
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
                <a href="tel:2195550114"
                  >(219) 555-0114 <span>or</span> Proxy@gmail.com</a
                >
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
              <a href="#"
                ><h2>Ecobazar eCommerce © 2021. All Rights Reserved</h2></a
              >
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-2 me-2">
                  <a href="#"
                    ><img src="./images/Method=ApplePay.png" alt=""
                  /></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"><img src="./images/Method=Visa.png" alt="" /></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"
                    ><img src="./images/Method=Discover.png" alt=""
                  /></a>
                </div>
                <div class="col-2 me-2">
                  <a href="#"
                    ><img src="./images/Method=Mastercard.png" alt=""
                  /></a>
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
