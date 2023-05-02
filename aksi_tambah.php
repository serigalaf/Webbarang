<?php
include 'config.php';

// get data on the form
$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jk = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

//input data to database
mysqli_query($link, "insert into tbanggota values('$idanggota','$nama','$jk','$alamat','$status')");

//mengalihkan halaman ke awal lagi
header("location: index.php");
?>