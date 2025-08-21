@extends('layouts.frontendlayout')
@section('title', $category->title ?? 'Shop Page')
@section('main')
<!-- Background header -->
      <section id="backgroundHeader" >
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <a href="./index.html">
                <i class="fa-solid fa-house"></i>
              </a>
              <a href="#"><span>>{{ $category->title ?? 'Shop' }}</span> </a>
            </div>
            <div class="col-lg-6 d-lg-none d-flex justify-content-end align-items-center">
              <button
              class="btn btn-primary"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling"
              aria-controls="offcanvasScrolling"
            >
             <i class="fa-solid fa-sliders"></i>
            </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Background Header ends -->

    <main>
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 cartdetails d-md-block d-none">
              <button class="filter">
                Filter <i class="fa-solid fa-sliders"></i>
              </button>
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
            <div class="col-lg-8 cartImage">
              <div class="row d-flex">
                <div class="col-lg-8">
                  <label for="price">Sort by:</label>
                  <select name="Latest" id="latest">
                    <option value="Latest">Latest</option>
                    <option value="Oldtest">Oldtest</option>
                    <option value="A to Z">A to Z</option>
                    <option value="Z to A ">Z to A</option>
                    <option value="Top Rated">Top Rated</option>
                    <option value="Lowest Price ">Lowest Price</option>
                    <option value="Highest Price">Highest Price</option>
                    <option value="Recently Added ">Recently Added</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <p><span>52</span> Results Found</p>
                </div>
              </div>
              <div class="row part1">
                @forelse ($products as $product )
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="{{ route('frontend.product.view',$product->slug) }}"
                        ><img
                          class="img-fluid"
                          src="{{ getImage($product->featured_img) }}"
                          alt="{{ $product->title }}"
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="{{ route('frontend.product.view',$product->slug) }}" class="productTitle">{{ $product->title }}</a>
                      @if($product->selling_price)
                      <p>{{ number_format($product->selling_price,2) }} <del>{{ number_format($product->price,2) }}</del></p>
                        @else
                        <p>{{ number_format($product->price,2) }}</p>
                      @endif
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                  @empty
                  <p class="text-center">No Products Found!!</p>
                @endforelse
              
                {{-- <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="./product_details.html"
                        ><img
                          class="img-fluid"
                          src="./images/shopLettuce.png"
                          alt=""
                          
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="./product_details.html" class="productTitle"
                        >Chanise Cabbage</a
                      >
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <div class="label">Out of Stock</div>
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopCorn.png"
                          alt=""
                          
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Ladies Finger</a>
                      <p>$14.99 <del>$20.99</del></p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row part2">
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopEggplant.png"
                          alt="" 
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Eggplant</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopCoauliflower.png"
                          alt=""
                         
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Fresh Cauliflower</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopApple.png"
                          alt=""
                          
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Green Apple</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row part3">
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopCapsicum.png"
                          alt=""
                          
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
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
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopChili.png"
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Green Chili</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <div class="label1">Sale 50%</div>
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopCucumber.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Green Cucumber</a>
                      <p>$14.99 <del>$20.99</del></p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row part4">
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopGreenLettuce.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Green Littuce</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopOkra.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Ladies Finger</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/ShopRedBigCapsicum.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
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
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row part5">
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid" 
                          src="./images/shopRedChili.png"
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Red Chili</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/shopRed.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Red Tomato</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="productCard">
                    <div class="productThumb">
                      <a href="#"
                        ><img
                          class="img-fluid"
                          src="./images/ShopBigMango.png" 
                          alt=""
                      /></a>

                      <div class="quickLinks">
                        <ul>
                          <li>
                            <a href="./wishlist.html"
                              ><i class="fa-regular fa-heart"></i
                            ></a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-regular fa-eye"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="productCnt">
                      <a href="#" class="productTitle">Fresh Mango</a>
                      <p>$14.99</p>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star empty"></i>
                      </div>
                      <a href="./shopping_cart.html" class="cardBtn"
                        ><i class="fa-solid fa-bag-shopping"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{ $products->links() }}
            </div>
          </div>
        </div>
      </section>




@endsection
    