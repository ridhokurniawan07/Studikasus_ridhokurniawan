<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        select.form-select {
            width: 100%;
        }
    </style>
</head>

<?php
include "config.php";

$id = $_GET['id'];

$produk = mysqli_query($conn, "select * from produk where id_produk ='$id' ");
$kategori = mysqli_query($conn, "select * from kategori");
$supplier = mysqli_query($conn, "select * from supplier");

foreach ($produk as $data_produk) {
    $judul = $data_produk['judul'];
    $harga = $data_produk['harga'];
    $gambar = $data_produk['gambar'];
    $id_kategori = $data_produk['id_kategori'];
    $id_supplier = $data_produk['id_supplier'];
}

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-container">
                <h3 class="mt-3 mb-3" style="text-align: center;">Edit data Produk</h3>
                <form action="proses_editproduk.php ?id=<?php echo $id ?>" method="post">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" required="" value="<?php echo $judul ?>">
                        </div>
                        <div class=" mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" required="" value="<?php echo $harga ?>">
                        </div>
                        <div class=" mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" required="" value="<?php echo $gambar ?>">
                        </div>
                        <div class=" mb-3">
                            <label for="id_kategori" class="form-label">Id Kategori</label>
                            <select name="id_kategori" class="form-select">
                                <?php foreach ($kategori as $data) { ?>
                                    <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['id_kategori'] . ' - ' . $data['nama_kategori'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_supplier" class="form-label">Id Supplier</label>
                            <select name="id_supplier" class="form-select">
                                <?php foreach ($supplier as $data) { ?>
                                    <option value="<?php echo $data['id_supplier']  ?>"><?php echo $data['id_supplier'] . ' - ' . $data['nama_supplier'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-primary" id="submit">
                            <a href="crudproduk.php" class="btn btn-success">Kembali</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
</script>