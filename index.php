<?php

include ".\db\controller.php";
// displayListHtml($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Africa Géo-Junior</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="image/x-icon" rel="icon" href="assets/img/logo.png">

    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0 py-3">
            <div class="row gx-0" id="row_header">
                <div class="col-md-3">
                    <a href="/Africa-Geo-Junior/index.php"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-start">
                        <h5 class="m-0 text-primary text-uppercase">Africa Géo-Junior</h5>
                    </a>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <a href="/Africa-Geo-Junior/index.php" class="nav-item nav-link active">Home</a>
                                <a href="index.html" class="nav-item nav-link active">Villes</a>
                                <a href="index.html" class="nav-item nav-link active">Pays</a>

                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-end">
                    <a href="https://htmlcodex.com/hotel-html-template-pro"
                        class="btn btn-primary rounded-lg py-2  px-md-5 d-none d-lg-block">LOGIN
                        <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Africa</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase mx-1">Pays</span>&<span
                            class="text-primary text-uppercase mx-1">Villes</span></h1>
                </div>

                <div class="row g-4">
                    <?php

                    foreach ($data as $item) {
                        echo "
    <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"room-item shadow rounded overflow-hidden\">
            <div class=\"position-relative\">
                <img class=\"img-fluid\" src=\"img/room-1.jpg\" alt=\"\">
                " . ($item['type'] === 'town' ?
                            "<small class=\"position-absolute start-0 top-100 translate-middle-y bg-success text-white rounded py-1 px-3 ms-4\">" . $item['type'] . "</small>" :
                            "<small class=\"position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4\">" . $item['type'] . "</small>") . "
            </div>
            <div class=\"p-4 mt-2\">
                <div class=\"d-flex justify-content-between mb-3\">
                    <h5 class=\"mb-0\">" . $item['ville_nom'] . "</h5>
                </div>
                <p class=\"text-body mb-3\">" . $item['pays_nom'] . "</p>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"btn btn-sm btn-primary rounded py-2 px-4\" href=\"\">Update</a>
                    <a class=\"btn btn-sm btn-dark rounded py-2 px-4\" href=\"\">Delete</a>
                </div>
            </div>
        </div>
    </div>
";

                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Footer Start -->
        <footer class="bg-dark py-3">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Africa Géo-Junior.
                            </a>, All Right Reserved Designed By <a class="border-bottom"
                                href="https://htmlcodex.com">Rabeh Abderrahmane</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Ville</a>
                                <a href="">Pays</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>