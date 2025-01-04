<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yang akan disunting
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM mahasiswas WHERE id='$id'";

#4. menjalankan query
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data Mahasiswa</h3>

            </div>
            <div class="card-body">
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nim</label>
                    <input type="text" value="<?=$data['nim']?>" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Mahasiswa</label>
                    <input type="text" value="<?=$data['nm_mhs']?>" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                    <input type="text" value="<?=$data['tmp_lahir']?>" name="tempat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                    <input type="date" value="<?=$data['tgl_lahir']?>" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" value="<?=$data['alamat']?>" name="alamat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" value="<?=$data['email_mhs']?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jk" value="<?=$data['jk']?>"class="" id="exampleInputPassword1"> Laki Laki
                    <input type="radio" name="jk" value="<?=$data['jk']?>" class="" id="exampleInputPassword1"> perempuan
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-control" id="">
                        <option value="">-Pilih Jurusan-</option>
                        <?php 
                            include('../koneksi.php');
                            $sql_jur = "SELECT * FROM jurusans";
                            $qry_jur = mysqli_query($koneksi,$sql_jur);
                            foreach($qry_jur as $data_jur){
                                
                                ?>
                                <option value="<?=$data_jur['id']?>"><?=$data_jur['jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dosen Wali</label>
                    <select name="dosen" class="form-control" id="">
                        <option value="">-Pilih Dosen Wali-</option>
                        <?php 
                            include('../koneksi.php');
                            $sql_dos = "SELECT * FROM dosens WHERE jabatan='Full Time' ";
                            $qry_dos = mysqli_query($koneksi,$sql_dos);
                            foreach($qry_dos as $data_dos){
                                
                                ?>
                                <option value="<?=$data_dos['id']?>"><?=$data_dos['nama']?></option>
                                <?php
                            }
                        ?>
                    </select>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>