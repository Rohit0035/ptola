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
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Dashboard</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item breadcrumb-active">My Order</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--end breadcrumb-->

    <!--start shop-->
    <section class="py-5 my-account-section">
        <div class="container px-3">
            <h2 class="d-none">My Orders</h2>
            <div class="row g-lg-4">
                <div class="col-12 col-lg-3">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter"
                        class="btn btn-dark d-lg-none btn-filter-mobile rounded-bottom-0 d-flex align-items-center gap-2 px-4"><i
                            class="bi bi-funnel"></i><span>Account</span></button>
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilter"
                            aria-labelledby="offcanvasFilterLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasFilterLabel">My account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="my-account-menu w-100 border rounded-3 p-3">
                                    <div class="list-group list-group-flush">
                                         <a href="account-orders.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
                                                    class="bi bi-bag-check"></i></span>My Orders</a>
                                        <a href="account-wishlist.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 "><span><i
                                                    class="bi bi-heart"></i></span>Wishlist</a>
                                        <a href="account-payment-methods.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-wallet"></i></span>Payment Methods</a>
                                        <a href="auth-review.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-star"></i></span>My Reviews</a>
                                        <a href="account-my-profile.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 "><span><i
                                                    class="bi bi-person-square"></i></span>My Profile</a>
                                        <a href="account-addresses.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 "><span><i
                                                    class="bi bi-geo-alt"></i></span>Addresses</a>
                                        <a href="auth-login.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-box-arrow-left"></i></span>Logout</a>
                                    </div>
                                </div>
                                <!--end filters-->
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="my-orders border rounded-3 p-3">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Order#</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PG65329</td>
                                        <td>Jan 14, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-primary font-12"></i>In
                                                progress</span></td>
                                        <td>$134.24</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/01.png" width="50"
                                                    height="50" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Light Blue Shirt</p>
                                                    <p class="mb-0">Qty x 1</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KR69453</td>
                                        <td>Jan 18, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-success font-12"></i>Delivered</span>
                                        </td>
                                        <td>$498.82</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/02.png" width="50"
                                                    height="50" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Blue Shirt</p>
                                                    <p class="mb-0">Qty x 2</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AH85479</td>
                                        <td>Jan 22, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-danger font-12"></i>Canceled</span>
                                        </td>
                                        <td>$187.56</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/03.png" width="60"
                                                    height="60" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Formal Pants</p>
                                                    <p class="mb-0">Qty x 1</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DR63257</td>
                                        <td>Jan 26, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-success font-12"></i>Delivered</span>
                                        </td>
                                        <td>$389.14</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/04.png" width="60"
                                                    height="60" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">High Heals</p>
                                                    <p class="mb-0">Qty x 3</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OG45726</td>
                                        <td>Jan 28, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-danger font-12"></i>Canceled</span>
                                        </td>
                                        <td>$179.43</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/05.png" width="60"
                                                    height="60" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Golden Watch</p>
                                                    <p class="mb-0">Qty x 1</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OL96325</td>
                                        <td>Jan 30, 2025</td>
                                        <td><span class="d-flex align-items-center gap-2"><i
                                                    class="bi bi-circle-fill text-primary font-12"></i>In
                                                progress</span></td>
                                        <td>$235.47</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="assets/images/gallery/categories/06.png" width="60"
                                                    height="60" class="rounded-circle" alt="">
                                                <div>
                                                    <p class="mb-0 fw-semibold">Sports Shoes</p>
                                                    <p class="mb-0">Qty x 2</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end shop-->

</main>
<!--end main content-->


<!-- footer start -->

<?php include 'footer.php';?>


<!-- footer close -->