<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
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

$kategori = mysqli_query($conn, "select * from kategori where id_kategori ='$id' ");

foreach ($kategori as $data_kategori) {
    $id = $data_kategori['id_kategori'];
    $nama_kategori = $data_kategori['nama_kategori'];
}
?>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-container">
                <h3 class="mt-3 mb-3" style="text-align: center;">Edit Data Kategori</h3>
                <form action="proses_editkategori.php?id=<?php echo $id ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" required="" value="<?php echo $nama_kategori ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary" id="submit">
                        <a href="crudkategori.php" class="btn btn-success">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>