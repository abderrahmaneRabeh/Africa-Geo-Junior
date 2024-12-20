<?php

include ".\db\controller.php";
include "./lang/lang.php";




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
    <link rel="icon" href="./assets/img/logo3.jpg" type="image/x-icon">

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
                    <a href="/index.php"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-start">
                        <h5 class="m-0 text-primary text-uppercase"><?= setLang("Africa Géo-Junior") ?></h5>
                    </a>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <div class="navbar-collapse justify-content-center" id="navbarCollapse">
                            <div class="navbar-nav py-0" id="navbarCollapseNav">
                                <a href="/index.php" class="nav-item nav-link active"><?= setLang(str: 'Villes') ?></a>
                                <a href="./pages/listPays.php"
                                    class="nav-item nav-link active"><?= setLang("Pays") ?></a>
                                <a href="./pages/statistiques.php"
                                    class="nav-item nav-link active"><?= setLang("statistiques") ?></a>
                                <div class="dropdown">
                                    <a href="#" class="nav-item nav-link active" id="dropdown_language">Language ↓</a>
                                    <div class="dropdown-content hide" id="dropdown_content">
                                        <div><a class="text-dark" href="/index.php?lang=fr">Français</a></div>
                                        <div><a class="text-dark" href="/index.php?lang=en">Anglais</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="navbar-toggler" id="togglecollapse">
                            <span class=" navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-end">
                    <a href="/index.php"
                        class="btn btn-primary rounded-lg py-2  px-md-5 d-none d-lg-block"><?= setLang("se connecter") ?>
                        <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Room Start -->
        <?php if (isset($_GET['msg'])): ?>
            <div class="alert alert-success alert-dismissible d-flex justify-content-around fade show text-center font-weight-bold"
                role="alert">
                <?php echo htmlspecialchars($_GET['msg']); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="all: unset;">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center wow fadeInUp mb-5"
                    data-wow-delay="0.1s">
                    <div class="text-center">
                        <h2 class=""><span class="text-primary text-uppercase mx-1">Africa'</span>S<span
                                class="text-primary text-uppercase mx-1">Villes</span></h2>
                    </div>
                    <div class="text-end">
                        <a href="./pages/paysForm.php"
                            class="btn btn-primary rounded py-2 px-4"><?= setLang("Ajouter une nouvelle Pays") ?></a>
                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <button class="btn btn-outline-primary" onclick="filterBy('capital')">Capital</button>
                        <button class="btn btn-outline-primary me-2"
                            onclick="filterBy('town')"><?= setLang(str: "Villes") ?></button>
                        <button class="btn btn-outline-primary px-5"
                            onclick="filterBy('all')"><?= setLang(str: "Tout") ?></button>
                    </div>

                    <div>
                        <input type="text" id="searchBar" class="form-control px-4" placeholder="Search..."
                            onkeyup="search()">
                    </div>
                </div>

                <div class="row g-4">
                    <?php

                    foreach ($data as $item) {
                        dispayData($item);
                    }

                    ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden ">

                            <div class="p-4 mt-2 d-flex justify-content-center">
                                <a href="./pages/form.php">
                                    <button
                                        class="btn btn-sm btn-primary rounded py-2 px-4"><?= setLang(str: "Ajouter un Ville") ?></button></a>
                            </div>
                        </div>
                    </div>
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
                                <a href="./index.php">Ville</a>
                                <a href="./pages/listPays.php">Pays</a>
                                <a href="./pages/statistiques.php">Statistiques</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="./assets/js/main.js"></script>
</body>

</html>