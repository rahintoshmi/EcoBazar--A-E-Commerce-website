@extends('layouts.frontendlayout')
@section('title', $category->title ?? 'Billing Information Page')
@section('main')


    <!-- Mobile header ends -->
    <!-- Background header -->
    <section id="backgroundHeader">
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
                                <input type="text" name="" id="" placeholder="Your first name" />
                            </div>
                            <div class="col-lg-4">
                                <label for="text"> Last name </label>
                                <input type="text" name="" id="" placeholder="Your last name" />
                            </div>
                            <div class="col-lg-4">
                                <label for="text">
                                    Company Name <span>(optional)</span>
                                </label>
                                <input type="text" name="" id="" placeholder="Company name" />
                            </div>
                        </div>
                        <label for="text">Street Address</label> <br />
                        <input class="address" type="text" name="" id="" placeholder="text" />
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
                                <input type="number" min="0" max="99999" placeholder="Zip Code" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="Email">Email</label><br />
                                <input type="email" name="" id="" placeholder="Email Address" />
                            </div>
                            <div class="col-lg-6">
                                <label for="number">Phone</label> <br />
                                <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    title="Format: 123-456-7890" placeholder="Phone number" />
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-1">
                                <input type="checkbox" name="Ship to a different address" id="" />
                            </div>
                            <div class="col-4">
                                <p>Ship to a different address</p>
                            </div>
                        </div>
                        <hr>
                        <h5>Additional Info</h5>
                        <label for="text">Order Notes <span>(Optional)</span></label>
                        <br />
                        <input class="notes" type="text" name="" id=""
                            placeholder="Notes about your order, e.g. special notes for delivery" />
                    </div>
                    <div class="col-lg-4 order">
                        <h3>Order Summery</h3>
                        @php
                            $totalPrice = 0;
                        @endphp

                        @foreach ($carts as $cart)
                            @php
                                $price = $cart->quantity * ($cart->product->selling_price ?? $cart->product->price);
                                $totalPrice += $price;
                            @endphp
                            <div class="row d-flex">
                                <div class="col-8 d-flex align-items-center">
                                    <img src="{{ getImage($cart->product->featured_img) }}" class="img-fluid"
                                        alt="" />
                                    <h4>{{ $cart->product->title }} <span class="quantity">* {{ $cart->quantity }}</span>
                                    </h4>
                                </div>

                                <div class="col-4 d-flex align-items-center justify-content-end">
                                    <h2 class="subtotal">{{ number_format($price, 2) }}৳</h2>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <h1 class="d-flex align-items-center justify-content-between">
                                Subtotal: <span class="subtotal">{{ number_format($totalPrice, 2) }}৳</span>
                            </h1>
                        </div>

                        <div class="row">
                            <h1 class="d-flex align-items-center justify-content-between">
                                Shipping: <span class="free">Free</span>
                            </h1>
                        </div>

                        <div class="row">
                            <h1 class="d-flex align-items-center justify-content-between">
                                Total: <span class="subtotal">{{ number_format($totalPrice, 2) }}৳</span>
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


    </main>


@endsection
