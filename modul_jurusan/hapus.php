<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id   = $_GET['xyz'];

#3.menulis query
$hapus ="DELETE FROM  jurusans WHERE id='$id'";

#4. Jalankan query
$proses = mysqli_query($koneksi,$hapus);


//header("location:index.php");
?>
<script>
    document.location="index.php";
</script>