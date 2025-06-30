<!-- header start -->

<?php include 'header.php';?>

<!-- header close -->


<!--start main content-->
<main class="main-content">

    <!--start breadcrumb-->
    <section class="py-4 section-breadcrumb">
        <div class="container px-3">
            <h2 class="d-none">Product Details</h2>
            <nav>
                <ol class="breadcrumb mb-0 gap-2">
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">shop</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item breadcrumb-active">Product Detail</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--end breadcrumb-->

    <!--start product details-->
    <section class="py-5 product-details">
        <div class="container px-3">
            <div class="row g-4 g-lg-5">
                <div class="col-12 col-lg-6">
                    <div class="product-images">
                        <div class="swiper product-images-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-1.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-2.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-3.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="aassets/images/common/pro-4.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-5.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-6.jpeg" class="rounded-3" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper product-images-swiper-thumbnail mt-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-1.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-2.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-3.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-4.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-5.jpeg" class="rounded-3" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/common/pro-6.jpeg" class="rounded-3" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="product-details">
                        <p class="mb-1">Women Topwar</p>
                        <h2 class="mb-0">Solid Round Neck T-shirt</h2>
                        <div class="d-flex align-items-center gap-2 my-3">
                            <span class="ratings text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>
                            <span class="font-14">(568 reviews)</span>
                        </div>
                        <div class="product-price d-flex align-items-center gap-2">
                            <span class="fs-3 fw-semibold">$357.89</span>
                            <span
                                class="fs-6 text-decoration-line-through text-body-tertiary text-opacity-50">$864.99</span>
                            <span class="badge badge-pill bg-danger rounded-5">-25%</span>
                        </div>
                        <p class="product-short-desc mt-3 mb-0">A solid round neck T-shirt offers a timeless, versatile
                            style perfect for casual or layered looks.
                            Made from soft, breathable fabric, it provides all-day comfort and effortless fashion.</p>

                        <div class="product-colors mt-4">
                            <p class="mb-2">Select Color</p>
                            <div class="product-color-list d-flex align-items-center gap-3">
                                <div class="product-color-list-item">
                                    <input type="radio" class="btn-check" name="options-color" id="color-option1">
                                    <label class="btn btn-product-color bg-primary" for="color-option1"></label>
                                </div>
                                <div class="product-color-list-item">
                                    <input type="radio" class="btn-check" name="options-color" id="color-option2"
                                        checked>
                                    <label class="btn btn-product-color bg-pink" for="color-option2"></label>
                                </div>
                                <div class="product-color-list-item">
                                    <input type="radio" class="btn-check" name="options-color" id="color-option3">
                                    <label class="btn btn-product-color bg-orange" for="color-option3"></label>
                                </div>
                                <div class="product-color-list-item">
                                    <input type="radio" class="btn-check" name="options-color" id="color-option4">
                                    <label class="btn btn-product-color bg-indigo" for="color-option4"></label>
                                </div>
                                <div class="product-color-list-item">
                                    <input type="radio" class="btn-check" name="options-color" id="color-option5">
                                    <label class="btn btn-product-color bg-black" for="color-option5"></label>
                                </div>
                            </div>
                        </div>

                        <div class="product-size mt-4">
                            <p class="mb-2 d-flex align-items-center justify-content-between">Select Size <a
                                    href="javascript:;" class="btn btn-sm text-decoration-underline"
                                    data-bs-toggle="modal" data-bs-target="#sizeGuidehModal">Size Guide</a></p>
                            <div class="product-size-list d-flex align-items-center gap-3">
                                <div class="product-size-list-item">
                                    <input type="radio" class="btn-check" name="options-size" id="size-option1">
                                    <label class="btn btn-outline-dark btn-product-size" for="size-option1">S</label>
                                </div>
                                <div class="product-size-list-item">
                                    <input type="radio" class="btn-check" name="options-size" id="size-option2" checked>
                                    <label class="btn btn-outline-dark btn-product-size" for="size-option2">M</label>
                                </div>
                                <div class="product-size-list-item">
                                    <input type="radio" class="btn-check" name="options-size" id="size-option3">
                                    <label class="btn btn-outline-dark btn-product-size" for="size-option3">L</label>
                                </div>
                                <div class="product-size-list-item">
                                    <input type="radio" class="btn-check" name="options-size" id="size-option4">
                                    <label class="btn btn-outline-dark btn-product-size" for="size-option4">XL</label>
                                </div>
                                <div class="product-size-list-item">
                                    <input type="radio" class="btn-check" name="options-size" id="size-option5">
                                    <label class="btn btn-outline-dark btn-product-size" for="size-option5">XXL</label>
                                </div>
                            </div>
                        </div>

                        <div class="product-quantity mt-4">
                            <p class="mb-2">Quantity</p>
                            <div class="input-group input-group-lg">
                                <button class="btn border border-2 border-end-0" data-decrement type="button"><i
                                        class="bi bi-dash"></i></button>
                                <input type="number" class="form-control border-2 text-center" min="0" value="1"
                                    readonly>
                                <button class="btn border border-2 border-start-0" data-increment type="button"><i
                                        class="bi bi-plus"></i></button>
                            </div>
                        </div>

                        <div class="product-cart-buttons d-grid d-md-flex align-items-center gap-3 mt-4">
                            <button type="button"
                                class="btn btn-dark border border-2 rounded-5 border-dark py-2 px-5 d-flex align-items-center justify-content-center gap-2 w-100"><i
                                    class="bi bi-cart-plus"></i>Add to cart</button>
                            <button type="button"
                                class="btn border border-2 py-2 px-5 rounded-5 d-flex align-items-center justify-content-center gap-2"><i
                                    class="bi bi-heart"></i>wishlist</button>
                        </div>

                        <div class="mt-4">
                            <p class="mb-2 d-flex align-items-center gap-2 font-14"><i class="bi bi-truck"></i>
                                <span><span class="fw-semibold">Free shipping & returns:</span> Enjoy free shipping and
                                    returns on all orders over $200!</span>
                            </p>
                            <p class="mb-2 d-flex align-items-center gap-2 font-14"><i
                                    class="bi bi-alarm"></i><span><span class="fw-semibold">Estimated Delivery:</span>
                                    International: 10-15 days | United States: 8-10 days</span></p>
                            <p class="mb-0 mt-3 d-flex align-items-center gap-2 font-14"><i
                                    class="bi bi-share"></i><span>Share this product</span></p>
                            <div class="mt-2 d-flex align-items-center gap-2 product-share-link">
                                <a href="javascript:;" class="btn btn-sm btn-outline-dark border"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-outline-dark border"><i
                                        class="bi bi-twitter-x"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-outline-dark border"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-outline-dark border"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-outline-dark border"><i
                                        class="bi bi-snapchat"></i></a>
                            </div>
                        </div>
                        <hr class="my-4 border-dark border-opacity-50">
                        <div class="">
                            <p class="mb-2 font-14"><span class="fw-semibold">SKU:</span> BA584726</p>
                            <p class="mb-2 font-14"><span class="fw-semibold">Vendor:</span> Michle Deo</p>
                            <p class="mb-2 font-14"><span class="fw-semibold">Available:</span> Instock</p>
                            <p class="mb-2 font-14"><span class="fw-semibold">Categories:</span>
                                <a href="javascript:;" class="link-secondary">Fashion</a>,
                                <a href="javascript:;" class="link-secondary">Jeans</a>,
                                <a href="javascript:;" class="link-secondary">Clothes</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="tabular-product-details mt-5">
                <div class="table-responsive">
                    <ul class="nav nav-pills mb-4 overflow-x-auto justify-content-center gap-3">
                        <li class="nav-item">
                            <button class="nav-link rounded-5 px-5 fw-semibold" data-bs-toggle="pill"
                                data-bs-target="#description" type="button">Description</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active rounded-5 px-5 fw-semibold" data-bs-toggle="pill"
                                data-bs-target="#customer-reviews" type="button">Customer Reviews</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-5 px-5 fw-semibold" data-bs-toggle="pill"
                                data-bs-target="#shipping-returns" type="button">Shipping Returns</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-5 px-5 fw-semibold" data-bs-toggle="pill"
                                data-bs-target="#return-policy" type="button">Return Policy</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content border p-4 rounded-3">
                    <div class="tab-pane fade show" id="description">
                        <h5>Solid Round Neck T-shirt – Classic Comfort & Style</h5>
                        <p class="text-para">Upgrade your wardrobe with our Solid Round Neck T-shirt, a must-have staple
                            for everyday wear.
                            Designed for both comfort and versatility, this t-shirt is crafted from premium-quality
                            fabric, ensuring a soft and breathable feel against your skin. Whether you're dressing up
                            for a casual outing or layering
                            it under a jacket for a stylish look, this t-shirt is the perfect choice.</p>
                        <p class="text-para">With its minimalist design and classic round neckline, this t-shirt offers
                            a timeless appeal that suits all occasions.
                            The high-quality stitching provides durability, making it ideal for daily use. It pairs
                            effortlessly with jeans, joggers, or shorts, giving you a relaxed yet trendy look.
                            The fabric is moisture-wicking, keeping you cool and comfortable throughout the day.</p>
                        <p class="text-para">Available in multiple colors and sizes, the Solid Round Neck T-shirt is a
                            wardrobe essential
                            for men and women alike. Whether you're hitting the gym, going for a casual hangout, or just
                            lounging at home,
                            this t-shirt delivers both style and functionality.</p>
                        <h6>Features:</h6>
                        <ul>
                            <li class="text-para">Premium cotton/polyester blend for comfort</li>
                            <li class="text-para">Breathable and lightweight fabric</li>
                            <li class="text-para">Classic round neck design for a timeless look</li>
                            <li class="text-para">Durable stitching for long-lasting wear</li>
                            <li class="text-para">Available in multiple colors and sizes</li>
                            <li class="text-para">Easy to wash and maintain</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade show active" id="customer-reviews">
                        <div>
                            <h5 class="mb-4">Customer Reviews</h5>
                            <div class="hstack gap-md-5 gap-4 flex-column flex-lg-row">
                                <div class="text-center flex-shrink-0">
                                    <div id="rating-number">
                                        <h2 class="mb-2">4.8</h2>
                                        <div class="rating-star">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                        <p class="mb-0">(759 Ratings)</p>
                                    </div>
                                </div>
                                <div class="vr d-none d-lg-flex"></div>
                                <div class="w-100">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span>5</span>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                            <div class="progress-bar bg-dark" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span>4</span>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                            <div class="progress-bar bg-dark" style="width: 55%;"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span>3</span>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                            <div class="progress-bar bg-dark" style="width: 35%;"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span>2</span>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                            <div class="progress-bar bg-dark" style="width: 15%;"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span>1</span>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100" style="height: 7px;">
                                            <div class="progress-bar bg-dark" style="width: 10%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vr d-none d-lg-flex"></div>
                                <div class="leave-a-rating flex-shrink-0">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#reviewModal"
                                        class="btn btn-outline-dark px-4 py-2">Write a Review</a>
                                </div>
                            </div>

                            <div class="customer-reviews-list mt-5">
                                <div class="customer-reviews-list-item border-top py-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="customer-pic">
                                            <span>M</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="rating-star font-14 mb-1">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            </div>
                                            <h6 class="mb-0 customer-name">Michle Jhon</h6>
                                        </div>
                                        <div class="review-date">
                                            <span>15 january 2025</span>
                                        </div>
                                    </div>
                                    <div class="review-description mt-2">
                                        <p class="mb-0">I recently purchased the Solid Round Neck T-shirt, and I must
                                            say, I’m absolutely impressed!
                                            The fabric is incredibly soft, breathable, and feels amazing on the skin.
                                            It’s lightweight yet durable,
                                            making it perfect for everyday wear. The stitching is top-notch, and even
                                            after multiple washes, the t-shirt retains
                                            its shape and color without any fading or shrinking.</p>
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <span>Helpful?</span>
                                            <button type="button"
                                                class="btn btn-sm btn-light rounded-3 border d-flex align-items-center gap-1"><i
                                                    class="bi bi-hand-thumbs-up"></i><span>6</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-reviews-list-item border-top py-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="customer-pic">
                                            <span>J</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="rating-star font-14 mb-1">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            </div>
                                            <h6 class="mb-0 customer-name">James</h6>
                                        </div>
                                        <div class="review-date">
                                            <span>18 january 2025</span>
                                        </div>
                                    </div>
                                    <div class="review-description mt-2">
                                        <p class="mb-0">The fit is just right—not too tight, not too loose—giving a
                                            comfortable and stylish look.
                                            The classic round neck design makes it easy to pair with jeans, joggers, or
                                            even layer under a jacket.
                                            Whether for casual outings, gym sessions, or lounging at home, this t-shirt
                                            never disappoints.</p>
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <span>Helpful?</span>
                                            <button type="button"
                                                class="btn btn-sm btn-light rounded-3 border d-flex align-items-center gap-1"><i
                                                    class="bi bi-hand-thumbs-up"></i><span>8</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-reviews-list-item border-top py-4 border-bottom">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="customer-pic">
                                            <span>T</span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="rating-star font-14 mb-1">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                            </div>
                                            <h6 class="mb-0 customer-name">Thomas</h6>
                                        </div>
                                        <div class="review-date">
                                            <span>20 january 2025</span>
                                        </div>
                                    </div>
                                    <div class="review-description mt-2">
                                        <p class="mb-0">Overall, this is a high-quality, stylish, and versatile t-shirt
                                            that
                                            I’d highly recommend to anyone looking for a perfect blend of comfort and
                                            durability.
                                            Definitely a must-have in every wardrobe! Will be buying more colors soon!
                                            🎉🔥</p>
                                        <div class="d-flex align-items-center justify-content-end gap-3">
                                            <span>Helpful?</span>
                                            <button type="button"
                                                class="btn btn-sm btn-light rounded-3 border d-flex align-items-center gap-1"><i
                                                    class="bi bi-hand-thumbs-up"></i><span>9</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="javascript:;" class="btn btn-outline-dark px-4 py-2">See All Reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="shipping-returns">
                        <h5 class="mb-3">Shipping Information:</h5>
                        <ul>
                            <li><b>Processing Time:</b>Orders are processed within 1-2 business days.</li>
                            <li><b>Delivery Time:</b>Standard shipping takes 5-7 business days, while express shipping
                                takes 2-3 business days.</li>
                            <li><b>Shipping Charges:</b>Shipping costs are calculated at checkout based on your location
                                and selected shipping method.</li>
                            <li><b>Tracking:</b>Once your order is shipped, you will receive a tracking number via
                                email.</li>
                        </ul>
                        <h5 class="mb-3">Return & Exchange Policy:</h5>
                        <ul class="mb-0">
                            <li><b>Eligibility:</b>Returns and exchanges are accepted within 7 days of delivery. The
                                item must be unworn, unwashed, and in its original packaging with tags intact..</li>
                            <li><b>Refund Process:</b>Once we receive and inspect the returned item, refunds will be
                                processed within 5-7 business days. Refunds will be issued to the original payment
                                method.</li>
                            <li><b>Exchange:</b>If you received a defective or incorrect product, we will replace it at
                                no extra cost.</li>
                            <li><b>Return Shipping:</b>Customers are responsible for return shipping costs unless the
                                item is defective or incorrect.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade show" id="return-policy">
                        <h5>Return Policy</h5>
                        <p>We want you to be completely satisfied with your purchase! If you're not happy with your
                            order, we offer
                            a hassle-free return policy.</p>

                        <h5 class="mb-3">Eligibility for Returns:</h5>
                        <ul>
                            <li>Returns are accepted within 7 days of delivery.</li>
                            <li>Items must be unused, unwashed, and in their original packaging with all tags intact.
                            </li>
                            <li>Returns are not accepted for final sale or clearance items unless they arrive damaged or
                                defective.</li>
                        </ul>

                        <h5 class="mb-3">How to Initiate a Return:</h5>
                        <ol>
                            <li>Contact our support team at [Your Email/Support Page].</li>
                            <li>Provide your order number and reason for the return.</li>
                            <li>We will guide you through the return shipping process.</li>
                        </ol>

                        <h5 class="mb-3">Refund & Exchange Process:</h5>
                        <ul>
                            <li>Once we receive and inspect the item, we will process your refund within 5-7 business
                                days.</li>
                            <li>Refunds will be issued to the original payment method.</li>
                            <li>If you prefer an exchange, we will ship the replacement item once the return is
                                approved.</li>
                        </ul>

                        <h5 class="mb-3">Return Shipping:</h5>
                        <ul>
                            <li>Customers are responsible for return shipping costs unless the item is defective or
                                incorrect.</li>
                            <li>We recommend using a trackable shipping method to ensure safe delivery.</li>
                            <li>For any assistance, feel free to reach out to our customer support team.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product details-->


    <!--start Recommended product-->
    <section class="py-5">
        <div class="container px-3">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h2 class="section-title">Recommended Products</h2>
                <div class="recommended-products-swiper-nav d-flex align-items-center gap-3">
                    <div class="slide-icon recommended-products-slider-icon-left"><i class="bi bi-arrow-left"></i></div>
                    <div class="slide-icon recommended-products-slider-icon-right"><i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="recommended-products">
                <div class="swiper recommended-products-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-1.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-2.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-3.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-4.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-5.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card border rounded-3 p-3">
                                <div class="d-flex flex-column gap-3">
                                    <div class="position-relative">
                                        <a href="javascript:;">
                                            <img src="assets/images/common/pro-6.jpeg"
                                                class="product-img img-fluid rounded-3" alt="">
                                        </a>
                                        <div class="position-absolute top-0 end-0 m-3 product-actions">
                                            <div class="d-flex flex-column gap-2">
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-heart"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-funnel"></i></a>
                                                <a href="javascript:;" class="btn btn-action"><i
                                                        class="bi bi-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 m-3 product-cart">
                                            <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h3 class="product-name mb-1" data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-title="Wishlist">Grey Venish Pant</h3>
                                        <p class="mb-0 product-price">$499</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Recommended product-->
</main>
<!--end main content-->



<!-- footer start -->

<?php include 'footer.php';?>

<!-- footer close -->