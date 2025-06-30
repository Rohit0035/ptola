<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patola</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/common/favicon.jpg" type="image/png">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
        rel="stylesheet">

    <!--Plugins-->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper-bundle.min.css">

    <!--Bootstrap files-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <!--main style sheet-->
    <link href="assets/sass/style.css" rel="stylesheet">

    <!-- custom -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <!--start header-->
    <header class="top-header py-2">
        <div class="top-strip d-flex align-items-center gap-4 container px-3">
            <!-- <div class="strip-menu-left d-none d-lg-flex">
                <ul class="nav align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link py-1" href="javascript:;">Shipping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="javascript:;">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="javascript:;">Returns Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-1" href="javascript:;">Track Order</a>
                    </li>
                </ul>
            </div>
            <div class="strip-social-links ms-lg-auto flex-lg-grow-0 flex-grow-1">
                <ul class="nav align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="bi bi-twitter-x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="bi bi-linkedin"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="bi bi-pinterest"></i></a>
                    </li>
                </ul>
            </div>
            <div class="dropdown language">
                <a class="btn btn-sm btn-language btn-outline-light border-0 d-flex align-items-center gap-2 px-2 dropdown-toggle dropdown-toggle-nocaret"
                    href="javascript:;" data-bs-toggle="dropdown">
                    <span>English</span><span><i class="bi bi-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">French</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Spanish</a></li>
                    <li><a class="dropdown-item" href="javascript:;">hindi</a></li>
                </ul>
            </div>
            <div class="dropdown language">
                <a class="btn btn-sm btn-language btn-outline-light border-0 d-flex align-items-center gap-2 px-2 dropdown-toggle dropdown-toggle-nocaret"
                    href="javascript:;" data-bs-toggle="dropdown">
                    <span>USD</span><span><i class="bi bi-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">EUR</a></li>
                    <li><a class="dropdown-item" href="javascript:;">INR</a></li>
                    <li><a class="dropdown-item" href="javascript:;">KGM</a></li>
                    <li><a class="dropdown-item" href="javascript:;">DSR</a></li>
                </ul>
            </div> -->
            <marquee behavior="scroll" direction="left" scrollamount="5" class=" text-white  fw-bold">
                <span class="me-5"><i class="bi bi-bag-check"></i> COD Available</span>
                <span class="me-5"><i class="bi bi-award"></i> Legacy Since 1950</span>
                <span class="me-5"><i class="bi bi-heart"></i> 526K IG Community</span>
                <span class="me-5"><i class="bi bi-gem"></i> Choice of Fabrics</span>
                <span class="me-5"><i class="bi bi-emoji-smile"></i> COD Available</span>
                <span class="me-5"><i class="bi bi-award"></i> Legacy Since 1950</span>
                <span class="me-5"><i class="bi bi-heart"></i> 526K IG Community</span>
            </marquee>
        </div>
    </header>
    <!--end header-->


    <!--start nav-->
    <nav class="navbar navbar-expand-xl border-bottom py-0 sticky">
        <div class="container px-3">
            <a class="navbar-brand d-none d-xl-flex" href="index.php">
                <img src="assets/images/common/logo.png" class="logo-img" alt="">
            </a>
            <button type="button" class="d-xl-none btn-menu-close" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <img src="assets/images/common/logo.png" class="logo-img2" alt="" width="150px">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="nav-search p-3 pt-0 border-bottom d-flex d-xl-none">
                    <form class="position-relative w-100">
                        <input type="text" class="form-control nav-search-control ps-5 border-0 py-2"
                            placeholder="what are you looking for ?">
                        <span class="position-absolute top-50 start-0 translate-middle-y"><i
                                class="bi bi-search fs-6 ms-3"></i></span>
                    </form>
                </div>
                <div class="offcanvas-body p-0">
                    <ul class="navbar-nav mx-auto gap-0 gap-xl-2">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span class="parent-menu-name">Plus Size Store</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span class="parent-menu-name">Under 1499</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span class="parent-menu-name">Buy Any 3 in 4000</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <span class="parent-menu-name">Wedding Edit✨ </span>
                                <span class="parent-menu-icon ms-2"><i class="bi bi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu mega-menu p-lg-3 start-0 end-0 rounded-0">
                                <div class="container px-3">
                                    <div class="row row-cols-1 row-cols-lg-5 g-3">
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <!-- <h5 class="list-group-item mega-menu-title px-0 mb-0">MEHENDI</h5> -->
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">MEHENDI</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">HALDI</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">COCKTAIL</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">TROUSSEAU</a>

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/common/pro-1.jpeg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/common/pro-2.jpeg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/common/pro-3.jpeg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/common/pro-4.jpeg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <span class="parent-menu-name">New Arrival</span>
                                <span class="parent-menu-icon ms-2"><i class="bi bi-chevron-down"></i></span>
                            </a>
                            <!-- <div class="dropdown-menu mega-menu p-lg-3 start-0 end-0 rounded-0">
                                <div class="container px-3">
                                    <div class="row  row-cols-lg-5">
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                            <a href="#" class="d-block">
                                                <video src="assets/images/common/g-2.mp4" class="w-100" muted autoplay loop
                                                    playsinline></video>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                            <a href="#" class="d-block">
                                                <video src="assets/images/common/g-2.mp4" class="w-100" muted autoplay loop
                                                    playsinline  style="height:120px;width:100%;"></video>
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                            <a href="#" class="d-block">
                                                <video src="video3.mp4" class="w-100" muted autoplay loop
                                                    playsinline></video>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>

                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <span class="parent-menu-name">Best Seller</span>
                                <span class="parent-menu-icon ms-2"><i class="bi bi-chevron-down"></i></span>
                            </a>
                            <!-- <div class="dropdown-menu mega-menu p-lg-3 start-0 end-0 rounded-0">
                                <div class="container px-3">
                                    <div class="row row-cols-1 row-cols-lg-5 g-3">
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title px-0 mb-0">Apparel</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Casual Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Formal Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Streetwear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Athleisure</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Loungewear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Outerwear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Ethnic Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Pajamas</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Oversized</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title mb-0 px-0">Footwear</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sneakers</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Boots</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Formal Shoes</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sandals</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sports Shoes</a>
                                                <a href="javascript:;" class="list-group-item mega-menu-link px-0">Dress
                                                    shoes</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Luxury Sneakers</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Chelsea Boots</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Training Shoes</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title mb-0 px-0">Accessories</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Backpacks</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Watches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sunglasses</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Jewelry</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Leather Belts</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Smartwatches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Casual Watches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Baseball Caps</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Designer Belts</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/gallery/mega-menu-img-1.jpg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/gallery/mega-menu-img-2.jpg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Men</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <span class="parent-menu-name">Shop</span>
                                <span class="parent-menu-icon ms-2"><i class="bi bi-chevron-down"></i></span>
                            </a>
                            <!-- <div class="dropdown-menu mega-menu p-lg-3 start-0 end-0 rounded-0">
                                <div class="container px-3">
                                    <div class="row row-cols-1 row-cols-lg-5 g-3">
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title px-0 mb-0">Apparel</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Casual Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Formal Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Streetwear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Athleisure</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Loungewear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Outerwear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Ethnic Wear</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Pajamas</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Oversized</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title mb-0 px-0">Footwear</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sneakers</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Boots</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Formal Shoes</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sandals</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sports Shoes</a>
                                                <a href="javascript:;" class="list-group-item mega-menu-link px-0">Dress
                                                    shoes</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Luxury Sneakers</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Chelsea Boots</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Training Shoes</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group list-group-flush">
                                                <h5 class="list-group-item mega-menu-title mb-0 px-0">Accessories</h5>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Backpacks</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Watches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Sunglasses</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Jewelry</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Leather Belts</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Smartwatches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Casual Watches</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Baseball Caps</a>
                                                <a href="javascript:;"
                                                    class="list-group-item mega-menu-link px-0">Designer Belts</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/gallery/mega-menu-img-1.jpg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Women</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="list-group">
                                                <div class="card border">
                                                    <div class="card-body p-2">
                                                        <div class="position-relative">
                                                            <img src="assets/images/gallery/mega-menu-img-2.jpg"
                                                                class="img-fluid rounded" alt="">
                                                            <div class="position-absolute bottom-0 end-0 start-0 m-3">
                                                                <button type="button"
                                                                    class="btn border bg-white px-4 rounded-3 w-100">Men</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right-links nav gap-2 d-flex">
                <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="bi bi-search"></i></a>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <div>
                            <a class="dropdown-item" href="auth-login.php">Sign In</a>
                            <a class="dropdown-item" href="auth-register.php">Sign Up</a>
                        </div>
                        <!-- after login show below menu above menu is hide show below -->
                        <div class="d-none">
                            <a class="dropdown-item" href="#">Custome Nmae</a>
                            <a class="dropdown-item" href="account-orders.php">My Orders</a>
                            <a class="dropdown-item" href="account-my-profile.php">My Profile</a>
                            <a class="dropdown-item" href="account-addresses.php">Address</a>
                            <a class="dropdown-item" href="account-wishlist.php">Wishlist</a>
                            <a class="dropdown-item" href="auth-register.php">Logout</a>
                        </div>
                    </div>
                </div>
                <a class="nav-link position-relative" href="wishlist.php"><i class="bi bi-heart"></i><span
                        class="notify-badge">5</span></a>
                <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart"><i
                        class="bi bi-basket2"></i><span class="notify-badge">8</span></a>
            </div>
        </div>
    </nav>
    <!--end nav-->