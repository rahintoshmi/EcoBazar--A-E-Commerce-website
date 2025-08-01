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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
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
              <a href="#"><span> > Contact</span> </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Background Header ends -->
   
    </header>

    
    
    <!-- * ======== Main Content Starts ======== -->
    <div id="contact">
      <section class="contact-section">
        <div class="container">
          <div class="row">
            <!-- Left Information Card -->
            <div class="col-md-4 mb-4 mb-md-0">
              <div class="info-card">
                <!-- Location -->
                <div class="info-item">
                  <div class="icon-circle">
                    <i class='bxr  bx-location-alt-2'></i>
                  </div>
                  <div class="info-title">278 Ash Dr. San Jose, South</div>
                  <div class="info-subtitle">Dakota 83475</div>
                </div>
      
                <!-- Email -->
                <div class="info-item">
                  <div class="icon-circle">
                    <i class='bx  bx-envelope-alt'></i>
                  </div>
                  <div class="info-title">Proyy@gmail.com</div>
                  <div class="info-subtitle">Help.proyy@gmail.com</div>
                </div>
      
                <!-- Phone -->
                <div class="info-item">
                   <div class="icon-circle">
                    <i class='bx  bx-phone'></i>
                   </div>
                  <div class="info-title">(319) 555-0114</div>
                  <div class="info-subtitle">(164) 333-0487</div>
                </div>
              </div>
            </div>
      
            <!-- Right Contact Form -->
            <div class="col-md-8">
              <div class="contact-form">
                <h2 class="form-title">Just Say Hello!</h2>
                <p class="form-description">
                  Do you fancy saying hi to me or you want to get started with your
                  project and you need my help? Feel free to contact me.
                </p>
      
                <form id="contactForm">
                  <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input type="text" class="form-control" id="name" name="name" required placeholder="Template Cookie">
                    </div>
                    <div class="col-md-6">
                      <input type="email" class="form-control" id="email" name="email" placeholder="zakirsoft@gmail.com" required>
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello!">
                  </div>
      
                  <div class="mb-4">
                    <textarea class="form-control" id="message" name="message" placeholder="Subjects" rows="6" required></textarea>
                  </div>
      
                  <button type="submit" class="btn">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Optional Google Map -->
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.4673344882631!2d91.83920703875978!3d22.358561979332038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad277ab0cff8a7%3A0x13eb8ccef8a22dde!2sCreative%20IT%20Institute%2C%20Chattogram%20Branch!5e0!3m2!1sen!2sbd!4v1751113061190!5m2!1sen!2sbd"
        width="100%" height="100%" style="border:0;" allowfullscreen="yes" loading="lazy">
      </iframe>
    </div>
   

  </div>

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