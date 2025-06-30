<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ptola</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/common/favicon.jpg" type="image/png">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
        rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper-bundle.min.css">
    <!--Bootstrap files-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <!--main style sheet-->
    <link href="assets/sass/style.css" rel="stylesheet">
</head>

<body style="background-color: #bed7fa;">
    <!--start main content-->
    <main class="main-content">
        <section class="py-5" style="background-color:#bed7fa;">
            <div class="container px-3">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-12 col-xl-6">
                        <div class="auth-register p-4 p-sm-5 rounded-3 border bg-white">
                            <div class="text-center mb-4">
                                <a href="index.php">
                                    <img src="assets/images/common/logo.png" width="90px" />
                                </a>
                            </div>
                            <h4 class="mb-0">Forgot Password</h4>
                            <p>Enter your registered email ID to reset the password</p>
                            <div class="form-body mt-5">
                                <div class="row row-cols-1 g-3">
                                    <div class="col">
                                        <label for="EmailAddress" class="form-label">Email address</label>
                                        <input type="email" class="form-control form-control-lg border-2"
                                            id="EmailAddress">
                                    </div>
                                    <div class="col">
                                        <div class="d-grid gap-3">
                                            <a href="javascript:;" class="btn btn-dark btn-lg px-4 rounded-3"><span
                                                    class="fs-6">Send</span></a>
                                            <a href="auth-login.php"
                                                class="btn btn-outline-dark border btn-lg px-4 rounded-3"><span
                                                    class="fs-6">Back to login</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 d-none d-xl-flex">
                        <div class="auth-register-img">
                            <img src="assets/images/common/auth-img.png" class="img-fluid" width="650" alt="">
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>

    </main>
    <!--end main content-->




    <!--JS file-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="assets/plugins/swiper/js/swiper-bundle.min.js"></script>
    <script src="assets/js/search-slider.js"></script>

    <script src="assets/js/main.js"></script>
    <script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bi-eye-slash-fill");
                $('#show_hide_password i').removeClass("bi-eye-fill");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                $('#show_hide_password i').addClass("bi-eye-fill");
            }
        });
    });
    </script>
</body>

</html>