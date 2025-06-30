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
                      <li class="breadcrumb-item"><a href="javascript:;" class="breadcrumb-link">Shop</a></li>
                      <li><i class="bi bi-chevron-right"></i></li>
                      <li class="breadcrumb-item breadcrumb-active">Shop</li>
                  </ol>
              </nav>
          </div>
      </section>
      <!--end breadcrumb-->

      <!--start shop-->
      <section class="py-5 shop-page-section">
          <div class="container px-3">
              <div class="row g-lg-4">
                  <div class="col-12 col-lg-3">
                      <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilter"
                          class="btn btn-dark d-lg-none btn-filter-mobile rounded-bottom-0 d-flex align-items-center gap-2 px-4"><i
                              class="bi bi-funnel"></i><span>Filter</span></button>
                      <nav class="navbar navbar-expand-lg p-0">
                          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilter"
                              aria-labelledby="offcanvasFilterLabel">
                              <div class="offcanvas-header">
                                  <h5 class="offcanvas-title" id="offcanvasFilterLabel">Filter</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                      aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                  <div class="shop-filters">
                                      <div class="card mb-4 rounded-3 border">
                                          <div class="card-body">
                                              <div class="selected-fillters">
                                                  <div class="d-flex align-items-center justify-content-between mb-4">
                                                      <h6 class="mb-0">Filter</h6>
                                                      <a href="javascript:;"
                                                          class="link-secondary text-decoration-underline font-14">Clear
                                                          all</a>
                                                  </div>
                                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><span>Shirts</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><span>Jeans</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><span>M</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><span>L</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><i
                                                              class="bi bi-circle-fill text-danger"></i><span>Red</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                      <button
                                                          class="btn btn-sm border btn-outline-dark px-3 d-flex align-items-center gap-1 rounded-5"><i
                                                              class="bi bi-circle-fill text-primary"></i><span>Blue</span><i
                                                              class="bi bi-x-lg"></i></button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-4 border">
                                          <div class="card-body p-4">
                                              <div class="categories-filter">
                                                  <h5 class="mb-3">Categories</h5>
                                                  <div class="list-group list-group-flush mb-0 gap-2">
                                                      <a href="javascript::"
                                                          class="list-group-item d-flex align-items-center justify-content-between p-0 border-bottom-0">
                                                          <span class="category-name">Lorem Ipsum</span>
                                                          <span class="category-number">279</span>
                                                      </a>
                                                      <a href="javascript::"
                                                          class="list-group-item d-flex align-items-center justify-content-between p-0 border-bottom-0">
                                                          <span class="category-name">Lorem Ipsum</span>
                                                          <span class="category-number">287</span>
                                                      </a>
                                                      <a href="javascript::"
                                                          class="list-group-item d-flex align-items-center justify-content-between p-0 border-bottom-0">
                                                          <span class="category-name">Lorem Ipsum</span>
                                                          <span class="category-number">348</span>
                                                      </a>
                                                      <a href="javascript::"
                                                          class="list-group-item d-flex align-items-center justify-content-between p-0 border-bottom-0">
                                                          <span class="category-name">Lorem Ipsum</span>
                                                          <span class="category-number">663</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-4 border">
                                          <div class="card-body p-4">
                                              <div class="price-filter">
                                                  <div id="slider-range"></div>
                                                  <div class="d-flex align-items-center justify-content-center gap-3">
                                                      <input class="form-control" type="number" min=0 max="9900"
                                                          oninput="validity.valid||(value='0');" id="min_price">
                                                      <input class="form-control" type="number" min=0 max="10000"
                                                          oninput="validity.valid||(value='10000');" id="max_price">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-4 border">
                                          <div class="card-body p-4">
                                              <div class="size-filter">
                                                  <h5 class="mb-3">Size</h5>
                                                  <div
                                                      class="product-size-list d-flex align-items-center flex-wrap gap-3">
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option1">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option1">XS</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option2">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option2">S</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option3" checked>
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option3">M</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option4">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option4">L</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option5">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option5">XL</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option6">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option6">XXL</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option7">
                                                          <label class="btn btn-outline-dark btn-product-size"
                                                              for="size-option7">2XL</label>
                                                      </div>
                                                      <div class="product-size-list-item">
                                                          <input type="radio" class="btn-check" name="options-size"
                                                              id="size-option8">
                                                          <label
                                                              class="btn btn-outline-dark border border-2 px-4 rounded-3"
                                                              for="size-option8">Free
                                                              Size</label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-4 border">
                                          <div class="card-body p-4">
                                              <div class="stock-filter">
                                                  <h5 class="mb-3">Brands</h5>
                                                  <div class="form-check mb-2 align-items-center">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand1">
                                                      <label class="form-check-label" for="flexCheckBrand1">Nike
                                                          (810)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand2">
                                                      <label class="form-check-label" for="flexCheckBrand2">Puma
                                                          (370)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand3">
                                                      <label class="form-check-label" for="flexCheckBrand3">Levi's
                                                          (361)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand4">
                                                      <label class="form-check-label" for="flexCheckBrand4">Skechers
                                                          (209)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand5">
                                                      <label class="form-check-label" for="flexCheckBrand5">Reebok
                                                          (965)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand6">
                                                      <label class="form-check-label" for="flexCheckBrand6">Adidas
                                                          (209)</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand7">
                                                      <label class="form-check-label" for="flexCheckBrand7">Louis
                                                          Philippe (147)</label>
                                                  </div>
                                                  <div class="form-check mb-0">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckBrand8">
                                                      <label class="form-check-label" for="flexCheckBrand8">Van Heusen
                                                          (92)</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-4 border">
                                          <div class="card-body p-4">
                                              <div class="color-filter">
                                                  <h5 class="mb-3">Colors</h5>
                                                  <div class="product-colors">
                                                      <div class="form-check mb-2 align-items-center">
                                                          <input class="form-check-input bg-primary" type="checkbox"
                                                              value="" id="flexCheckBlue">
                                                          <label class="form-check-label"
                                                              for="flexCheckBlue">Blue</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-pink" type="checkbox"
                                                              value="" id="flexCheckPink">
                                                          <label class="form-check-label"
                                                              for="flexCheckPink">Pink</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-orange" type="checkbox"
                                                              value="" id="flexCheckOrange">
                                                          <label class="form-check-label"
                                                              for="flexCheckOrange">Orange</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-indigo" type="checkbox"
                                                              value="" id="flexCheckIndigo">
                                                          <label class="form-check-label"
                                                              for="flexCheckIndigo">Indigo</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-black" type="checkbox"
                                                              value="" id="flexCheckBlack">
                                                          <label class="form-check-label"
                                                              for="flexCheckBlack">Black</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-red" type="checkbox"
                                                              value="" id="flexCheckRed">
                                                          <label class="form-check-label" for="flexCheckRed">Red</label>
                                                      </div>
                                                      <div class="form-check mb-2">
                                                          <input class="form-check-input bg-green" type="checkbox"
                                                              value="" id="flexCheckGreen">
                                                          <label class="form-check-label"
                                                              for="flexCheckGreen">Green</label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input bg-yellow" type="checkbox"
                                                              value="" id="flexCheckYellow">
                                                          <label class="form-check-label"
                                                              for="flexCheckYellow">Yellow</label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card rounded-3 mb-0 border">
                                          <div class="card-body p-4">
                                              <div class="stock-filter">
                                                  <h5 class="mb-3">Availability</h5>
                                                  <div class="form-check mb-2 align-items-center">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckInstock">
                                                      <label class="form-check-label" for="flexCheckInstock">In
                                                          stock</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckOutofStock">
                                                      <label class="form-check-label" for="flexCheckOutofStock">Out of
                                                          stock</label>
                                                  </div>
                                                  <div class="form-check mb-2">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckOnSale" checked>
                                                      <label class="form-check-label" for="flexCheckOnSale">On
                                                          Sale</label>
                                                  </div>
                                                  <div class="form-check mb-0">
                                                      <input class="form-check-input" type="checkbox" value=""
                                                          id="flexCheckFreedelivery">
                                                      <label class="form-check-label" for="flexCheckFreedelivery">Free
                                                          delivery</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <!--end filters-->
                              </div>
                          </div>
                      </nav>
                  </div>
                  <div class="col-12 col-lg-9">
                      <div class="shop-products">
                          <div
                              class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 gap-sm-0 mb-4">
                              <div>
                                  <p class="mb-0">Found <span class="fw-semibold">68</span> items</p>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                  <p class="mb-0 fw-semibold">Sort by:</p>
                                  <div class="dropdown">
                                      <a class="btn btn-outline-dark border dropdown-toggle dropdown-toggle-nocaret d-flex align-items-center justify-content-between px-3 w-220"
                                          href="javascript:;" data-bs-toggle="dropdown">
                                          Best Selling<span><i class="bi bi-chevron-down"></i></span>
                                      </a>
                                      <ul class="dropdown-menu p-2 w-220">
                                          <li><a class="dropdown-item rounded" href="javascript:;">Trending</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:;">New Arrivals</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:;">Popularity</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:;">Price: Low to
                                                  High</a></li>
                                          <li><a class="dropdown-item rounded" href="javascript:;">Price: Hight to
                                                  Low</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-4">
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1" data-bs-toggle="tooltip"
                                                  data-bs-placement="left" data-bs-title="Wishlist">Grey Venish Pant
                                              </h3>
                                              <p class="mb-0 product-price">$499</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              <div class="col">
                                  <div class="product-card rounded-3">
                                      <div class="d-flex flex-column gap-3">
                                          <div class="position-relative">
                                              <div class="discount-ribben position-absolute top-0 start-0 m-3">10%</div>
                                              <a href="productdetail.php">
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
                                                  <a href="javascript:;" class="btn btn-dark rounded-5 w-100">Add to
                                                      cart</a>
                                              </div>
                                          </div>
                                          <div class="">
                                              <h3 class="product-name mb-1">Grey Venish Pant</h3>
                                              <p class="mb-0 product-price d-flex align-items-center gap-2"><span
                                                      class="prev-price text-decoration-line-through">$698</span>$499
                                              </p>
                                          </div>
                                      </div>

                                  </div>
                              </div>

                          </div>
                          <!--end row-->

                          <!--pagination-->
                          <div class="page-pagination">
                              <nav class="mt-4">
                                  <ul class="pagination justify-content-center">
                                      <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                  class="bi bi-chevron-double-left"></i></a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                                      <li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:;">4</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:;">5</a></li>
                                      <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                  class="bi bi-chevron-double-right"></i></a></li>
                                  </ul>
                              </nav>
                          </div>
                          <!--end pagination-->

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