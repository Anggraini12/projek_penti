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
    <h3>Data Jurusan</h3>
    <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa fa-address-book"></i> Tambah Data</a></span>
  </div>
  <div class="card-body ">
    <table class="table -">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Jurusan</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          #1. koneksikan file ini
          include("../koneksi.php");

          #2. Menulis query
          $tampil = "SELECT * FROM jurusans";

          #3. Jalankan query
          $proses = mysqli_query($koneksi,$tampil);

          #4. tampilkan data dari database
          $nomor =1;
          foreach($proses as $data){
          

          ?>
         <tr>
            <th scope="row"><?=$nomor++?></th>
            <td><?=$data['kode']?></td>
            <td><?=$data['jurusan']?></td>
            <td>
                <a class="btn btn-info" href=""> <i class="fa fa-pen-to-square"></i></a>
                <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
            </td>
         </tr>
         <?php
          }
         ?>
        </tbody>
    </table>
  </div>
  </div>
  </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>

</body>
</html>