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
                    <li class="breadcrumb-item breadcrumb-active">Profile</li>
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
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-wallet"></i></span>Payment Methods</a>
                                        <a href="auth-review.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                    class="bi bi-star"></i></span>My Reviews</a>
                                        <a href="account-my-profile.php"
                                            class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
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
                    <div class="my-profile">
                        <div class="card border-0 rounded-3 bg-light">
                            <div class="card-body p-4">
                                <h5 class="mb-4">My Information</h5>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <label for="FirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control border-2 py-2" id="FirstName"
                                                value="Jhon">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="LastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control border-2 py-2" id="LastName"
                                                value="Michle">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="emailid" class="form-label">Email ID</label>
                                            <input type="text" class="form-control border-2 py-2" id="emailid"
                                                value="jhon@xyz.com">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="PhoneNumber" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control border-2 py-2" id="PhoneNumber"
                                                value="+91-991016XXX">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="PhoneNumber" class="form-label">Address</label>
                                            <input type="text" class="form-control border-2 py-2" id="address" value="">
                                        </div>

                                       
                                    </div>

                                    <h5 class="mb-4 mt-5">Change Password</h5>

                                    <div class="row g-3">
                                        <div class="col-12 col-lg-4">
                                            <label for="FirstName" class="form-label">Email ID</label>
                                            <input type="email" class="form-control border-2 py-2" id=""
                                                value="">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="" class="form-label">Old Password</label>
                                            <input type="password" class="form-control border-2 py-2" id=""
                                                value="">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <label for="" class="form-label">New Password</label>
                                            <input type="password" class="form-control border-2 py-2" id=""
                                                value="">
                                        </div>
                                         <div class="col-12 col-lg-12">
                                            <button type="button" class="btn btn-dark px-4 py-2 mt-5">Save Changes</button>
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