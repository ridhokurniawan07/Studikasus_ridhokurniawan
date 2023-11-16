<?php
include "config.php";
$query = mysqli_query($conn, "select * from kategori");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud kategori</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0000FF;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
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

    <div class="mt-3 mb-3">
        <h2>Tabel Daftar Kategori</h2>
    </div>
    <div class="mb-3">
        <a href="tambahkategori.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div>
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["id_kategori"]; ?></td>
                        <td><?php echo $data["nama_kategori"]; ?></td>
                        <td>
                            <a href="editkategori.php?id=<?php echo $data['id_kategori']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="proses_deletekategori.php ?id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('delete?');">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php  } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>