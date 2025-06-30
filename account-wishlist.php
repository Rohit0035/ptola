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
                     <li class="breadcrumb-item breadcrumb-active">WishList</li>
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
                                             class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
                                                     class="bi bi-heart"></i></span>Wishlist</a>
                                         <a href="account-payment-methods.php"
                                             class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                     class="bi bi-wallet"></i></span>Payment Methods</a>
                                         <a href="auth-review.php"
                                             class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                     class="bi bi-star"></i></span>My Reviews</a>
                                         <a href="account-my-profile.php"
                                             class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                     class="bi bi-person-square"></i></span>My Profile</a>
                                         <a href="account-addresses.php"
                                             class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
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
                     <div class="shop-wishlist">
                         <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 g-4">
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/02.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/04.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/06.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/05.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/07.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/01.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col">
                                 <div class="wishlist-card">
                                     <div class="position-relative">
                                         <button type="button"
                                             class="btn btn-outline-dark border btn-wishlist-delete position-absolute top-0 end-0 m-3"><i
                                                 class="bi bi-trash"></i></button>
                                         <img src="assets/images/gallery/tabular-product/08.png"
                                             class="rounded-3 img-fluid product-img" alt="">
                                     </div>
                                     <div class="mt-3">
                                         <h6 class="product-name mb-1">Grey Venish Pant</h6>
                                         <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                 class="prev-price text-decoration-line-through">$698</span>$499</p>
                                     </div>
                                     <div class="d-grid mt-3">
                                         <a href="javascript:;"
                                             class="btn btn-dark rounded-3 d-flex align-items-center justify-content-center gap-2 py-2"><i
                                                 class="bi bi-basket2"></i><span>Add to Cart</span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--end row-->
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