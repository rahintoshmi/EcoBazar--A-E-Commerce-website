@extends('layouts.frontendlayout')
@section('title', '-AboutUS')
@section('main')

    <!-- Background header -->
      <section id="backgroundHeader" >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <a href="./index.html">
                <i class="fa-solid fa-house"></i>
              </a>
              <a href="#"><span> > About Us</span> </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Background Header ends -->


  <!-- * ======== Main Content Starts ======== -->
<main id="About">
  <div class="container">
    <div class="row aboutFristRow justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="aboutLeft">
          <h1 class="heading text-start">100% Trusted Organic Food Store</h1>
          <p>Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis
          ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare.
          Vivamus ornare commodo ante, at commodo felis congue vitae.
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="aboutRight">
          <img class="img-fluid" src="{{asset('frontend/images/Image (1).png')}}" alt="About Image">
        </div>
      </div>
    </div>
  </div>
  <section class="organic-food-section py-5">
    <div class="overlay">
      <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="image-container">

          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="mb-4">100% Trusted Organic Food Store</h1>
          <p class="lead mb-5">Pellentesque a ante vulputate les porttitor luctus sed eget eros. Nulla et rhoncus neque.
            Duis non diam eget est lectus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat.</p>

          <div class=" row g-4 align-items-center">
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-leaf'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Organic food</h5>
                  <p class="text-muted mb-0">100% healthy & Fresh food</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 justify-content-center">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-headphone-mic'></i>
                </div>
                <div>
                  <h5 class="mb-1">Great Support 24/7</h5>
                  <p class="text-muted mb-0">Instant access to contact</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-star'></i>
                </div>
                <div>
                  <h5 class="mb-1">Customer Feedback</h5>
                  <p class="text-muted mb-0">Our happy customer</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-shopping-bag'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Secure Payment</h5>
                  <p class="text-muted mb-0">We ensure your money is safe</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-truck'></i>
                </div>
                <div>
                  <h5 class="mb-1">Free Shipping</h5>
                  <p class="text-muted mb-0">Free shipping with discount</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-card d-flex align-items-start p-3 rounded-3">
                <div class="icon-circle me-3 flex-shrink-0">
                  <i class='bx  bx-box-alt'></i>
                </div>
                <div>
                  <h5 class="mb-1">100% Organic Food</h5>
                  <p class="text-muted mb-0">100% healthy & Fresh food</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    
  </section>


@endsection
 