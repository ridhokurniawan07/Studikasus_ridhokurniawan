<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <!-- Favicon -->
    <link href="dairy-website-template/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="dairy-website-template/lib/animate/animate.min.css" rel="stylesheet">
    <link href="dairy-website-template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="dairy-website-template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="dairy-website-template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="dairy-website-template/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">R` BookStore</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="crudkategori.php" class="nav-item nav-link active">Crud Kategori</a>
                <a href="crudsupplier.php" class="nav-item nav-link active">Crud Supplier</a>
                <a href="crudproduk.php" class="nav-item nav-link active">Crud Produk</a>
                <a href="produk.php" class="nav-item nav-link active">Produk</a>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #404a3d;">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Produk</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Books</p>
                <h1 class="mb-5">Explore Our Collection of Books</h1>
            </div>
            <div class="row gx-4">

                <?php
                include "config.php";

                $result = mysqli_query($conn, "SELECT * FROM produk");

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="dairy-website-template/img/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>">
                                <div class="product-overlay">
                                    <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                    <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href=""><?php echo $row['judul']; ?></a>
                                <span class="text-primary me-1">Rp. <?php echo number_format($row['harga'], 0, ',', '.'); ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Product End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mutiara Gading, Bekasi, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0895330883505</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ridhokurniawan633@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About</a>
                    <a class="btn btn-link" href="crudkategori.php">Crud Kategori</a>
                    <a class="btn btn-link" href="crudsupplier.php">Crud Supplier</a>
                    <a class="btn btn-link" href="crudproduk.php">Crud Produk</a>
                    <a class="btn btn-link" href="produk.php">Produk</a>
                    <a class="btn btn-link" href="contact.php">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 - 20:00 </h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 - 17:00 </h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Ridho Kurniawan</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
</body>

</html>