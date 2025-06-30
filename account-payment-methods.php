<!-- header start -->

<?php include 'header.php';?>

<!-- header close -->


<!--start main content-->
<main class="main-content">
    <!--start breadcrumb-->
    <section class="py-4 section-breadcrumb">
        <div class="container px-3">
            <nav>
                <ol class="breadcrumb mb-0 gap-2">
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Dashboard</a></li>
                    <li><i class="bi bi-chevron-right"></i></li>
                    <li class="breadcrumb-item breadcrumb-active">Payment Methods</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--end breadcrumb-->

    <!--start shop-->
    <section class="py-5 my-account-section">
        <div class="container px-3">
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
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
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
                    <div class="payment-methods-cards">
                        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4">
                            <div class="col d-flex">
                                <div class="card rounded-4 bg-black border w-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <img src="assets/images/gallery/payment/visa.png" width="60" alt="">
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-outline-light btn-sm border-light border-opacity-25 dropdown-toggle dropdown-toggle-nocaret"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:;">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;">Remove</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;">Set as Primary</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <h6 class="mb-0 text-white">Michle Jhon</h6>
                                            <p class="mb-0 text-white">08/25</p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="fs-5 text-white">**** **** **** 5632</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-4 bg-primary border w-100">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <img src="assets/images/gallery/payment/money.png" width="50" alt="">
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-outline-light btn-sm border-light border-opacity-25 dropdown-toggle dropdown-toggle-nocaret"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:;">Edit</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;">Remove</a></li>
                                                    <li><a class="dropdown-item" href="javascript:;">Set as Primary</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <h6 class="mb-0 text-white">Michle Jhon</h6>
                                            <p class="mb-0 text-white">08/25</p>
                                        </div>
                                        <div class="mt-3">
                                            <span class="fs-5 text-white">**** **** **** 5632</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-4 border w-100">
                                    <div class="card-body d-flex align-items-center flex-column justify-content-center">
                                        <div class="d-flex align-items-center flex-column justify-content-center gap-2">
                                            <div class="">
                                                <button type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseExample"
                                                    class="btn btn-outline-dark border"><i
                                                        class="bi bi-plus-circle fs-6"></i></button>
                                            </div>
                                            <p class="mb-0">Add payment method</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body mt-4 rounded-4 border p-4">
                                <h5 class="mb-0">Add new payment method</h5>
                                <hr class="my-4">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div>
                                                <label for="cardNumber" class="form-label">Card Number</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control border-2 py-2"
                                                        id="cardNumber" placeholder="XXXX XXXX XXXX XXXX">
                                                    <span class="position-absolute top-50 end-0 translate-middle-y"><i
                                                            class="bi bi-credit-card fs-6 me-3"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <label for="cardName" class="form-label">Full Name on Card</label>
                                                <input type="text" class="form-control border-2 py-2" id="cardName">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div>
                                                <label for="Expirationdate" class="form-label">Expiration date</label>
                                                <input type="text" class="form-control border-2 py-2"
                                                    id="Expirationdate" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div>
                                                <label for="CVC" class="form-label">CVC</label>
                                                <input type="text" class="form-control border-2 py-2" id="CVC"
                                                    placeholder="CVC">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center gap-3">
                                                <button type="button" class="btn btn-dark px-5 py-2">Add Card</button>
                                                <button type="button"
                                                    class="btn btn-outline-dark px-4 py-2">Cancle</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
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