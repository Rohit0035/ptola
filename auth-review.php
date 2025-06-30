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
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 "><span><i
                                                    class="bi bi-bag-check"></i></span>My Orders</a>
                                        <a href="account-wishlist.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 "><span><i
                                                    class="bi bi-heart"></i></span>Wishlist</a>
                                        <a href="account-payment-methods.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-wallet"></i></span>Payment Methods</a>
                                        <a href="auth-review.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
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
                                        <th>S. No</th>
                                        <th>Rating</th>
                                        <th>Comments</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                        </td>
                                        <td>Great quality and fast delivery!</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                        </td>
                                        <td>Product is good, but packaging was not up to the mark.</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                        </td>
                                        <td>Average experience, expected more features.</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                        </td>
                                        <td>Absolutely loved it. Will order again!</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
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