<!-- header start -->

<?php include 'header.php';?>


<!-- header start -->



<!--start main content-->
<main class="main-content">

    <!--start breadcrumb-->
    <section class="py-4 section-breadcrumb">
        <div class="container px-3">
            <nav>
                <ol class="breadcrumb mb-0 gap-2">
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Checkout</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item breadcrumb-active">Checkout</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--end breadcrumb-->

    <section class="checkout-section py-5">
        <div class="container px-3">
            <div class="row g-4 g-lg-5">
                <div class="col-12 col-lg-6 mt-0">
                    <div class="checkout-card">
                        <div class="mt-4 checkout-form p-4 border rounded-3">
                            <h5 class="mb-4">Fill Your Informaition</h5>
                            <div class="row g-4">
                                <div class="col-12 col-lg-6">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="FirstName"
                                        placeholder="First Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="LastName"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="EmailId" class="form-label">Email Id</label>
                                    <input type="email" class="form-control form-control-lg border-2" id="EmailId"
                                        placeholder="Email Id">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="PhoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="PhoneNumber"
                                        placeholder="Phone Number">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label for="SelectCountry" class="form-label">Select Country</label>
                                    <select class="form-select form-select-lg border-2" id="SelectCountry">
                                        <option selected>Austria</option>
                                        <option value="1">Belgium</option>
                                        <option value="2">Denmark</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="TownCity" class="form-label">Town/City</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="TownCity"
                                        placeholder="Town City">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="Street" class="form-label">Street</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="TownCity"
                                        placeholder="Street">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="ChooseState" class="form-label">Choose State</label>
                                    <select class="form-select form-select-lg border-2" id="ChooseState">
                                        <option selected>Alabam</option>
                                        <option value="1">Georgia</option>
                                        <option value="2">Iowa</option>
                                        <option value="3">Nevada</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="PostalCode" class="form-label">Postal Code</label>
                                    <input type="text" class="form-control form-control-lg border-2" id="PostalCode"
                                        placeholder="Postal Code">
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label for="WriteNote" class="form-label">Write Note</label>
                                    <textarea class="form-control border-2" rows="4" cols="4"
                                        placeholder="Write Something..."></textarea>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <div class="mt-4 card-payment-method rounded-3 px-4 py-3 border">
                            <div class="">
                                <div class="form-check" data-bs-toggle="collapse" data-bs-target="#collapseCardDetails">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Credit Card
                                    </label>
                                </div>
                                <div class="collapse" id="collapseCardDetails">
                                    <div class="mt-3">
                                        <p>Please make your payment directly to our bank account.
                                            Your order will be shipped once the funds have been successfully cleared.
                                        </p>
                                        <div class="card-details">
                                            <div class="row g-4">
                                                <div class="col-12 col-lg-12">
                                                    <label for="Nameoncard" class="form-label">Name on card</label>
                                                    <input type="text" class="form-control form-control-lg border-2"
                                                        id="Nameoncard" placeholder="Name on card">
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <label for="CardNumbers" class="form-label">Card Numbers</label>
                                                    <div class="input-group input-group-lg">
                                                        <input type="text" class="form-control border-2"
                                                            placeholder="Card Numbers">
                                                        <span
                                                            class="input-group-text border-2 d-flex align-items-center  gap-3 bg-transparent">
                                                            <img src="assets/images/gallery/payment/visa.png" width="40"
                                                                alt="">
                                                            <img src="assets/images/gallery/payment/stripe.png"
                                                                width="40" alt="">
                                                            <img src="assets/images/gallery/payment/money.png"
                                                                width="40" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="Date" class="form-label">Date</label>
                                                    <input type="date" class="form-control form-control-lg border-2"
                                                        id="Date">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="CVV" class="form-label">CVV</label>
                                                    <input type="text" class="form-control form-control-lg border-2"
                                                        id="CVV" placeholder="CVV">
                                                </div>
                                                <div class="col-12 col-lg-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="SaveCardDetails" checked>
                                                        <label class="form-check-label" for="SaveCardDetails">
                                                            Save Card Details
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 paypal-payment-method border rounded-3 px-4 py-3">
                            <div class="form-check" data-bs-toggle="collapse" data-bs-target="#collapsePaypal">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="cash-on-delivery">
                                <label class="form-check-label" for="cash-on-delivery">
                                    <span><img src="assets/images/gallery/payment/paypal.png" width="80"></span>
                                </label>
                            </div>
                            <div class="collapse" id="collapsePaypal">
                                <div class="row mt-3">
                                    <div class="col-12 col-lg-12">
                                        <label for="EnterYourPaypalId" class="form-label">Enter Your Paypal Id</label>
                                        <input type="text" class="form-control form-control-lg border-2"
                                            id="EnterYourPaypalId" placeholder="Enter Your Paypal Id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <a href="checkout-thankyou.html" class="btn btn-dark py-2 rounded-3">Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="order-summary">
                        <div class="cart-list d-flex flex-column gap-4">
                            <div
                                class="cart-list-item d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="cart-img">
                                        <img src="assets/images/gallery/tabular-product/07.png" class="rounded-3"
                                            width="80" alt="">
                                    </div>
                                    <div class="cart-product-info">
                                        <h5 class="product-name fs-6 mb-1">Venic black pant</h5>
                                        <p>Large / Blue</p>
                                    </div>
                                </div>
                                <div class="cart-product-price">
                                    <h6 class="mb-0">1 X $78</h6>
                                </div>
                            </div>
                            <div class="my-0 border-1 border-top"></div>
                            <div
                                class="cart-list-item d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="cart-img">
                                        <img src="assets/images/gallery/tabular-product/03.png" class="rounded-3"
                                            width="80" alt="">
                                    </div>
                                    <div class="cart-product-info">
                                        <h5 class="product-name fs-6 mb-1">Venic black pant</h5>
                                        <p>Large / Blue</p>
                                    </div>
                                </div>
                                <div class="cart-product-price">
                                    <h6 class="mb-0">1 X $78</h6>
                                </div>
                            </div>
                            <div class="my-0 border-1 border-top"></div>
                            <div
                                class="cart-list-item d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="cart-img">
                                        <img src="assets/images/gallery/tabular-product/06.png" class="rounded-3"
                                            width="80" alt="">
                                    </div>
                                    <div class="cart-product-info">
                                        <h5 class="product-name fs-6 mb-1">Venic black pant</h5>
                                        <p>Large / Blue</p>
                                    </div>
                                </div>
                                <div class="cart-product-price">
                                    <h6 class="mb-0">1 X $78</h6>
                                </div>
                            </div>
                            <div class="my-0 border-1 border-top"></div>
                            <div
                                class="cart-list-item d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="cart-img">
                                        <img src="assets/images/gallery/tabular-product/04.png" class="rounded-3"
                                            width="80" alt="">
                                    </div>
                                    <div class="cart-product-info">
                                        <h5 class="product-name fs-6 mb-1">Venic black pant</h5>
                                        <p>Large / Blue</p>
                                    </div>
                                </div>
                                <div class="cart-product-price">
                                    <h6 class="mb-0">1 X $78</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-4 bg-light mt-4">
                            <div class="card-body">
                                <div class="checkout-promocode p-2">
                                    <p class="mb-2 fw-semibold">% Apply promo code</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="text" class="form-control border-2" placeholder="Enter promo code"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-dark px-3" type="button">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-4 bg-light mt-4">
                            <div class="card-body">
                                <div class="checkout-card p-2">
                                    <h4 class="mb-0">Order Summary</h4>
                                    <div class="my-4 border-1 border-top"></div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <p class="mb-0">Subtotal</p>
                                        <p class="mb-0">$179.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <p class="mb-0">Discounts</p>
                                        <p class="mb-0 text-danger">-$24.00</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <p class="mb-0">Shipping</p>
                                        <p class="mb-0">+$16.00</p>
                                    </div>
                                    <div class="my-3 border-1 border-top"></div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <p class="mb-0 fs-5 fw-semibold">Total</p>
                                        <p class="mb-0 fs-5 fw-semibold">$196.56</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>

</main>
<!--end main content-->



<!-- footer start -->

<?php include 'footer.php';?>

<!-- footer start -->