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
                      <li class="breadcrumb-item breadcrumb-active">Address</li>
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
                                              class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3"><span><i
                                                      class="bi bi-person-square"></i></span>My Profile</a>
                                          <a href="account-addresses.php"
                                              class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-0 rounded-3 active"><span><i
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
                          <h4 class="mb-4">My Addresses</h4>
                          <div class="card rounded-3 border">
                              <div class="card-body p-4">
                                  <div class="d-flex align-items-center gap-3">
                                      <h5 class="mb-0">Home</h5>
                                      <span class="badge rounded-5 bg-dark">Primary</span>
                                  </div>
                                  <div class="mt-3">
                                      <address class="mb-0">47-A, Link Road New York <br>
                                          United Kingdom, 201001</address>
                                  </div>
                                  <div class="mt-3 d-flex align-items-center gap-3">
                                      <button type="button" class="btn btn-sm btn-outline-dark px-4 rounded-3"
                                          data-bs-toggle="modal" data-bs-target="#EditAddressModal">Edit</button>
                                      <button type="button"
                                          class="btn btn-sm btn-outline-danger px-4 rounded-3">Delete</button>
                                  </div>
                              </div>
                          </div>
                          <div class="card rounded-3 border mt-4">
                              <div class="card-body p-4">
                                  <div class="d-flex align-items-center gap-3">
                                      <h5 class="mb-0">Home</h5>
                                      <span class="badge rounded-5 bg-dark">Primary</span>
                                  </div>
                                  <div class="mt-3">
                                      <address class="mb-0">47-A, Link Road New York <br>
                                          United Kingdom, 201001</address>
                                  </div>
                                  <div class="mt-3 d-flex align-items-center gap-3">
                                      <button type="button" class="btn btn-sm btn-outline-dark px-4 rounded-3"
                                          data-bs-toggle="modal" data-bs-target="#EditAddressModal">Edit</button>
                                      <button type="button"
                                          class="btn btn-sm btn-outline-danger px-4 rounded-3">Delete</button>
                                  </div>
                              </div>
                          </div>
                          <div class="mt-4">
                              <button type="button" class="btn btn-sm btn-outline-dark border-2 border rounded-3 px-4"
                                  data-bs-toggle="modal" data-bs-target="#AddNewAddressModal"><i
                                      class="bi bi-plus-lg me-2"></i>Add new Address</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!--end row-->
          </div>
      </section>
      <!--end shop-->


      <!-- Edit address Modal -->
      <div class="modal fade" id="EditAddressModal" tabindex="-1" aria-labelledby="EditAddressModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header px-4">
                      <h1 class="modal-title fs-5" id="EditAddressModalLabel">Edit Address</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                      <div class="">
                          <h6 class="fw-semibold mb-3">Contact Details</h6>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingName2" value="Jhon Deo">
                              <label for="floatingName2">Name</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingMobileNo2" value="99-xxxxxxxxxx">
                              <label for="floatingMobileNo2">Mobile No</label>
                          </div>
                      </div>

                      <div class="mt-4">
                          <h6 class="fw-semibold mb-3">Address</h6>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingPinCode2" value="201001">
                              <label for="floatingPinCode2">Pin Code</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingAddress2" value="85-B, UAE Road">
                              <label for="floatingAddress2">Address</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingLocalityTown2" value="Street Name">
                              <label for="floatingLocalityTown2">Locality / Town</label>
                          </div>
                          <div class="row g-3">
                              <div class="col">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="floatingCity2" value="Dubai">
                                      <label for="floatingAddress2">City / District</label>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="floatingState2" value="United Arabia">
                                      <label for="floatingState2">State</label>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class="modal-footer px-4">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-dark">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- end Edit address Modal -->


      <!-- Add New address Modal -->
      <div class="modal fade" id="AddNewAddressModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header px-4">
                      <h1 class="modal-title fs-5">Add New Address</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                      <div class="">
                          <h6 class="fw-bold mb-3">Contact Details</h6>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingName">
                              <label for="floatingName">Name</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingMobileNo">
                              <label for="floatingMobileNo">Mobile No</label>
                          </div>
                      </div>

                      <div class="mt-4">
                          <h6 class="fw-bold mb-3">Address</h6>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingPinCode">
                              <label for="floatingPinCode">Pin Code</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingAddress">
                              <label for="floatingAddress">Address</label>
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingLocalityTown">
                              <label for="floatingLocalityTown">Locality / Town</label>
                          </div>
                          <div class="row">
                              <div class="col">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="floatingCity">
                                      <label for="floatingAddress">City / District</label>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="floatingState">
                                      <label for="floatingState">State</label>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div class="modal-footer px-4">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-dark">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Add New address Modal -->


  </main>
  <!--end main content-->



  <!-- footer start -->

  <?php include 'footer.php';?>

  <!-- footer close -->