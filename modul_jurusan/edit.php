<?php
#1. Koneksi kedata base
include("../koneksi.php");

#2. Ambil id yang akan dipilih
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang pilih 
$ambil = "SELECT * FROM jurusans WHERE id= '$id'";

#4. menjalankan query
$edit = mysqli_query($koneksi,$ambil);

#5. Memisahkan record data berbasis colum/field
$data = mysqli_fetch_array($edit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
  <?php include_once('../navbar.php');
  ?>
<div class="container">
    <div class="row mt-5">
        <div class ="col-6"></div>
        <div class="card">
  <div class="card-header">
    <h3>Form Edit Data Jurusan</h3>
  </div>
  <div class="card-body ">
  <form action="update.php" method="POST" enctype="multipart/form-data">
    <input name="id" type="hidden" value="<?=$data['id']?>">
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">kode jurusan</label>
        <input type="text" readonly value="<?=$data['kode']?>" name="kode" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Jurusan</label>
        <input type="text" value="<?=$data['jurusan']?>"  name="jurusan" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>
  </div>
  </div>
  </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>