<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Edit Supplier</title>
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
    </style>
</head>

<?php

include "config.php";

$id = $_GET['id'];

$supplier = mysqli_query($conn, "select * from supplier where id_supplier ='$id' ");

foreach ($supplier as $data_supplier) {
    $id = $data_supplier['id_supplier'];
    $nama_supplier = $data_supplier['nama_supplier'];
    $alamat = $data_supplier['alamat'];
    $no_telp = $data_supplier['no_telp'];
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-container">
                <h3 class="mt-3 mb-3" style="text-align: center;">Edit Data Supplier</h3>
                <form action="proses_editsupplier.php?id=<?php echo $id ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_supplier" class="form-label">Nama</label>
                        <input type="text" name="nama_supplier" class="form-control" required="" value="<?php echo $nama_supplier ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat"><?php echo $alamat ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Telp</label>
                        <input type="number" name="no_telp" class="form-control" required="" value="<?php echo $no_telp ?>">
                    </div>
                    <div class=" mb-3">
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary" id="submit">
                        <a href="crudsupplier.php" class="btn btn-success">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
</script>

<!-- <div class="mb-1">
    <label for="id_penerbit" class="form-label">Id Penerbit</label>
    <select name="id_penerbit" class="form-control">
        <?php foreach ($penerbit as $data) { ?>
            <option value="<?php echo $data['id_penerbit']; ?>" <?php if ($data['id_penerbit'] == $id_penerbit) echo "selected"; ?>>
                <?php echo $data['id_penerbit']; ?>
            </option>
        <?php } ?>
    </select>
</div>
<div class="mb-1">
    <label for="id_pengarang" class="form-label">Id Pengarang</label>
    <select name="id_pengarang" class="form-control">
        <?php foreach ($pengarang as $data) { ?>
            <option value="<?php echo $data['id_pengarang']; ?>" <?php if ($data['id_pengarang'] == $id_pengarang) echo "selected"; ?>>
                <?php echo $data['id_pengarang']; ?>
            </option>
        <?php } ?>
    </select>
</div>
<div class="mb-3">
    <label for="id_katalog" class="form-label">Id Katalog</label>
    <select name="id_katalog" class="form-control">
        <?php foreach ($katalog as $data) { ?>
            <option value="<?php echo $data['id_katalog']; ?>" <?php if ($data['id_katalog'] == $id_katalog) echo "selected"; ?>>
                <?php echo $data['id_katalog']; ?>
            </option>
        <?php } ?>
    </select>
</div> -->