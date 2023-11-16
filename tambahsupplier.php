<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
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

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-container">
                <h3 class="mt-3 mb-3" style="text-align: center;">Tambah Data Supplier</h3>
                <form action="proses_tambahsupplier.php" method="post">
                    <div class="mb-3">
                        <label for="nama_supplier" class="form-label">Nama</label>
                        <input type="text" name="nama_supplier" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Telp</label>
                        <input type="number" name="no_telp" class="form-control" required id="telp">
                    </div>
                    <div class="mb-3">
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
    <select name="id_penerbit" class="form-select">
        <?php foreach ($penerbit as $data) { ?>
            <option value="<?php echo $data['id_penerbit'] ?>"><?php echo $data['id_penerbit'] ?> </option>
        <?php } ?>
    </select>
</div>
<div class="mb-1">
    <label for="id_pengarang" class="form-label">Id Pengarang</label>
    <select name="id_pengarang" class="form-select">
        <?php foreach ($pengarang as $data) { ?>
            <option value="<?php echo $data['id_pengarang'] ?>"><?php echo $data['id_pengarang'] ?> </option>
        <?php } ?>
    </select>
</div>
<div class="mb-3">
    <label for="id_katalog" class="form-label">Id Katalog</label>
    <select name="id_katalog" class="form-select">
        <?php foreach ($katalog as $data) { ?>
            <option value="<?php echo $data['id_katalog'] ?>"><?php echo $data['id_katalog'] ?> </option>
        <?php } ?>
    </select>
</div> -->